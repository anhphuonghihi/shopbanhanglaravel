<li class="block-row">
    <div class="contentRow">
        <div class="contentRow-figure">
            <div class="threadThumbnailWrapper" id="thread-thumbnail-128357">
                <div>
                    <div>
                        <a class="avatar avatar--xxs" href="/threads/{{ $item->post_slug }}.{{ $item->id }}"><span
                                class="heightHelper"></span><img class="alignThumbnail"
                                src="/public/uploads/product/{{ $item->anh_dai_dien }}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentRow-main contentRow-main--close">
            @php
                $nhan = $item->nhan;
                $listnhan = explode(',', $nhan, -1);
            @endphp
            <a href="/threads/dau-xinh-2k5-_-so-1-ve-ngoan-va-ngon-va-dang-yeu-_-nen-can-anh-em-duoc-bao-ton.128357/">
                @foreach ($listnhan as $key => $listnhan_item)
                    @php
                        $nhan = DB::table('tbl_tag')
                            ->where('name', '=', $listnhan_item)
                            ->where('la_label', '=', '1')
                            ->get();
                    @endphp
                    <span
                        class="label label--@php if($nhan->count() > 0){
                        echo $nhan[0]->color;
                    } else{
                        echo 'green';
                    } @endphp"
                        dir="auto">
                        {{ $listnhan_item }}
                    </span>
                @endforeach

                {{ $item->ten_bai_viet }}
            </a>
            @php
                $danh_muc = DB::table('danh_muc')
                    ->where('id', '=', $item->danh_muc_id)
                    ->get();
                $listnhan = explode(',', $nhan, -1);
            @endphp
            <div class="contentRow-minor contentRow-minor--hideLinks">
                <a href="/forums/gai-goi-tran-duy-hung-lang.134/">{{ $danh_muc[0]->ten_danh_muc }}</a>
            </div>
        </div>

    </div>
</li>
