@extends('layout_dang_tin')

@section('content')
    <div class="p-body-pageContent">
        <div class="block-outer">
            <div class="block-outer-opposite">
                <div class="buttonGroup">







                    <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/watch"
                        class="button--link button rippleButton" data-xf-click="switch-overlay" data-sk-watch="Theo dõi"
                        data-sk-unwatch="Bỏ theo dõi"><span class="button-text">

                            Theo dõi

                        </span></a>





                </div>
            </div>
        </div>
        <div class="block-outer js-threadStatusField">
            <div class="blockStatus blockStatus--info">




                <div class="blockStatus-message">








                    <dl class="pairs pairs--columns pairs--fixedSmall pairs--customField" data-field="dv">
                        <dt>Dịch Vụ Cam Kết</dt>
                        <dd>


                            @if ($post[0]->cam_ket != null)
                                @php
                                    $nhan = $post[0]->cam_ket;

                                    $cam_ket = explode(',', $nhan);
                                @endphp
                                @foreach ($cam_ket as $key => $cam_ket_item)
                                    <ol class="listInline listInline--customField" data-field="dv">

                                        <li>{{ $cam_ket_item }}</li>
                                @endforeach

                                </ol>
                            @endif


                        </dd>
                    </dl>





                </div>



            </div>
        </div>
        <div class="block-container lbContainer" data-xf-init="lightbox select-to-quote" data-message-selector=".js-post"
            data-lb-id="thread-125638" data-lb-universal="1">

            <div class="block-body js-replyNewMessageContainer">


















                <article class="message    message-threadStarterPost message--post  js-post js-inlineModContainer  "
                    data-author="{{ $user[0]->username }}" data-content="post-3657193" id="js-post-3657193">

                    <span class="u-anchorTarget" id="post-3657193"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="19" data-xf-init="member-tooltip"
                                            style="background-color: {{ $user[0]->background_color ?? 'red' }}; color: #a7ffeb"
                                            id="js-XFUniqueId8">
                                            <span class="avatar-u19-m" role="img"
                                                aria-label="{{ $user[0]->username }}">@php

                                                    $user_name = $user[0]->username;
                                                    echo strtoupper(substr($user_name, 0, -(strlen($user_name) - 1)));
                                                @endphp</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/iso-9002.19/" class="username "
                                                dir="auto" data-user-id="19" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId9"><span
                                                    class="username--style{{ $user_name = $user[0]->rank }}">{{ $user[0]->username }}</span></a>
                                        </h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">V.VIP
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId10">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>
                                                @php
                                                    $countbl = DB::table('tbl_binh_luan')
                                                        ->where('user_id', '=', $user[0]->id)
                                                        ->get();
                                                @endphp
                                                <dd>{{ $countbl->count() }}</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId11">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>{{ $user[0]->uy_tin }}</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}"
                                                rel="nofollow">
                                                <time class="u-dt"> @php
                                                    $date2 = new DateTime($post[0]->created_at);
                                                @endphp
                                                    @include('pages.partials.time')</time>
                                            </a>
                                        </li>


                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer " data-lb-id="post-3657193"
                                        data-lb-caption-desc="{{ $user[0]->username }} · 6/10/23 lúc 22:50">








                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">
                                                <div style="text-align: center">





                                                    <div class="bbImageWrapper  js-lbImage"
                                                       >
                                                        <img src="/public/uploads/product/{{ $post[0]->anh_dai_dien}}"
                                                            data-url="/public/uploads/product/{{ $post[0]->anh_dai_dien}}"
                                                            class="bbImage" data-zoom-target="1" style=""
                                                            alt="KX7A5715-copy-2575030029cac193e.jpg" title=""
                                                            width="" height="" loading="lazy">
                                                    </div>


                                                    <br>
                                                    <br>
                                                    <span style="color: rgb(26, 188, 156)"><b><span
                                                                style="font-size: 18px">=== THÔNG TIN VỀ HOT GIRL
                                                                ===</span></b></span><br>
                                                    <span style="font-size: 18px"><span
                                                            style="color: rgb(250, 197, 28)"><b>Nghệ danh: Trang Anh<br>
                                                                Số điện thoại: 0358605169<br>
                                                                Pass: Bạn anh xcheckerviet.biz<br>
                                                                Giá: 600K/shot/1 lần xuất tinh<br>
                                                                Loại gái gọi: Gái Gọi Hà Nội - Hàng Kiểm Định<br>
                                                                Khu vực hoạt động: Xã Đàn - Kim Liên<br>
                                                                Thời gian hoạt động: 9h00 sáng đến 01h sáng</b></span><br>
                                                        <br>
                                                        <span style="color: rgb(26, 188, 156)"><b>=== ĐÁNH GIÁ NGOẠI HÌNH
                                                                ===</b></span><br>
                                                        <span style="color: rgb(250, 197, 28)"><b>Tổng thể: vẻ mặt xinh xắn
                                                                nhưng vô cùng dâm đãng, body vô cùng gợi cảm, nói chuyện lả
                                                                lơi và có nét quyến rũ khó có thể chối từ<br>
                                                                Vòng 1: cặp vú xịn, to và đẹp, đầu ti hồng hào, bóp vô cùng
                                                                sướng tay bú mút thoải mái, không giữ hàng<br>
                                                                Vòng 2: dáng ổn với dáng, body vô cùng gợi cảm<br>
                                                                Vòng 3: căng, cong và mịn màng, da mát mịn màng<br>
                                                                Vòng 4: sạch sẽ, gọn gàng, luôn được chăm sóc cẩn thận, nước
                                                                nôi đầy đủ.</b></span><br>
                                                        <br>
                                                        <span style="color: rgb(26, 188, 156)"><b>=== DỊCH VỤ CAM KẾT
                                                                ===</b></span><br>
                                                        <span style="color: rgb(250, 197, 28)"><b>Service: tận tuỵ như
                                                                người yêu, kỹ năng rất tốt, hợp tác mọi tư thế với checker,
                                                                dịu dàng sâu lắng. Phong cách làm tình nhẹ nhàng. Hôn môi
                                                                tình cảm, kèn sáo êm đềm.<br>
                                                                Cam kết: Tắm chung + Hôn môi + Hôn vú - Bóp vú + HJ - BJ +
                                                                Vét máng . Hợp tác mọi tư thế có cả 69 - 96</b></span><br>
                                                        <span style="color: rgb(251, 160, 38)"><b><u>Không Cam Kết: CIA, Lỗ
                                                                    Nhị, Some,WC</u></b></span></span><br>
                                                    <br>
                                                    <span style="color: rgb(26, 188, 156)"><b>=== CAM KẾT
                                                            ===</b></span><br>
                                                    <span style="color: rgb(251, 160, 38)"><b>KHÔNG ẢNH ẢO - KHÔNG CÔNG
                                                            NGHIỆP - KHÔNG BOM KHÁCH - KHÔNG TRÁO HÀNG</b></span><br>
                                                    <br>
                                                    <span style="color: rgb(26, 188, 156)"><b>=== CHÚ Ý ===</b></span><br>
                                                    <span style="color: rgb(251, 160, 38)"><b>- Đọc kỹ thông tin trước khi
                                                            check.<br>
                                                            - Thể hiện văn hóa checker lịch sự khi check hàng.<br>
                                                            + Khi check hàng không: sử dụng ma túy, thuốc kích dục, quá say
                                                            xỉn, dọa nạt, bạo dâm hoặc có những đòi hỏi quá đáng đối với
                                                            em.<br>
                                                            + Em được phép từ chối phục vụ các bác quá già (trên 60 tuổi),
                                                            được phép từ chối các anh đã tân trang súng ống bằng cách lắp
                                                            thêm phụ kiện.<br>
                                                            - Các checker khi check về nhớ có report, phản ánh.<br>
                                                            - AE Checker lưu ý : Lịch sự, vệ sinh sạch sẽ để được phục vụ
                                                            như mong muốn.<br>
                                                            Chúc các checker có những phút giây thăng hoa bên cạnh người đẹp
                                                            !!!</b></span><br>
                                                    <br>
                                                    <span style="color: rgb(26, 188, 156)"><b>=== ẢNH NGƯỜI ĐẸP
                                                            ===</b></span><br>
                                                    <br>
                                                    <a href="https://upload69.cam/image/r9qlnw" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5550-copy-2cf64625d78a0317e.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5550-copy-2cf64625d78a0317e.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qK0T" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5570-copy-2e9797fb5820eddef.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5570-copy-2e9797fb5820eddef.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qOY9" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5591-copy-2d379e5abae1ae807.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5591-copy-2d379e5abae1ae807.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qRTL" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5619-copy-287149c8d2e4ff3c0.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5619-copy-287149c8d2e4ff3c0.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qaBO" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5637-copy-218e0529b4d0d79d6.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5637-copy-218e0529b4d0d79d6.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qwRx" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5694-copy-23cd0010d2bf00c73.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5694-copy-23cd0010d2bf00c73.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9q57s" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="/public/uploads/product/{{ $post[0]->anh_dai_dien}}"
                                                            data-url="/public/uploads/product/{{ $post[0]->anh_dai_dien}}"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qPN3" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5729-copy-232e7f9310bd434f3.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5729-copy-232e7f9310bd434f3.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qer6" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5736-copy-2da2a6042f42ff5af.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5736-copy-2da2a6042f42ff5af.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qAHH" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5747-copy-2cf447ab8ec7f9adf.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5747-copy-2cf447ab8ec7f9adf.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qQ0j" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5771-copy-29fd64cad3818e009.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5771-copy-29fd64cad3818e009.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qfn0" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5822-copy-200a8548e090a5226.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5822-copy-200a8548e090a5226.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qGeQ" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5831-copy-2b8fe403cef3e50e8.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5831-copy-2b8fe403cef3e50e8.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qHTc" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5844-copy-20da28140a3d79dfe.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5844-copy-20da28140a3d79dfe.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a><br>
                                                    <a href="https://upload69.cam/image/r9qZBD" target="_blank"
                                                        class="link link--external" rel="nofollow ugc noopener">
                                                        <img src="https://upload69.cam/images/2024/01/02/KX7A5858-copy-2a81b5b2d15ce9ead.jpg"
                                                            data-url="https://upload69.cam/images/2024/01/02/KX7A5858-copy-2a81b5b2d15ce9ead.jpg"
                                                            class="bbImage " loading="lazy" style=""
                                                            width="" height="">

                                                    </a>&ZeroWidthSpace;
                                                </div>
                                            </div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>





                                        <div class="message-fields message-fields--after">








                                            <dl class="pairs pairs--columns pairs--fixedSmall pairs--customField"
                                                data-field="sdt">
                                                <dt>Số điện thoại</dt>
                                                <dd>


                                                    0358605169
                                                    <style>
                                                        .fone {
                                                            font-size: 19px;
                                                            color: #f00;
                                                            line-height: 40px;
                                                            font-weight: bold;
                                                            padding-left: 48px;
                                                            margin: 0 0;
                                                        }

                                                        .fix_tel {
                                                            position: fixed;
                                                            bottom: 25px;
                                                            left: 18px;
                                                            z-index: 999;
                                                        }

                                                        .fix_tel a {
                                                            text-decoration: none;
                                                            display: block;
                                                        }

                                                        .tel {
                                                            background: #eee;
                                                            width: 180px;
                                                            height: 40px;
                                                            position: relative;
                                                            overflow: hidden;
                                                            background-size: 40px;
                                                            border-radius: 28px;
                                                            border: none
                                                        }

                                                        .ring-alo-phone {
                                                            background-color: transparent;
                                                            cursor: pointer;
                                                            height: 80px;
                                                            position: absolute;
                                                            transition: visibility 0.5s ease 0s;
                                                            visibility: hidden;
                                                            width: 80px;
                                                            z-index: 200000 !important;
                                                        }

                                                        .ring-alo-phone.ring-alo-show {
                                                            visibility: visible;
                                                        }

                                                        .ring-alo-phone.ring-alo-hover,
                                                        .ring-alo-phone:hover {
                                                            opacity: 1;
                                                        }

                                                        .ring-alo-ph-circle {
                                                            animation: 1.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim;
                                                            background-color: transparent;
                                                            border: 2px solid rgba(30, 30, 30, 0.4);
                                                            border-radius: 100%;
                                                            height: 70px;
                                                            left: 10px;
                                                            opacity: 0.1;
                                                            position: absolute;
                                                            top: 12px;
                                                            transform-origin: 50% 50% 0;
                                                            transition: all 0.5s ease 0s;
                                                            width: 70px;
                                                        }

                                                        .ring-alo-phone.ring-alo-active .ring-alo-ph-circle {
                                                            animation: 1.1s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
                                                        }

                                                        .ring-alo-phone.ring-alo-static .ring-alo-ph-circle {
                                                            animation: 2.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
                                                        }

                                                        .ring-alo-phone.ring-alo-hover .ring-alo-ph-circle,
                                                        .ring-alo-phone:hover .ring-alo-ph-circle {
                                                            border-color: #009900;
                                                            opacity: 0.5;
                                                        }

                                                        .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle,
                                                        .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle {
                                                            border-color: #baf5a7;
                                                            opacity: 0.5;
                                                        }

                                                        .ring-alo-phone.ring-alo-green .ring-alo-ph-circle {
                                                            border-color: #009900;
                                                            opacity: 0.5;
                                                        }

                                                        .ring-alo-ph-circle-fill {
                                                            animation: 2.3s ease-in-out 0s normal none infinite running ring-alo-circle-fill-anim;
                                                            background-color: #000;
                                                            border: 2px solid transparent;
                                                            border-radius: 100%;
                                                            height: 30px;
                                                            left: 30px;
                                                            opacity: 0.1;
                                                            position: absolute;
                                                            top: 33px;
                                                            transform-origin: 50% 50% 0;
                                                            transition: all 0.5s ease 0s;
                                                            width: 30px;
                                                        }

                                                        .ring-alo-phone.ring-alo-hover .ring-alo-ph-circle-fill,
                                                        .ring-alo-phone:hover .ring-alo-ph-circle-fill {
                                                            background-color: rgba(0, 175, 242, 0.5);
                                                            opacity: 0.75 !important;
                                                        }

                                                        .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle-fill,
                                                        .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle-fill {
                                                            background-color: rgba(117, 235, 80, 0.5);
                                                            opacity: 0.75 !important;
                                                        }

                                                        .ring-alo-phone.ring-alo-green .ring-alo-ph-circle-fill {
                                                            background-color: rgba(0, 175, 242, 0.5);
                                                            opacity: 0.75 !important;
                                                        }

                                                        .ring-alo-ph-img-circle {
                                                            animation: 1s ease-in-out 0s normal none infinite running ring-alo-circle-img-anim;
                                                            border: 2px solid transparent;
                                                            border-radius: 100%;
                                                            height: 30px;
                                                            left: 30px;
                                                            opacity: 1;
                                                            position: absolute;
                                                            top: 33px;
                                                            transform-origin: 50% 50% 0;
                                                            width: 30px;
                                                        }

                                                        .ring-alo-phone.ring-alo-hover .ring-alo-ph-img-circle,
                                                        .ring-alo-phone:hover .ring-alo-ph-img-circle {
                                                            background-color: #009900;
                                                        }

                                                        .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-img-circle,
                                                        .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-img-circle {
                                                            background-color: #75eb50;
                                                        }

                                                        .ring-alo-phone.ring-alo-green .ring-alo-ph-img-circle {
                                                            background-color: #009900;
                                                        }

                                                        @keyframes ring-alo-circle-anim {
                                                            0% {
                                                                opacity: 0.1;
                                                                transform: rotate(0deg) scale(0.5) skew(1deg);
                                                            }

                                                            30% {
                                                                opacity: 0.5;
                                                                transform: rotate(0deg) scale(0.7) skew(1deg);
                                                            }

                                                            100% {
                                                                opacity: 0.6;
                                                                transform: rotate(0deg) scale(1) skew(1deg);
                                                            }
                                                        }

                                                        @keyframes ring-alo-circle-img-anim {
                                                            0% {
                                                                transform: rotate(0deg) scale(1) skew(1deg);
                                                            }

                                                            10% {
                                                                transform: rotate(-25deg) scale(1) skew(1deg);
                                                            }

                                                            20% {
                                                                transform: rotate(25deg) scale(1) skew(1deg);
                                                            }

                                                            30% {
                                                                transform: rotate(-25deg) scale(1) skew(1deg);
                                                            }

                                                            40% {
                                                                transform: rotate(25deg) scale(1) skew(1deg);
                                                            }

                                                            50% {
                                                                transform: rotate(0deg) scale(1) skew(1deg);
                                                            }

                                                            100% {
                                                                transform: rotate(0deg) scale(1) skew(1deg);
                                                            }
                                                        }

                                                        @keyframes ring-alo-circle-fill-anim {
                                                            0% {
                                                                opacity: 0.2;
                                                                transform: rotate(0deg) scale(0.7) skew(1deg);
                                                            }

                                                            50% {
                                                                opacity: 0.2;
                                                                transform: rotate(0deg) scale(1) skew(1deg);
                                                            }

                                                            100% {
                                                                opacity: 0.2;
                                                                transform: rotate(0deg) scale(0.7) skew(1deg);
                                                            }
                                                        }

                                                        .ring-alo-ph-img-circle a img {
                                                            padding: 1px 0 12px 1px;
                                                            width: 30px;
                                                            position: relative;
                                                            top: -1px;
                                                        }
                                                        }
                                                    </style>
                                                    <!-- code nút gọi dán vào web. Thường là footer -->
                                                    <div class="fix_tel">
                                                        <div class="ring-alo-phone ring-alo-green ring-alo-show"
                                                            id="ring-alo-phoneIcon" style="right: 125px; bottom: -12px;">
                                                            <div class="ring-alo-ph-circle"></div>
                                                            <div class="ring-alo-ph-circle-fill"></div>
                                                            <div class="ring-alo-ph-img-circle">

                                                                <a href="tel:0358605169"><img src="/images/call.png"
                                                                        alt="G"></a>


                                                            </div>
                                                        </div>
                                                        <div class="tel">
                                                            <a href="tel:0358605169">
                                                                <p class="fone">0358605169</p>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- code nút gọi dán vào web. Thường là footer -->


                                                </dd>
                                            </dl>





                                        </div>





                                    </div>






                                    <div class="message-lastEdit">

                                        Sửa lần cuối bởi quản trị viên: <time class="u-dt" dir="auto"
                                            datetime="2024-05-10T21:25:31+0700" data-time="1715351131"
                                            data-date-string="10/5/24" data-time-string="21:25" title="10/5/24 lúc 21:25"
                                            itemprop="dateModified">10/5/24</time>

                                    </div>











                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3657193"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3657193/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Torrent"
                    data-content="post-3658369" id="js-post-3658369">

                    <span class="u-anchorTarget" id="post-3658369"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/torrent.306347/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="306347" data-xf-init="member-tooltip"
                                            style="background-color: #039be5; color: #80d8ff" id="js-XFUniqueId13">
                                            <span class="avatar-u306347-m" role="img" aria-label="Torrent">T</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/torrent.306347/" class="username "
                                                dir="auto" data-user-id="306347" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId14"><span
                                                    class="username--style39">Torrent</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle"><img
                                                src="/images/ranking/binhnhi.png" width="105px"></h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId15">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>10</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId16">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3658369"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto" datetime="2024-05-03T11:12:42+0700"
                                                    data-time="1714709562" data-date-string="3/5/24"
                                                    data-time-string="11:12" title="3/5/24 lúc 11:12"
                                                    itemprop="datePublished">3/5/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3658369"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3658369/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId17">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3658369/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3658369"
                                                rel="nofollow">
                                                #2
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer " data-lb-id="post-3658369"
                                        data-lb-caption-desc="Torrent · 3/5/24 lúc 11:12">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Ae vác cu qua check thoải con gà mái đi.</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3658369"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3658369/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Eshcar"
                    data-content="post-3674882" id="js-post-3674882">

                    <span class="u-anchorTarget" id="post-3674882"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/eshcar.316766/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="316766" data-xf-init="member-tooltip"
                                            style="background-color: #c0ca33; color: #f4ff81" id="js-XFUniqueId18">
                                            <span class="avatar-u316766-m" role="img" aria-label="Eshcar">E</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/eshcar.316766/" class="username "
                                                dir="auto" data-user-id="316766" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId19"><span
                                                    class="username--style39">Eshcar</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle"><img
                                                src="/images/ranking/binhnhat.png" width="105px"></h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId20">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>62</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId21">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>1</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3674882"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto" datetime="2024-05-13T14:11:45+0700"
                                                    data-time="1715584305" data-date-string="13/5/24"
                                                    data-time-string="14:11" title="13/5/24 lúc 14:11"
                                                    itemprop="datePublished">13/5/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3674882"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3674882/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId22">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3674882/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3674882"
                                                rel="nofollow">
                                                #3
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer " data-lb-id="post-3674882"
                                        data-lb-caption-desc="Eshcar · 13/5/24 lúc 14:11">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">xinh gái cong tớn đã quá</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3674882"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3674882/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Just Do It"
                    data-content="post-3677130" id="js-post-3677130">

                    <span class="u-anchorTarget" id="post-3677130"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/just-do-it.302980/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="302980" data-xf-init="member-tooltip"
                                            style="background-color: #f57f17; color: #ffff8d" id="js-XFUniqueId23">
                                            <span class="avatar-u302980-m" role="img"
                                                aria-label="Just Do It">J</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/just-do-it.302980/" class="username "
                                                dir="auto" data-user-id="302980" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId24"><span class="username--style39">Just
                                                    Do It</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle"><img
                                                src="/images/ranking/binhnhi.png" width="105px"></h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId25">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>27</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId26">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3677130"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto" datetime="2024-05-14T18:43:25+0700"
                                                    data-time="1715687005" data-date-string="14/5/24"
                                                    data-time-string="18:43" title="14/5/24 lúc 18:43"
                                                    itemprop="datePublished">14/5/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3677130"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3677130/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId27">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3677130/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3677130"
                                                rel="nofollow">
                                                #4
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer " data-lb-id="post-3677130"
                                        data-lb-caption-desc="Just Do It · 14/5/24 lúc 18:43">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">mong được sớm gặp em</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3677130"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3677130/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="CLINICAL"
                    data-content="post-3682701" id="js-post-3682701">

                    <span class="u-anchorTarget" id="post-3682701"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/clinical.482304/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="482304" data-xf-init="member-tooltip"
                                            style="background-color: #ef5350; color: #ff8a80" id="js-XFUniqueId28">
                                            <span class="avatar-u482304-m" role="img" aria-label="CLINICAL">C</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/clinical.482304/" class="username "
                                                dir="auto" data-user-id="482304" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId29"><span
                                                    class="username--style6">CLINICAL</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle"><img
                                                src="/images/ranking/binhnhi.png" width="105px"></h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId30">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>16</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId31">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3682701"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto" datetime="2024-05-17T22:11:12+0700"
                                                    data-time="1715958672" data-date-string="17/5/24"
                                                    data-time-string="22:11" title="17/5/24 lúc 22:11"
                                                    itemprop="datePublished">17/5/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3682701"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3682701/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId32">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3682701/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3682701"
                                                rel="nofollow">
                                                #5
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer " data-lb-id="post-3682701"
                                        data-lb-caption-desc="CLINICAL · 17/5/24 lúc 22:11">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Em này khỏi chê rồi</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3682701"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3682701/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="◥ Aquarius◤"
                    data-content="post-3695809" id="js-post-3695809">

                    <span class="u-anchorTarget" id="post-3695809"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/%E2%97%A5-aquarius%E2%97%A4.503220/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="503220" data-xf-init="member-tooltip"
                                            style="background-color: #c0ca33; color: #f4ff81" id="js-XFUniqueId33">
                                            <span class="avatar-u503220-m" role="img"
                                                aria-label="◥ Aquarius◤">◥</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/%E2%97%A5-aquarius%E2%97%A4.503220/"
                                                class="username " dir="auto" data-user-id="503220"
                                                data-xf-init="member-tooltip" itemprop="name" id="js-XFUniqueId34"><span
                                                    class="username--style6">◥ Aquarius◤</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle"><img
                                                src="https://s27.pixxxels.cc/ov44lhr6b/image.png" width="125px"></h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId35">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>9</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId36">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3695809"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto" datetime="2024-05-25T21:56:22+0700"
                                                    data-time="1716648982" data-date-string="25/5/24"
                                                    data-time-string="21:56" title="25/5/24 lúc 21:56"
                                                    itemprop="datePublished">25/5/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3695809"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3695809/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId37">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3695809/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3695809"
                                                rel="nofollow">
                                                #6
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer " data-lb-id="post-3695809"
                                        data-lb-caption-desc="◥ Aquarius◤ · 25/5/24 lúc 21:56">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Lâu không gặp, vẫn rất kết em</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3695809"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3695809/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Gioăng"
                    data-content="post-3703646" id="js-post-3703646">

                    <span class="u-anchorTarget" id="post-3703646"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/gioang.483312/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="483312" data-xf-init="member-tooltip"
                                            style="background-color: #512da8; color: #b388ff" id="js-XFUniqueId38">
                                            <span class="avatar-u483312-m" role="img" aria-label="Gioăng">G</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/gioang.483312/" class="username "
                                                dir="auto" data-user-id="483312" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId39"><span
                                                    class="username--style6">Gioăng</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle"><img
                                                src="/images/ranking/binhnhi.png" width="105px"></h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId40">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>14</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId41">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3703646"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto" datetime="2024-05-30T20:09:52+0700"
                                                    data-time="1717074592" data-date-string="30/5/24"
                                                    data-time-string="20:09" title="30/5/24 lúc 20:09"
                                                    itemprop="datePublished">30/5/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3703646"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3703646/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId42">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3703646/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3703646"
                                                rel="nofollow">
                                                #7
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3703646" data-lb-caption-desc="Gioăng · 30/5/24 lúc 20:09">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">khá khẩm</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3703646"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3703646/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="rongphunmua"
                    data-content="post-3707643" id="js-post-3707643">

                    <span class="u-anchorTarget" id="post-3707643"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/rongphunmua.99125/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="99125" data-xf-init="member-tooltip"
                                            style="background-color: #d84315; color: #ff9e80" id="js-XFUniqueId43">
                                            <span class="avatar-u99125-m" role="img"
                                                aria-label="rongphunmua">R</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/rongphunmua.99125/"
                                                class="username " dir="auto" data-user-id="99125"
                                                data-xf-init="member-tooltip" itemprop="name"
                                                id="js-XFUniqueId44"><span
                                                    class="username--style43">rongphunmua</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="https://s27.pixxxels.cc/ov44lhr6b/image.png" width="125px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId45">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>2</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId46">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3707643"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-06-02T04:15:32+0700" data-time="1717276532"
                                                    data-date-string="2/6/24" data-time-string="04:15"
                                                    title="2/6/24 lúc 04:15" itemprop="datePublished">2/6/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3707643"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3707643/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId47">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3707643/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3707643"
                                                rel="nofollow">
                                                #8
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3707643" data-lb-caption-desc="rongphunmua · 2/6/24 lúc 04:15">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Đã gặp em ở THT. Nói chuyện vui vẻ, chủ động bú mút
                                                ngon lành, hàng họ đẹp âm thanh sống động nhé ae</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3707643"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3707643/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Sơn_Ca"
                    data-content="post-3711728" id="js-post-3711728">

                    <span class="u-anchorTarget" id="post-3711728"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/son_ca.484385/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="484385" data-xf-init="member-tooltip"
                                            style="background-color: #283593; color: #8c9eff" id="js-XFUniqueId48">
                                            <span class="avatar-u484385-m" role="img" aria-label="Sơn_Ca">S</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/son_ca.484385/" class="username "
                                                dir="auto" data-user-id="484385" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId49"><span
                                                    class="username--style2">Sơn_Ca</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            LÍNH DỰ BỊ</h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId50">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>8</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId51">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3711728"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-06-04T14:09:24+0700" data-time="1717484964"
                                                    data-date-string="4/6/24" data-time-string="14:09"
                                                    title="4/6/24 lúc 14:09" itemprop="datePublished">4/6/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3711728"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3711728/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId52">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3711728/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3711728"
                                                rel="nofollow">
                                                #9
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3711728" data-lb-caption-desc="Sơn_Ca · 4/6/24 lúc 14:09">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">muốn đi mà đo 3p đã ra rồi sợ e ấy cười chưa dám book
                                            </div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3711728"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3711728/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Clenziderm"
                    data-content="post-3718987" id="js-post-3718987">

                    <span class="u-anchorTarget" id="post-3718987"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/clenziderm.482302/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="482302" data-xf-init="member-tooltip"
                                            style="background-color: #8e24aa; color: #ea80fc" id="js-XFUniqueId53">
                                            <span class="avatar-u482302-m" role="img"
                                                aria-label="Clenziderm">C</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/clenziderm.482302/"
                                                class="username " dir="auto" data-user-id="482302"
                                                data-xf-init="member-tooltip" itemprop="name"
                                                id="js-XFUniqueId54"><span
                                                    class="username--style6">Clenziderm</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="/images/ranking/binhnhi.png" width="105px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId55">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>13</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId56">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3718987"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-06-09T10:25:57+0700" data-time="1717903557"
                                                    data-date-string="9/6/24" data-time-string="10:25"
                                                    title="9/6/24 lúc 10:25" itemprop="datePublished">9/6/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3718987"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3718987/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId57">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3718987/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3718987"
                                                rel="nofollow">
                                                #10
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3718987" data-lb-caption-desc="Clenziderm · 9/6/24 lúc 10:25">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Em này cũng ổn áp nhỉ</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3718987"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3718987/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Viennese waltz"
                    data-content="post-3719730" id="js-post-3719730">

                    <span class="u-anchorTarget" id="post-3719730"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/viennese-waltz.473309/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="473309" data-xf-init="member-tooltip"
                                            style="background-color: #f44336; color: #ff8a80" id="js-XFUniqueId58">
                                            <span class="avatar-u473309-m" role="img"
                                                aria-label="Viennese waltz">V</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/viennese-waltz.473309/"
                                                class="username " dir="auto" data-user-id="473309"
                                                data-xf-init="member-tooltip" itemprop="name"
                                                id="js-XFUniqueId59"><span class="username--style6">Viennese
                                                    waltz</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="/images/ranking/binhnhi.png" width="105px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId60">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>18</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId61">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3719730"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-06-09T17:15:29+0700" data-time="1717928129"
                                                    data-date-string="9/6/24" data-time-string="17:15"
                                                    title="9/6/24 lúc 17:15" itemprop="datePublished">9/6/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3719730"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3719730/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId62">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3719730/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3719730"
                                                rel="nofollow">
                                                #11
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3719730"
                                        data-lb-caption-desc="Viennese waltz · 9/6/24 lúc 17:15">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">hàng họ chất lù</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3719730"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3719730/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Eshcar"
                    data-content="post-3745393" id="js-post-3745393">

                    <span class="u-anchorTarget" id="post-3745393"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/eshcar.316766/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="316766" data-xf-init="member-tooltip"
                                            style="background-color: #c0ca33; color: #f4ff81" id="js-XFUniqueId63">
                                            <span class="avatar-u316766-m" role="img" aria-label="Eshcar">E</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/eshcar.316766/" class="username "
                                                dir="auto" data-user-id="316766" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId64"><span
                                                    class="username--style39">Eshcar</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="/images/ranking/binhnhat.png" width="105px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId65">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>62</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId66">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>1</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3745393"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-06-26T13:54:30+0700" data-time="1719384870"
                                                    data-date-string="26/6/24" data-time-string="13:54"
                                                    title="26/6/24 lúc 13:54" itemprop="datePublished">26/6/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3745393"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3745393/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId67">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3745393/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3745393"
                                                rel="nofollow">
                                                #12
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3745393" data-lb-caption-desc="Eshcar · 26/6/24 lúc 13:54">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">hàng họ múp sò</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3745393"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3745393/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Just Do It"
                    data-content="post-3752258" id="js-post-3752258">

                    <span class="u-anchorTarget" id="post-3752258"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/just-do-it.302980/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="302980" data-xf-init="member-tooltip"
                                            style="background-color: #f57f17; color: #ffff8d" id="js-XFUniqueId68">
                                            <span class="avatar-u302980-m" role="img"
                                                aria-label="Just Do It">J</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/just-do-it.302980/"
                                                class="username " dir="auto" data-user-id="302980"
                                                data-xf-init="member-tooltip" itemprop="name"
                                                id="js-XFUniqueId69"><span class="username--style39">Just Do
                                                    It</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="/images/ranking/binhnhi.png" width="105px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId70">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>27</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId71">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3752258"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-06-30T17:11:33+0700" data-time="1719742293"
                                                    data-date-string="30/6/24" data-time-string="17:11"
                                                    title="30/6/24 lúc 17:11" itemprop="datePublished">30/6/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3752258"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3752258/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId72">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3752258/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3752258"
                                                rel="nofollow">
                                                #13
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3752258" data-lb-caption-desc="Just Do It · 30/6/24 lúc 17:11">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Nay mới gặp e xong . Ok</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3752258"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3752258/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Gioăng"
                    data-content="post-3759460" id="js-post-3759460">

                    <span class="u-anchorTarget" id="post-3759460"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/gioang.483312/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="483312" data-xf-init="member-tooltip"
                                            style="background-color: #512da8; color: #b388ff" id="js-XFUniqueId73">
                                            <span class="avatar-u483312-m" role="img" aria-label="Gioăng">G</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/gioang.483312/" class="username "
                                                dir="auto" data-user-id="483312" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId74"><span
                                                    class="username--style6">Gioăng</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="/images/ranking/binhnhi.png" width="105px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId75">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>14</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId76">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3759460"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-07-04T21:50:09+0700" data-time="1720104609"
                                                    data-date-string="4/7/24" data-time-string="21:50"
                                                    title="4/7/24 lúc 21:50" itemprop="datePublished">4/7/24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3759460"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3759460/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId77">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3759460/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3759460"
                                                rel="nofollow">
                                                #14
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3759460" data-lb-caption-desc="Gioăng · 4/7/24 lúc 21:50">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Nói chung em này ngon</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3759460"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3759460/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Alphas"
                    data-content="post-3777987" id="js-post-3777987">

                    <span class="u-anchorTarget" id="post-3777987"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/alphas.476785/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="476785" data-xf-init="member-tooltip"
                                            style="background-color: #388e3c; color: #b9f6ca" id="js-XFUniqueId78">
                                            <span class="avatar-u476785-m" role="img" aria-label="Alphas">A</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/alphas.476785/" class="username "
                                                dir="auto" data-user-id="476785" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId79"><span
                                                    class="username--style6">Alphas</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="/images/ranking/binhnhi.png" width="105px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId80">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>22</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId81">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3777987"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-07-16T11:24:23+0700" data-time="1721103863"
                                                    data-date-string="16/7/24" data-time-string="11:24"
                                                    title="16/7/24 lúc 11:24" itemprop="datePublished">Thứ ba lúc
                                                    11:24</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3777987"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3777987/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId82">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3777987/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3777987"
                                                rel="nofollow">
                                                #15
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3777987" data-lb-caption-desc="Alphas · 16/7/24 lúc 11:24">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">ngon tình cảm uy tín nha ae,</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3777987"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3777987/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Kirkland"
                    data-content="post-3782852" id="js-post-3782852">

                    <span class="u-anchorTarget" id="post-3782852"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/kirkland.476963/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="476963" data-xf-init="member-tooltip"
                                            style="background-color: #303f9f; color: #8c9eff" id="js-XFUniqueId83">
                                            <span class="avatar-u476963-m" role="img"
                                                aria-label="Kirkland">K</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/kirkland.476963/" class="username "
                                                dir="auto" data-user-id="476963" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId84"><span
                                                    class="username--style6">Kirkland</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            <img src="/images/ranking/binhnhi.png" width="105px">
                                        </h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId85">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>13</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId86">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3782852"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-07-18T21:19:19+0700" data-time="1721312359"
                                                    data-date-string="18/7/24" data-time-string="21:19"
                                                    title="18/7/24 lúc 21:19" itemprop="datePublished">Thứ năm lúc
                                                    21:19</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3782852"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3782852/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId87">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3782852/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3782852"
                                                rel="nofollow">
                                                #16
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3782852" data-lb-caption-desc="Kirkland · 18/7/24 lúc 21:19">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">tình cảm</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3782852"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3782852/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>























                <article class="message   message--post  js-post js-inlineModContainer  " data-author="Crutches"
                    data-content="post-3790132" id="js-post-3790132">

                    <span class="u-anchorTarget" id="post-3790132"></span>


                    <div class="message-inner">

                        <div class="message-cell message-cell--user">


                            <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                <div class="message-avatar ">
                                    <div class="message-avatar-wrapper">

                                        <a href="/members/crutches.485692/"
                                            class="avatar avatar--m avatar--default avatar--default--dynamic"
                                            data-user-id="485692" data-xf-init="member-tooltip"
                                            style="background-color: #ec407a; color: #ff80ab" id="js-XFUniqueId88">
                                            <span class="avatar-u485692-m" role="img"
                                                aria-label="Crutches">C</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="uix_messagePostBitWrapper">
                                    <div class="message-userDetails">
                                        <h4 class="message-name"><a href="/members/crutches.485692/" class="username "
                                                dir="auto" data-user-id="485692" data-xf-init="member-tooltip"
                                                itemprop="name" id="js-XFUniqueId89"><span
                                                    class="username--style2">Crutches</span></a></h4>
                                        <h5 class="userTitle message-userTitle" dir="auto" itemprop="jobTitle">
                                            LÍNH DỰ BỊ</h5>
                                        <div class="star-ranks">


                                        </div>





                                    </div>





                                    <div class="thThreads__message-userExtras">

                                        <div class="message-userExtras">



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Bài viết"
                                                        aria-label="Bài viết" id="js-XFUniqueId90">
                                                        <i class="fa--xf far fa-comments uix_icon uix_icon--messages"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>8</dd>
                                            </dl>



                                            <dl class="pairs pairs--justified">

                                                <dt>
                                                    <span data-xf-init="tooltip" data-original-title="Thích"
                                                        aria-label="Thích" id="js-XFUniqueId91">
                                                        <i class="fa--xf far fa-thumbs-up uix_icon uix_icon--like"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </dt>

                                                <dd>0</dd>
                                            </dl>









                                        </div>

                                    </div>
                                    <div class="thThreads__userExtra--toggle">
                                        <span class="thThreads__userExtra--trigger"
                                            data-xf-click="ththreads-userextra-trigger"></span>
                                    </div>



                                </div>
                                <span class="message-userArrow"></span>
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3790132"
                                                rel="nofollow">
                                                <time class="u-dt" dir="auto"
                                                    datetime="2024-07-22T21:46:23+0700" data-time="1721659583"
                                                    data-date-string="22/7/24" data-time-string="21:46"
                                                    title="22/7/24 lúc 21:46" itemprop="datePublished">Hôm nay lúc
                                                    21:46</time>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="message-attribution-opposite message-attribution-opposite--list ">

                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3790132"
                                                class="message-attribution-gadget" data-xf-init="share-tooltip"
                                                data-href="/posts/3790132/share" aria-label="Share" rel="nofollow"
                                                id="js-XFUniqueId92">
                                                <i class="fa--xf far fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>




                                            <a href="/posts/3790132/bookmark"
                                                class="bookmarkLink message-attribution-gadget bookmarkLink--highlightable "
                                                title="Lưu bài viết" data-xf-click="bookmark-click"
                                                data-label=".js-bookmarkText"
                                                data-sk-bookmarked="addClass:is-bookmarked, Edit bookmark"
                                                data-sk-bookmarkremoved="removeClass:is-bookmarked, Add bookmark"><span
                                                    class="js-bookmarkText u-srOnly">Add bookmark</span></a>



                                        </li>


                                        <li>
                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/post-3790132"
                                                rel="nofollow">
                                                #17
                                            </a>
                                        </li>

                                    </ul>
                                </header>



                                <div class="message-content js-messageContent">













                                    <div class="message-userContent lbContainer js-lbContainer "
                                        data-lb-id="post-3790132" data-lb-caption-desc="Crutches · 22/7/24 lúc 21:46">



                                        <article class="message-body js-selectToQuote">




                                            <div class="bbWrapper">Chân dài dáng đẹp</div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>




                                    </div>
















                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>



                                <footer class="message-footer">

                                    <div class="message-actionBar actionBar">



                                        <div class="actionBar-set actionBar-set--external">











                                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply?quote=3790132"
                                                class="actionBar-action actionBar-action--reply"
                                                title="Trả lời, trích dẫn nội dung bài viết này" rel="nofollow"
                                                data-xf-click="quote" data-quote-href="/posts/3790132/quote">Trả lời</a>


                                        </div>





                                    </div>




                                    <div class="js-historyTarget message-historyTarget toggleTarget"
                                        data-href="trigger-href"></div>
                                </footer>


                            </div>


                        </div>

                    </div>

                </article>










            </div>
            <div class="block-outer block-outer--after"></div>
        </div>
        <div class="blockMessage blockMessage--none">





            <div class="shareButtons shareButtons--iconic" data-xf-init="share-buttons" data-page-url=""
                data-page-title="" data-page-desc="" data-page-image="">

                <span class="shareButtons-label">Share:</span>


                <div class="shareButtons-buttons">


                    <a class="shareButtons-button shareButtons-button--brand shareButtons-button--facebook"
                        data-href="https://www.facebook.com/sharer.php?u={url}" id="js-XFUniqueId95"
                        href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fxcheckerviet.biz%2Fthreads%2Ftrang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638%2F">
                        <i aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a>



                    <a class="shareButtons-button shareButtons-button--brand shareButtons-button--twitter"
                        data-href="https://twitter.com/intent/tweet?url={url}&amp;text={title}&amp;via=checkerviet&amp;related=checkerviet"
                        id="js-XFUniqueId96"
                        href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fxcheckerviet.biz%2Fthreads%2Ftrang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638%2F&amp;text=%E2%9C%AA%20%C4%90%E1%BB%98C%20QUY%E1%BB%80N%20%E2%9C%AA%20-%20600K%20TRANG%20ANH-%20N%C3%89T%20D%C3%82M%20HI%E1%BB%86N%20TR%C3%8AN%20G%C6%AF%C6%A0NG%20M%E1%BA%B6T%20-%20V%C3%9A%20TO%20-%20M%C3%94NG%20M%E1%BA%A8Y%20-%20S%E1%BB%B0%20G%E1%BB%A4C%20NG%C3%83%20C%E1%BB%A6A%20C%C3%81C%20CHECKER&amp;via=checkerviet&amp;related=checkerviet">
                        <i aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a>













                    <a class="shareButtons-button shareButtons-button--share is-hidden" data-xf-init="web-share"
                        data-title="" data-text="" data-url=""
                        data-hide=".shareButtons-button:not(.shareButtons-button--share)" id="js-XFUniqueId97">

                        <i aria-hidden="true"></i>
                        <span>Share</span>
                    </a>



                    <a class="shareButtons-button shareButtons-button--link" data-clipboard="{url}"
                        id="js-XFUniqueId98">
                        <i aria-hidden="true"></i>
                        <span>Link</span>
                    </a>


                </div>
            </div>


        </div>
    </div>
@endsection
