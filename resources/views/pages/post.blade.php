@extends('layout_dang_tin')

@section('content')
    <div class="p-body-pageContent block block--messages">
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
        <div class="block-outer js-threadStatusField ">
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
        <div class="block-container block block--messages" data-xf-init="lightbox select-to-quote"
            data-message-selector=".js-post" data-lb-id="thread-125638" data-lb-universal="1">

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
                            </section>

                        </div>



                        <div class="message-cell message-cell--main">

                            <div class="message-main uix_messageContent js-quickEditTarget">




                                <header class="message-attribution message-attribution--split">
                                    <ul class="message-attribution-main listInline ">

                                        <li class="u-concealed">
                                            <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}" rel="nofollow">
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





                                                    <div class="bbImageWrapper  js-lbImage">
                                                        <img src="/public/uploads/product/{{ $post[0]->anh_dai_dien }}"
                                                            data-url="/public/uploads/product/{{ $post[0]->anh_dai_dien }}"
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
                                                            style="color: rgb(250, 197, 28)"><b>Nghệ danh:
                                                                @if (!empty($post[0]->nghe_danh))
                                                                    {{ $post[0]->nghe_danh }}
                                                                @endif
                                                                <br>
                                                                Số điện thoại: @if (!empty($post[0]->so_dien_thoai))
                                                                    {{ $post[0]->so_dien_thoai }}
                                                                @endif
                                                                <br>
                                                                Pass: @if (!empty($post[0]->pass))
                                                                    {{ $post[0]->pass }}
                                                                @endif
                                                                <br>
                                                                Giá: @if (!empty($post[0]->gia))
                                                                    {{ $post[0]->gia }}
                                                                @endif/shot/1 lần xuất tinh<br>
                                                                Loại gái gọi: Gái Gọi Hà Nội - Hàng Kiểm Định<br>
                                                                Khu vực hoạt động: @if (!empty($post[0]->khu_vuc_di_lam))
                                                                    {{ $post[0]->khu_vuc_di_lam }}
                                                                @endif
                                                                <br>
                                                                Thời gian hoạt động: @if (!empty($post[0]->thoi_gian_di_lam))
                                                                    {{ $post[0]->thoi_gian_di_lam }}
                                                                @endif
                                                            </b></span><br>
                                                        <br>
                                                        <span style="color: rgb(26, 188, 156)"><b>=== ĐÁNH GIÁ NGOẠI HÌNH
                                                                ===</b></span><br>
                                                        <span style="color: rgb(250, 197, 28)"><b>Tổng thể:
                                                                @php
                                                                    $nhan = $post[0]->tong_quat;

                                                                    $tong_quat = explode(',', $nhan);
                                                                @endphp
                                                                @foreach ($tong_quat as $key => $tong_quat_item)
                                                                    @if ($key === array_key_last($tong_quat))
                                                                        {{ $tong_quat_item }}
                                                                    @else
                                                                        {{ $tong_quat_item }},
                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                Vòng 1: @php
                                                                    $nhan = $post[0]->vong_1;

                                                                    $vong_1 = explode(',', $nhan);
                                                                @endphp
                                                                @foreach ($vong_1 as $key => $vong_1_item)
                                                                    @if ($key === array_key_last($vong_1))
                                                                        {{ $vong_1_item }}
                                                                    @else
                                                                        {{ $vong_1_item }},
                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                Vòng 2: @php
                                                                    $nhan = $post[0]->vong_2;

                                                                    $vong_2 = explode(',', $nhan);
                                                                @endphp
                                                                @foreach ($vong_2 as $key => $vong_2_item)
                                                                    @if ($key === array_key_last($vong_2))
                                                                        {{ $vong_2_item }}
                                                                    @else
                                                                        {{ $vong_2_item }},
                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                Vòng 3: @php
                                                                    $nhan = $post[0]->vong_3;

                                                                    $vong_3 = explode(',', $nhan);
                                                                @endphp
                                                                @foreach ($vong_3 as $key => $vong_3_item)
                                                                    @if ($key === array_key_last($vong_3))
                                                                        {{ $vong_3_item }}
                                                                    @else
                                                                        {{ $vong_3_item }},
                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                Vòng 4: @php
                                                                    $nhan = $post[0]->vong_4;

                                                                    $vong_4 = explode(',', $nhan);
                                                                @endphp
                                                                @foreach ($vong_4 as $key => $vong_4_item)
                                                                    @if ($key === array_key_last($vong_4))
                                                                        {{ $vong_4_item }}.
                                                                    @else
                                                                        {{ $vong_4_item }},
                                                                    @endif
                                                                @endforeach
                                                            </b></span><br>
                                                        <br>
                                                        <span style="color: rgb(26, 188, 156)"><b>=== DỊCH VỤ CAM KẾT
                                                                ===</b></span><br>
                                                        <span style="color: rgb(250, 197, 28)"><b>Service:
                                                                @php
                                                                    $nhan = $post[0]->service;

                                                                    $service = explode(',', $nhan);
                                                                @endphp
                                                                @foreach ($service as $key => $service_item)
                                                                    @if ($key === array_key_last($service))
                                                                        {{ $service_item }}.
                                                                    @else
                                                                        {{ $service_item }},
                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                Cam kết: @php
                                                                    $nhan = $post[0]->cam_ket;

                                                                    $cam_ket = explode(',', $nhan);
                                                                @endphp
                                                                @foreach ($cam_ket as $key => $cam_ket_item)
                                                                    @if ($key === array_key_last($cam_ket))
                                                                        {{ $cam_ket_item }}.
                                                                    @else
                                                                        {{ $cam_ket_item }},
                                                                    @endif
                                                                @endforeach
                                                            </b></span><br>
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
                                                    @php
                                                        $nhan = $post[0]->list_anh;

                                                        $list_anh = explode(',', $nhan);
                                                    @endphp
                                                    @foreach ($list_anh as $key => $list_anh_item)
                                                        <a href="/public/uploads/product/{{ $list_anh_item }}"
                                                            target="_blank" class="link link--external"
                                                            rel="nofollow ugc noopener">
                                                            <img src="/public/uploads/product/{{ $list_anh_item }}"
                                                                data-url="/public/uploads/product/{{ $list_anh_item }}"
                                                                class="bbImage " loading="lazy" style=""
                                                                width="80%" height="">
                                                    @endforeach

                                                    </a><br>

                                                </div>
                                            </div>

                                            <div class="js-selectToQuoteEnd">&nbsp;</div>



                                        </article>










                                    </div>



                                </div>

                                <div class="reactionsBar js-reactionsList ">

                                </div>


                            </div>


                        </div>

                    </div>

                </article>
                @if ($tbl_binh_luan->count() > 0)
                    @foreach ($tbl_binh_luan as $item)
                        <article class="message   message--post  js-post js-inlineModContainer  "
                            data-author="anhnamdinh123" data-content="post-3741003" id="js-post-3741003">

                            <span class="u-anchorTarget" id="post-3741003"></span>


                            <div class="message-inner">

                                <div class="message-cell message-cell--user">
                                    @php
                                        $user_item = DB::table('users')
                                            ->where('id', '=', $item->user_id)
                                            ->get();
                                    @endphp

                                    <section itemscope="" itemtype="https://schema.org/Person" class="message-user ">
                                        <div class="message-avatar ">
                                            <div class="message-avatar-wrapper">

                                                <a class="avatar avatar--m avatar--default avatar--default--dynamic"
                                                    data-user-id="19" data-xf-init="member-tooltip"
                                                    style="background-color: {{ $user_item[0]->background_color ?? 'red' }}; color: #a7ffeb"
                                                    id="js-XFUniqueId8">
                                                    <span class="avatar-u19-m" role="img"
                                                        aria-label="{{ $user_item[0]->username }}">@php

                                                            $user_name = $user_item[0]->username;
                                                            echo strtoupper(
                                                                substr($user_name, 0, -(strlen($user_name) - 1)),
                                                            );
                                                        @endphp</span>
                                                </a>


                                            </div>
                                        </div>
                                        <div class="uix_messagePostBitWrapper">
                                            <div class="message-userDetails">
                                                <h4 class="message-name"><a href="/members/iso-9002.19/"
                                                        class="username " dir="auto" data-user-id="19"
                                                        data-xf-init="member-tooltip" itemprop="name"><span
                                                            class="username--style{{ $user_name = $user_item[0]->rank }}">{{ $user_item[0]->username }}</span></a>
                                                </h4>
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
                                                                ->where('user_id', '=', $user_item[0]->id)
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

                                                        <dd>{{ $user_item[0]->uy_tin }}</dd>
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
                                                        {{ $item->created_at }}
                                                        <time class="u-dt"> @php
                                                            $date2 = new DateTime($item->created_at);
                                                        @endphp
                                                            {{-- @include('pages.partials.time') --}}
                                                        </time>
                                                    </a>
                                                </li>


                                            </ul>

                                        </header>



                                        <div class="message-content js-messageContent">













                                            <div class="message-userContent lbContainer js-lbContainer "
                                                data-lb-id="post-3741003"
                                                data-lb-caption-desc="anhnamdinh123 · 23/6/24 lúc 17:49">



                                                <article class="message-body js-selectToQuote">




                                                    <div class="bbWrapper">
                                                        @php
                                                            echo htmlspecialchars_decode($item->noi_dung_danh_gia);
                                                        @endphp
                                                    </div>
                                                    <script>
                                                        editor.getData()
                                                    </script>

                                                    <div class="js-selectToQuoteEnd">&nbsp;</div>



                                                </article>




                                            </div>
















                                        </div>





                                    </div>


                                </div>

                            </div>

                        </article>
                    @endforeach
                @endif












            </div>

        </div>
        <div class="block-outer block-outer--after">



            @if (Session::get('user_id'))
            @else
                <div class="block-outer-opposite">

                    <a href="/login/" class="p-navgroup-link--logIn button--link button--wrap button rippleButton"
                        data-xf-click="overlay"><span class="button-text">
                            Bạn phải đăng nhập hoặc đăng ký để bình luận.
                        </span></a>
            @endif


        </div>
        @if (Session::get('user_id'))
            <form action="/comment" method="post" class="block-outer block-outer--after block js-quickReply" ">
                                                                                        @csrf

                                                                                        <div class="block-container">
                                                                                            <div class="block-body">





                                                                                                <div class="message message--quickReply block-topRadiusContent block-bottomRadiusContent">
                                                                                                    <div class="message-inner">
                                                                                                        <div class="message-cell message-cell--user">
                                                                                                            <div class="message-user ">
                                                                                                                <div class="message-avatar">
                                                                                                                    <div class="message-avatar-wrapper">


                                                                                                            <a class="avatar avatar--m avatar--default avatar--default--dynamic"
                                                                                                                data-user-id="19" data-xf-init="member-tooltip"
                                                                                                                style="background-color: {{ $user[0]->background_color ?? 'red' }}; color: #a7ffeb"
                                                                                                                id="js-XFUniqueId8">
                                                                                                                <span class="avatar-u19-m" role="img"
                                                                                                                    aria-label="{{ $user[0]->username }}">@php

                                                                                                                        $user_name =
                                                                                                                            $user[0]
                                                                                                                                ->username;
                                                                                                                        echo strtoupper(
                                                                                                                            substr(
                                                                                                                                $user_name,
                                                                                                                                0,
                                                                                                                                -(
                                                                                                                                    strlen(
                                                                                                                                        $user_name,
                                                                                                                                    ) -
                                                                                                                                    1
                                                                                                                                ),
                                                                                                                            ),
                                                                                                                        );
                                                                                                                    @endphp</span>
                                                                                                            </a>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <span class="message-userArrow"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="message-cell message-cell--main">
                                                                                                            <div class="formButtonGroup ">
                                                                                                                <div class="formButtonGroup-primary">
                                                                                                                    <button type="submit"
                                                                                                                        class="button--primary button button--icon button--icon--reply rippleButton"><span
                                                                                                                            class="button-text">
                                                                                                                            Gửi trả lời
                                                                                                                        </span></button>
                                                                                                                </div>

                                                                                                                <div class="formButtonGroup-extra">



                                                                                                                    <textarea name="editor" id="editor" rows="10" cols="80">
        
