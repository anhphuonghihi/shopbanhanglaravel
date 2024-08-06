@extends('layout_dang_tin')
@section('content')
    <div class="p-body-pageContent">
        <div class="block uix_nodeList block--category ">
            <div class="block-container">
                <div class="uix_block-body--outer">
                    <div class="block-body">
                        @php
                            $danh_muc_con = DB::table('danh_muc')->where('id_danh_muc_cha', '=', $danh_muc_id)->get();
                        @endphp
                        @foreach ($danh_muc_con as $key => $danh_muc_item_con)
                            @include('pages.partials.forum')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="block " data-xf-init="" data-type="thread" data-href="/inline-mod/">
            <div class="block-outer">
                @if ($post->count() > 20)
                    {{ $post->links('vendor.pagination.default') }}
                @endif
            </div>
            <div class="block-container uix_discussionList">

                @include('pages.partials.filterBar')
                <div class="block-body">
                    <div class="structItemContainer">
                        @php
                            $stiky_post = DB::table('tbl_post')
                                ->where('danh_muc_id', '=', $danh_muc_id)
                                ->where('stiky', '=', '1')
                                ->where(function ($stiky_post) use ($output2arrayname) {
                                    foreach ($output2arrayname as $word) {
                                        $stiky_post->orWhere('nhan', 'LIKE', '%' . $word . '%');
                                    }
                                })
                                ->orderBy('ten_bai_viet', $direction)
                                ->get();
                            $stiky_post_count = $stiky_post->count();

                            $stiky_post_danh_muc_con_ok = [];
                            if ($danh_muc_con->count() > 0) {
                                foreach ($danh_muc_con as $key => $danh_muc_item_con) {
                                    array_push(
                                        $stiky_post_danh_muc_con_ok,
                                        DB::table('tbl_post')
                                            ->where('danh_muc_id', '=', $danh_muc_item_con->id)
                                            ->where('stiky', '=', '1')
                                            ->where(function ($stiky_post_danh_muc_con_ok) use ($output2arrayname) {
                                                foreach ($output2arrayname as $word) {
                                                    $stiky_post_danh_muc_con_ok->orWhere(
                                                        'nhan',
                                                        'LIKE',
                                                        '%' . $word . '%',
                                                    );
                                                }
                                            })
                                            ->orderBy('ten_bai_viet', $direction)
                                            ->get(),
                                    );
                                }
                                $stiky_post_count += (int) count($stiky_post_danh_muc_con_ok[0]);
                            }

                            $page = 1;
                            if (!empty($_SERVER['QUERY_STRING'])) {
                                if (strripos($_SERVER['QUERY_STRING'], 'page=')) {
                                    # code...
                                    $page_number = strripos($_SERVER['QUERY_STRING'], 'page=');
                                    $page = substr($_SERVER['QUERY_STRING'], $page_number - 1);
                                }
                            }
                        @endphp
                        @if ($stiky_post_count > 0 && $page == 1)
                            <h3 class="block-minorHeader uix_threadListSeparator">
                                Sticky threads
                                <span class="uix_threadCollapseTrigger is-active" data-xf-click="toggle"
                                    data-storage-type="cookie" data-target="< :up :next" data-xf-init="toggle-storage"
                                    data-storage-key="thuixfst-31">
                                    <i class="fa--xf far fa-chevron-down" aria-hidden="true"></i>
                                </span>
                            </h3>
                            <div class="uix_stickyContainerOuter  is-active">
                                <div class="uix_stickyContainerInner">
                                    <div class="structItemContainer-group structItemContainer-group--sticky">
                                        @foreach ($stiky_post as $key => $stiky_post_item)
                                            @include('pages.partials.stiky_post')
                                        @endforeach

                                        @if ($danh_muc_con->count() > 0 && count($stiky_post_danh_muc_con_ok[0]) != 0)
                                            @foreach ($stiky_post_danh_muc_con_ok[0] as $key => $stiky_post_item)
                                                @include('pages.partials.stiky_post')
                                            @endforeach
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h3 class="block-minorHeader uix_threadListSeparator">Normal threads</h3>
                        @endif
                        <div class="structItemContainer-group js-threadList">
                            @php
                                $stiky_post = DB::table('tbl_post')
                                    ->where('danh_muc_id', '=', $danh_muc_id)
                                    ->where('stiky', '=', '0')
                                    ->where(function ($stiky_post) use ($output2arrayname) {
                                        foreach ($output2arrayname as $word) {
                                            $stiky_post->orWhere('nhan', 'LIKE', '%' . $word . '%');
                                        }
                                    })
                                    ->orderBy('ten_bai_viet', $direction)

                                    ->get();
                            @endphp

                            @foreach ($stiky_post as $key => $stiky_post_item)
                                @include('pages.partials.stiky_post')
                            @endforeach

                            @php
                                $stiky_post_danh_muc_con = [];
                                if ($danh_muc_con->count() > 0) {
                                    foreach ($danh_muc_con as $key => $danh_muc_item_con) {
                                        array_push(
                                            $stiky_post_danh_muc_con,
                                            DB::table('tbl_post')
                                                ->where('danh_muc_id', '=', $danh_muc_item_con->id)
                                                ->where('stiky', '=', '0')
                                                ->where(function ($stiky_post_danh_muc_con) use ($output2arrayname) {
                                                    foreach ($output2arrayname as $word) {
                                                        $stiky_post_danh_muc_con->orWhere(
                                                            'nhan',
                                                            'LIKE',
                                                            '%' . $word . '%',
                                                        );
                                                    }
                                                })
                                                ->orderBy('ten_bai_viet', $direction)
                                                ->get(),
                                        );
                                    }
                                }

                            @endphp
                            @if (count($stiky_post_danh_muc_con) != 0)
                                @foreach ($stiky_post_danh_muc_con[0] as $key => $stiky_post_item)
                                    @include('pages.partials.stiky_post')
                                @endforeach
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-outer block-outer--after">
                @php
                    Session::put('danh_muc_id', $danh_muc_id);
                @endphp
                @if ($post->count() > 20)
                    {{ $post->links('vendor.pagination.default') }}
                @endif
            </div>
        </div>
    </div>
@endsection
