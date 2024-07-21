@extends('layout_dang_tin')

@section('content')
    <div class="p-body-pageContent">
        <div class="uix_nodeList block">

            @foreach ($danh_muc_0 as $key => $danh_muc_item)
                @if ($danh_muc_item->id_danh_muc_cha == 0)
                    <div class="block block--category block--category.{{ $danh_muc_item->id }}">
                        <span class="u-anchorTarget" id="ban-dieu-hanh.{{ $danh_muc_item->id }}"></span>
                        <h2 class="block-header js-nodeMain">
                            <div class="uix_categoryStrip-content">
                                <a href="#{{ $danh_muc_item->danh_muc_slug }}.{{ $danh_muc_item->id }}"
                                    class="uix_categoryTitle" data-xf-init=""
                                    data-shortcut="node-description">{{ $danh_muc_item->ten_danh_muc }}</a>
                            </div>
                            <a href="javascript:;" class="u-ripple categoryCollapse--trigger rippleButton" rel="nofollow"><i
                                    class="fa--xf far fa-chevron-up" aria-hidden="true"></i></a>
                        </h2>
                        <div class="block-container th_node--overwriteTextStyling">
                            <div class="uix_block-body--outer">
                                <div class="block-body">
                                    @php
                                        $danh_muc_con = DB::table('danh_muc')
                                            ->where('id_danh_muc_cha', '=', $danh_muc_item->id)
                                            ->get();
                                    @endphp
                                    @foreach ($danh_muc_con as $key => $danh_muc_item_con)
                                        @include('pages.partials.forum')
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
