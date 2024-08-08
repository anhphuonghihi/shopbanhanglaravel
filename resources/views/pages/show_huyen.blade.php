@extends('layout_dang_tin')
@section('content')
    <div class="p-body-pageContent">
        <div class="block " data-xf-init="" data-type="thread" data-href="/inline-mod/">
            <div class="block-outer">
                @if ($post->count() > 20)
                    {{ $post->links('vendor.pagination.default') }}
                @endif
            </div>
            <div class="block-container uix_discussionList">

                <div class="block-body">
                    <div class="structItemContainer">
                        @php
                            $stiky_post = DB::table('tbl_post')
                                ->where('huyen_id', '=', $huyen_id)
                                ->where('stiky', '=', '1')

                                ->get();
                            $stiky_post_count = $stiky_post->count();

                            $stiky_post_danh_muc_con_ok = [];

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
                                        @foreach ($stiky_post as $key => $item)
                                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--real is-prefix34 is-prefix47 is-unread js-inlineModContainer js-threadListItem-125897"
                                                data-author="Soursop">
                                                <div class="structItem-cell structItem-cell--icon">
                                                    <div class="structItem-iconContainer">
                                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-125897">
                                                            <div>
                                                                <div class="lbContainer js-lbContainer lbContainer--inline avatar avatar--s"
                                                                    data-xf-init="lightbox" data-lb-single-image="1"
                                                                    data-lb-universal="1"
                                                                    data-lb-caption-title="TRANG VENUS - EM GÁI PG NGỌT NGÀO NHƯ CHOCOLATE - VÚ TO - MÔNG MẨY"
                                                                    data-lb-caption-desc="" data-lb-container-zoom="1"
                                                                    data-lb-trigger=".lbTrigger"
                                                                    data-lb-id="lb-thread-105263">

                                                                    <div id="js-lbImage-105263" class="lbContainer-zoomer"
                                                                        data-src="{{ $item->anh_dai_dien }}"
                                                                        aria-label="Zoom">
                                                                    </div>
                                                                    <span class="heightHelper"></span><img
                                                                        data-src="/public/uploads/product/{{ $item->anh_dai_dien }}"
                                                                        src="/public/uploads/product/{{ $item->anh_dai_dien }}"
                                                                        datahref="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                                        class="lbTrigger bbImage alignThumbnail"
                                                                        data-zoom-target="1" alt="" loading="lazy"
                                                                        data-fancybox="lb-lb-thread-105263"
                                                                        style="cursor: pointer;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="structItem-cell structItem-cell--main"
                                                    data-xf-init="touch-proxy">
                                                    <div class="structItem-title"
                                                        uix-href="/threads/{{ $item->post_slug }}.{{ $item->id }}">

                                                        @php
                                                            $nhan = $item->nhan;
                                                            $listnhan = explode(',', $nhan);
                                                        @endphp
                                                        @foreach ($listnhan as $key => $listnhan_item)
                                                            @php
                                                                $nhan = DB::table('tbl_tag')
                                                                    ->where('name', '=', $listnhan_item)
                                                                    ->where('la_label', '=', '1')
                                                                    ->get();
                                                            @endphp
                                                            <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                                class="labelLink" rel="nofollow"></a><a
                                                                href="/threads/{{ $item->post_slug }}.{{ $item->id }}?nhan={{ $nhan[0]->id }}"
                                                                class="labelLink" rel="nofollow"><span
                                                                    class="label label--@php if($nhan->count()>0){
                                                                echo $nhan[0]->color;
                                                            } else{
                                                                echo 'green';
                                                            } @endphp"
                                                                    dir="auto">
                                                                    {{ $listnhan_item }}</span></a><span
                                                                class="label-append">&nbsp;</span>
                                                        @endforeach

                                                        <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                            class="" data-tp-primary="on"
                                                            data-xf-init="preview-tooltip"
                                                            data-preview-url="/threads/trang-venus-em-gai-pg-ngot-ngao-nhu-chocolate-vu-to-mong-may.105263/preview"
                                                            id="js-XFUniqueId134">{{ $item->ten_bai_viet }}</a>
                                                    </div>

                                                    @php
                                                        $user_postnew = DB::table('users')
                                                            ->where('id', '=', $item->user_id)
                                                            ->limit(1)
                                                            ->get();
                                                        $tbl_binh_luan = DB::table('tbl_binh_luan')
                                                            ->where('post_id', '=', $item->id)
                                                            ->orderby('created_at', 'desc')
                                                            ->get();
                                                        $count_binh_luan_by_id_post = $tbl_binh_luan->count();
                                                        if (!empty($tbl_binh_luan[0])) {
                                                            $user_bl = DB::table('users')
                                                                ->where('id', '=', $tbl_binh_luan[0]->user_id)
                                                                ->limit(1)
                                                                ->get();
                                                        }
                                                    @endphp
                                                    <div class="structItem-minor">



                                                        <ul class="structItem-parts">
                                                            <li><a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                                    class="username " dir="auto" data-user-id="158380"
                                                                    data-xf-init="member-tooltip"
                                                                    id="js-XFUniqueId135">{{ $user_postnew[0]->username }}</a>
                                                            </li>
                                                            <li class="structItem-startDate"><a
                                                                    href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                                    rel="nofollow"><time class="u-dt"> @php
                                                                        $date2 = new DateTime($item->created_at);
                                                                    @endphp
                                                                        @include('pages.partials.time')</time></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div class="structItem-cell structItem-cell--meta"
                                                    title="First message reaction score: 0">
                                                    <dl class="pairs pairs--justified">
                                                        <dt>Trả lời</dt>
                                                        <dd>{{ $count_binh_luan_by_id_post }}</dd>
                                                    </dl>
                                                    <dl class="pairs pairs--justified structItem-minor">
                                                        <dt>Đọc</dt>
                                                        <dd>{{ $item->view }}</dd>
                                                    </dl>
                                                </div>
                                                <div class="structItem-cell structItem-cell--latest ">

                                                    @if ($count_binh_luan_by_id_post > 0)
                                                        <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                            rel="nofollow"><time class="structItem-latestDate u-dt"
                                                                dir="auto">@php
                                                                    if ($tbl_binh_luan[0]) {
                                                                        $date2 = new DateTime(
                                                                            $tbl_binh_luan[0]->created_at,
                                                                        );
                                                                    }
                                                                @endphp
                                                                @include('pages.partials.time')</time></a>
                                                        <div class="structItem-minor">

                                                            <a href="/members/anh-tuan-r.497523/" class="username "
                                                                dir="auto" data-user-id="497523"
                                                                data-xf-init="member-tooltip"
                                                                id="js-XFUniqueId136">{{ $user_bl[0]->username }}
                                                            </a>

                                                        </div>
                                                    @endif

                                                </div>


                                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                                    @if ($count_binh_luan_by_id_post > 0)
                                                        <div class="structItem-iconContainer">
                                                            <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                                class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                                                data-user-id="475821"
                                                                data-xf-init="member-tooltip"style="background-color: {{ $user_bl[0]->background_color ?? 'red' }}; color: #b9f6ca"
                                                                id="js-XFUniqueId149">
                                                                <span class="avatar-u475821-s" role="img"
                                                                    aria-label="Little bird_ckv"> @php

                                                                        $user_name = $user_bl[0]->username;
                                                                        echo strtoupper(
                                                                            substr(
                                                                                $user_name,
                                                                                0,
                                                                                -(strlen($user_name) - 1),
                                                                            ),
                                                                        );
                                                                    @endphp</span>
                                                            </a>


                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <h3 class="block-minorHeader uix_threadListSeparator">Normal threads</h3>
                        @endif
                        <div class="structItemContainer-group js-threadList">
                            @php
                                $stiky_post = DB::table('tbl_post')
                                    ->where('huyen_id', '=', $huyen_id)
                                    ->where('stiky', '=', '0')

                                    ->get();
                            @endphp

                            @foreach ($stiky_post as $key => $item)
                                <div class="structItem structItem--thread has-thumbnail has-thumbnail--real is-prefix34 is-prefix47 is-unread js-inlineModContainer js-threadListItem-125897"
                                    data-author="Soursop">
                                    <div class="structItem-cell structItem-cell--icon">
                                        <div class="structItem-iconContainer">
                                            <div class="threadThumbnailWrapper" id="thread-thumbnail-125897">
                                                <div>
                                                    <div class="lbContainer js-lbContainer lbContainer--inline avatar avatar--s"
                                                        data-xf-init="lightbox" data-lb-single-image="1"
                                                        data-lb-universal="1"
                                                        data-lb-caption-title="TRANG VENUS - EM GÁI PG NGỌT NGÀO NHƯ CHOCOLATE - VÚ TO - MÔNG MẨY"
                                                        data-lb-caption-desc="" data-lb-container-zoom="1"
                                                        data-lb-trigger=".lbTrigger" data-lb-id="lb-thread-105263">

                                                        <div id="js-lbImage-105263" class="lbContainer-zoomer"
                                                            data-src="{{ $item->anh_dai_dien }}" aria-label="Zoom">
                                                        </div>
                                                        <span class="heightHelper"></span><img
                                                            data-src="/public/uploads/product/{{ $item->anh_dai_dien }}"
                                                            src="/public/uploads/product/{{ $item->anh_dai_dien }}"
                                                            datahref="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                            class="lbTrigger bbImage alignThumbnail" data-zoom-target="1"
                                                            alt="" loading="lazy"
                                                            data-fancybox="lb-lb-thread-105263" style="cursor: pointer;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">
                                        <div class="structItem-title"
                                            uix-href="/threads/{{ $item->post_slug }}.{{ $item->id }}">

                                            @php
                                                $nhan = $item->nhan;
                                                $listnhan = explode(',', $nhan);
                                            @endphp
                                            @foreach ($listnhan as $key => $listnhan_item)
                                                @php
                                                    $nhan = DB::table('tbl_tag')
                                                        ->where('name', '=', $listnhan_item)
                                                        ->where('la_label', '=', '1')
                                                        ->get();
                                                @endphp
                                                <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                    class="labelLink" rel="nofollow"></a><a
                                                    href="/threads/{{ $item->post_slug }}.{{ $item->id }}?nhan={{ $nhan[0]->id }}"
                                                    class="labelLink" rel="nofollow"><span
                                                        class="label label--@php if($nhan->count()>0){
                    echo $nhan[0]->color;
                } else{
                    echo 'green';
                } @endphp"
                                                        dir="auto">
                                                        {{ $listnhan_item }}</span></a><span
                                                    class="label-append">&nbsp;</span>
                                            @endforeach

                                            <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}" class=""
                                                data-tp-primary="on" data-xf-init="preview-tooltip"
                                                data-preview-url="/threads/trang-venus-em-gai-pg-ngot-ngao-nhu-chocolate-vu-to-mong-may.105263/preview"
                                                id="js-XFUniqueId134">{{ $item->ten_bai_viet }}</a>
                                        </div>

                                        @php
                                            $user_postnew = DB::table('users')
                                                ->where('id', '=', $item->user_id)
                                                ->limit(1)
                                                ->get();
                                            $tbl_binh_luan = DB::table('tbl_binh_luan')
                                                ->where('post_id', '=', $item->id)
                                                ->orderby('created_at', 'desc')
                                                ->get();
                                            $count_binh_luan_by_id_post = $tbl_binh_luan->count();
                                            if (!empty($tbl_binh_luan[0])) {
                                                $user_bl = DB::table('users')
                                                    ->where('id', '=', $tbl_binh_luan[0]->user_id)
                                                    ->limit(1)
                                                    ->get();
                                            }
                                        @endphp
                                        <div class="structItem-minor">



                                            <ul class="structItem-parts">
                                                <li><a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                        class="username " dir="auto" data-user-id="158380"
                                                        data-xf-init="member-tooltip"
                                                        id="js-XFUniqueId135">{{ $user_postnew[0]->username }}</a>
                                                </li>
                                                <li class="structItem-startDate"><a
                                                        href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                        rel="nofollow"><time class="u-dt"> @php
                                                            $date2 = new DateTime($item->created_at);
                                                        @endphp
                                                            @include('pages.partials.time')</time></a></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="structItem-cell structItem-cell--meta"
                                        title="First message reaction score: 0">
                                        <dl class="pairs pairs--justified">
                                            <dt>Trả lời</dt>
                                            <dd>{{ $count_binh_luan_by_id_post }}</dd>
                                        </dl>
                                        <dl class="pairs pairs--justified structItem-minor">
                                            <dt>Đọc</dt>
                                            <dd>{{ $item->view }}</dd>
                                        </dl>
                                    </div>
                                    <div class="structItem-cell structItem-cell--latest ">

                                        @if ($count_binh_luan_by_id_post > 0)
                                            <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                rel="nofollow"><time class="structItem-latestDate u-dt"
                                                    dir="auto">@php
                                                        if ($tbl_binh_luan[0]) {
                                                            $date2 = new DateTime($tbl_binh_luan[0]->created_at);
                                                        }
                                                    @endphp
                                                    @include('pages.partials.time')</time></a>
                                            <div class="structItem-minor">

                                                <a href="/members/anh-tuan-r.497523/" class="username " dir="auto"
                                                    data-user-id="497523" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId136">{{ $user_bl[0]->username }}
                                                </a>

                                            </div>
                                        @endif

                                    </div>


                                    <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                        @if ($count_binh_luan_by_id_post > 0)
                                            <div class="structItem-iconContainer">
                                                <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                    class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                                    data-user-id="475821"
                                                    data-xf-init="member-tooltip"style="background-color: {{ $user_bl[0]->background_color ?? 'red' }}; color: #b9f6ca"
                                                    id="js-XFUniqueId149">
                                                    <span class="avatar-u475821-s" role="img"
                                                        aria-label="Little bird_ckv"> @php

                                                            $user_name = $user_bl[0]->username;
                                                            echo strtoupper(
                                                                substr($user_name, 0, -(strlen($user_name) - 1)),
                                                            );
                                                        @endphp</span>
                                                </a>


                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="block-outer block-outer--after">
                @php
                    Session::put('huyen_id', $huyen_id);
                @endphp
                @if ($post->count() > 20)
                    {{ $post->links('vendor.pagination.default') }}
                @endif
            </div>
        </div>
    </div>
@endsection