</textarea>
                                                                                                                 




                                                                                                                    <span class="js-attachButton"><a
                                                                                                                            href="/attachments/upload?type=post&amp;context[thread_id]=127237&amp;hash=894e95fc5969b8acf9926bcb587b7463"
                                                                                                                            class="button--link js-attachmentUpload button button--icon button--icon--attach rippleButton"
                                                                                                                            target="_blank" data-accept="." data-chevereto-pup="sibling"><span
                                                                                                                                class="button-text">Attach files</span></a><input type="file"
                                                                                                                            multiple="multiple" accept="" title="Attach files"
                                                                                                                            style="visibility: hidden; position: absolute; width: 1px; height: 1px; overflow: hidden; left: -1000px;"></span>
                                                                                                                    <input type="hidden" name="attachment_hash"
                                                                                                                        value="894e95fc5969b8acf9926bcb587b7463">
                                                                                                                    <input type="hidden" name="attachment_hash_combined"
                                                                                                                        value="{&quot;type&quot;:&quot;post&quot;,&quot;context&quot;:{&quot;thread_id&quot;:127237},&quot;hash&quot;:&quot;894e95fc5969b8acf9926bcb587b7463&quot;}">





                                                                                                                </div>

                                                                                                               
                                                                                                                <input type="hidden" name="post_id" value="{{ $post[0]->id }}">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>


                                                                                    </form>
     @endif



    </div>

    <div class="blockMessage blockMessage--none">





        <div class="shareButtons shareButtons--iconic" data-xf-init="share-buttons" data-page-url="" data-page-title=""
            data-page-desc="" data-page-image="">

            <span class="shareButtons-label">Share:</span>


            <div class="shareButtons-buttons">


                <a class="shareButtons-button shareButtons-button--brand shareButtons-button--facebook"
                    data-href="https://www.facebook.com/sharer.php?u={url}"
                    href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fxcheckerviet.biz%2Fthreads%2Ftrang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638%2F">
                    <i aria-hidden="true"></i>
                    <span>Facebook</span>
                </a>



                <a class="shareButtons-button shareButtons-button--brand shareButtons-button--twitter"
                    data-href="https://twitter.com/intent/tweet?url={url}&amp;text={title}&amp;via=checkerviet&amp;related=checkerviet"
                    href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fxcheckerviet.biz%2Fthreads%2Ftrang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638%2F&amp;text=%E2%9C%AA%20%C4%90%E1%BB%98C%20QUY%E1%BB%80N%20%E2%9C%AA%20-%20600K%20TRANG%20ANH-%20N%C3%89T%20D%C3%82M%20HI%E1%BB%86N%20TR%C3%8AN%20G%C6%AF%C6%A0NG%20M%E1%BA%B6T%20-%20V%C3%9A%20TO%20-%20M%C3%94NG%20M%E1%BA%A8Y%20-%20S%E1%BB%B0%20G%E1%BB%A4C%20NG%C3%83%20C%E1%BB%A6A%20C%C3%81C%20CHECKER&amp;via=checkerviet&amp;related=checkerviet">
                    <i aria-hidden="true"></i>
                    <span>Twitter</span>
                </a>













                <a class="shareButtons-button shareButtons-button--share is-hidden" data-xf-init="web-share"
                    data-title="" data-text="" data-url=""
                    data-hide=".shareButtons-button:not(.shareButtons-button--share)">

                    <i aria-hidden="true"></i>
                    <span>Share</span>
                </a>



                <a class="shareButtons-button shareButtons-button--link" data-clipboard="{url}">
                    <i aria-hidden="true"></i>
                    <span>Link</span>
                </a>


            </div>
        </div>


    </div>
    </div>
@endsection
