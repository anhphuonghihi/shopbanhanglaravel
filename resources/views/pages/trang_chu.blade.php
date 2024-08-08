@extends('layout_dang_tin')
@section('content')
    <div class="p-body-pageContent">
        <div class="porta-articles-above-full">
            @foreach ($danh_muc as $danh_muc_item)
                <div class="block porta-masonry" data-widget-id="17" data-widget-key="gghncc"
                    data-widget-definition="EWRporta_articles" data-xf-init="porta-masonry">
                    @php
                        $stiky_post = DB::table('tbl_post')
                            ->where('danh_muc_id', '=', $danh_muc_item->id)
                            ->where('stiky', '=', '1')
                            ->get();
                        $stiky_post_count = $stiky_post->count();
                        $danh_muc_con = DB::table('danh_muc')
                            ->where('id_danh_muc_cha', '=', $danh_muc_item->id)
                            ->get();
                        $stiky_post_danh_muc_con_ok = [];
                        if ($danh_muc_con->count() > 0) {
                            foreach ($danh_muc_con as $key => $danh_muc_item_con) {
                                array_push(
                                    $stiky_post_danh_muc_con_ok,
                                    DB::table('tbl_post')
                                        ->where('danh_muc_id', '=', $danh_muc_item_con->id)
                                        ->where('stiky', '=', '1')
                                        ->get(),
                                );
                            }
                            $stiky_post_count += (int) count($stiky_post_danh_muc_con_ok[0]);
                        }

                    @endphp
                    @if ($stiky_post_count > 0)
                        <h3 class="ckvtitle"><span><a
                                    href="/forums/{{ $danh_muc_item->danh_muc_slug }}.{{ $danh_muc_item->id }}"
                                    class="">{{ $danh_muc_item->ten_danh_muc }}</a></span></h3>
                        @foreach ($stiky_post as $key => $stiky_post_item)
                            <div class="porta-article-item" style=" left: 0px; top: 0px;">
                                <div class="block-container porta-article-container">
                                    <a class="porta-article-header" data-cache="false" data-xf-click=""
                                        href="/threads/hot-girl-diep-anh-_-dang-yeu-de-thuong-_-lam-tinh-max-phe-luon.126945/">
                                        <div class="porta-header-image"
                                            style="background-image: url('/public/uploads/product/{{ $stiky_post_item->anh_dai_dien }}');">
                                        </div>
                                        <div class="porta-header-text">
                                            <span>
                                                <span class="label label--red" dir="auto">✪ ĐỘC QUYỀN ✪</span><span
                                                    class="label-append">&nbsp;</span><span class="label label--orange"
                                                    dir="auto">2.000K</span><span
                                                    class="label-append">&nbsp;</span><span class="label label--skyBlue"
                                                    dir="auto">Xã Đàn</span>
                                                HOT GIRL DIỆP ANH _ ĐÁNG YÊU DỄ THƯƠNG _ LÀM TÌNH MAX PHÊ LUÔN
                                            </span>
                                        </div>
                                    </a>
                                    <div class="block-body message-inner">
                                        <div class="message-cell porta-article-date">
                                            <div class="porta-date-block">
                                                <b><i class="fa--xf far fa-thumbtack" aria-hidden="true"></i></b>
                                                PIN
                                            </div>
                                        </div>
                                        <div class="message-cell message-main">
                                            <header class="message-attribution">
                                                <div class="message-attribution-main">
                                                    <ul class="listInline listInline--bullet">
                                                        <li>
                                                            <i class="fa--xf far fa-user" aria-hidden="true"></i>
                                                            <a href="/ewr-porta/authors/inca.275659/" class="u-concealed">
                                                                Inca</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa--xf far fa-clock" aria-hidden="true"></i>
                                                            <a href="/threads/hot-girl-diep-anh-_-dang-yeu-de-thuong-_-lam-tinh-max-phe-luon.126945/"
                                                                class="u-concealed">
                                                                <time class="u-dt" dir="auto"
                                                                    datetime="2024-07-10T13:44:00+0700"
                                                                    data-time="1720593840" data-date-string="10/7/24"
                                                                    data-time-string="13:44" title="10/7/24 lúc 13:44"
                                                                    data-full-old-date="true">10/7/24</time></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="message-attribution-opposite">
                                                    <ul class="listInline listInline--bullet">
                                                        <li>
                                                            <i class="fa--xf far fa-eye" aria-hidden="true"></i>
                                                            192,269
                                                        </li>
                                                        <li>
                                                            <i class="fa--xf far fa-comments" aria-hidden="true"></i>
                                                            27
                                                        </li>
                                                    </ul>
                                                </div>
                                            </header>
                                            <div class="message-body">
                                                <div class="bbWrapper">THÔNG TIN VỀ HOT GIRL Nghệ danh: DIỆP ANH Số điện
                                                    thoại:
                                                    0372078048 Pass: Bạn anh xcheckerviet.biz Giá: 2000K/shot/1 lần xuất
                                                    tinh
                                                    Loại
                                                    gái
                                                    gọi: Gái Gọi Hà Nội - Hàng Cao Cấp Khu vực hoạt động : Trường Chinh Thời
                                                    gian
                                                    hoạt
                                                    động: 11h00 sáng đến 12h đêm === ĐÁNH GIÁ NGOẠI HÌNH === Tổng thể: Cao
                                                    1m65
                                                    mặt
                                                    xinh
                                                    xắn nhưng vô cùng dâm đãng, body vô cùng gợi cảm, nói chuyện lả lơi và
                                                    có
                                                    nét
                                                    quyến
                                                    rũ khó có thể chối từ Vòng 1: to và đẹp, đầu ti hồng hào, bóp vô cùng
                                                    sướng
                                                    tay
                                                    bú
                                                    mút thoải mái, không giữ hàng Vòng 2: body vô cùng gợi cảm Vòng 3: căng,
                                                    cong và
                                                    mịn
                                                    màng, da mát mịn màng Vòng 4: sạch sẽ, gọn gàng, luôn được chăm sóc cẩn
                                                    thận,
                                                    nước
                                                    nôi đầy đủ. === DỊCH VỤ CAM KẾT === Service: tận tuỵ như người yêu, kỹ
                                                    năng
                                                    rất
                                                    tốt,
                                                    hợp tác mọi tư thế với checker, dịu dàng sâu lắng. Phong cách làm tình
                                                    nhẹ
                                                    nhàng.
                                                    Hôn môi tình cảm, kèn sáo êm đềm. Cam kết: Tắm chung + Hôn môi + Hôn vú
                                                    -
                                                    Bóp vú
                                                    +
                                                    HJ - BJ + Vét máng . Hợp tác mọi tư thế có cả 69 - 96 Không Cam Kết:
                                                    CIA, Lỗ
                                                    Nhị,
                                                    Some,WC ===...</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-footer">
                                        <div class="block-footer-counter">
                                            <a href="/ewr-porta/categories/gai-goi-cao-cap-ha-noi.1/"
                                                class="button rippleButton"><span class="button-text">
                                                    Gái Gọi Cao Cấp Hà Nội
                                                </span></a>
                                        </div>
                                        <div class="block-footer-controls">
                                            <a href="/threads/hot-girl-diep-anh-_-dang-yeu-de-thuong-_-lam-tinh-max-phe-luon.126945/"
                                                class="button button--icon rippleButton"><i class="fa--xf far fa-sign-in"
                                                    aria-hidden="true"></i><span class="button-text">
                                                    Continue…
                                                </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if ($danh_muc_con->count() > 0 && count($stiky_post_danh_muc_con_ok[0]) != 0)
                            @foreach ($stiky_post_danh_muc_con_ok as $key => $stiky_post_item)
                                <div class="porta-article-item" style=" left: 0px; top: 0px;">
                                    <div class="block-container porta-article-container">
                                        <a class="porta-article-header" data-cache="false" data-xf-click=""
                                            href="/threads/{{ $stiky_post_item[0]->post_slug }}.{{ $stiky_post_item[0]->id }}">
                                            <div class="porta-header-image"
                                                style="background-image: url('/public/uploads/product/{{ $stiky_post_item[0]->anh_dai_dien }}');">
                                            </div>
                                            <div class="porta-header-text">
                                                <span>
                                                    @php
                                                        $nhan = $stiky_post_item[0]->nhan;
                                                        $listnhan = explode(',', $nhan);
                                                    @endphp
                                                    @foreach ($listnhan as $key => $listnhan_item)
                                                        @php
                                                            $nhan = DB::table('tbl_tag')
                                                                ->where('name', '=', $listnhan_item)
                                                                ->where('la_label', '=', '1')
                                                                ->get();
                                                        @endphp
                                                        <span
                                                            class="label label--@php if($nhan->count()>0){
                                                        echo $nhan[0]->color;
                                                    } else{
                                                        echo 'green';
                                                    } @endphp"
                                                            dir="auto">
                                                            {{ $listnhan_item }}</span><span
                                                            class="label-append">&nbsp;</span>
                                                    @endforeach
                                                    {{ $stiky_post_item[0]->ten_bai_viet }}
                                                </span>
                                                @php
                                                    $nhan = $stiky_post_item[0]->nhan;
                                                    $listnhan = explode(',', $nhan);
                                                @endphp

                                            </div>
                                        </a>


                                    </div>
                                </div>
                            @endforeach
                        @else
                        @endif
                    @endif
                </div>
            @endforeach

        </div>
        <div class="porta-articles-above-split porta-widgets-split">
        </div>
        <div class="block  porta-masonry" data-xf-init=" porta-masonry" data-masonry="1" data-click="1" data-after="0"
            data-history="0" style="position: relative; height: 0px;">
        </div>
        <div class="block porta-article-pager">
            <div class="block-outer block-outer--after">
            </div>
        </div>
        <div class="porta-articles-below-full">
            <div class="block">
                <div class="block-container" data-widget-id="48" data-widget-key="des" data-widget-definition="html">
                    <h3 class="block-minorHeader">Cộng đồng checker số 1 Việt Nam</h3>
                    <div class="block-body block-row">
                        Cộng đồng checker uy tín số 1 Việt Nam, chuyên trang cung cấp hàng đầu Việt Nam. Hồ sơ gái gọi Hà
                        Nội, gái gọi Sài Gòn, gái gọi Đà Nẵng - Nha Trang, gái gọi Hải Phòng, gái gọi khắp cả nước được cập
                        nhật liên tục mỗi ngày. Cộng đồng uy tín, chất lượng số 1 Việt Nam với gần chục năm hoạt động và
                        chia sẻ.
                    </div>
                </div>
            </div>
        </div>
        <div class="porta-articles-below-split porta-widgets-split">
        </div>
    </div>
@endsection
