@extends('layout_dang_tin')

@section('content')
    <div class="p-body-pageContent">
        <div class="uix_nodeList block">

            @foreach ($danh_muc_0 as $key => $danh_muc_item)
                <div class="block block--category block--category.{{ $danh_muc_item->matp }}">
                    <span class="u-anchorTarget"></span>
                    <h2 class="block-header js-nodeMain">
                        <div class="uix_categoryStrip-content">
                            {{ $danh_muc_item->name_city }}
                        </div>

                    </h2>
                    <div class="block-container th_node--overwriteTextStyling">
                        <div class="uix_block-body--outer">
                            <div class="block-body">
                                @php
                                    $danh_muc_con = DB::table('tbl_quanhuyen')
                                        ->where('matp', '=', $danh_muc_item->matp)
                                        ->get();
                                    $danh_muc_item_con = $danh_muc_item;
                                @endphp
                                @include('pages.partials.address')
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
