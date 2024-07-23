@if (!empty($post_header))
    <div class="p-body-header node-header-160 node--category th_node--overwriteTextStyling">
        <div class="pageContent">


            <div class="uix_headerInner">



                <div class="p-title ">
                    @php
                        $nhan = $post[0]->nhan;
                        $listnhan = explode(',', $nhan, -1);
                    @endphp

                    <h1 class="p-title-value">
                        @include('pages.partials.listnhan')

                        {{ $post[0]->ten_bai_viet }}
                    </h1>


                </div>



                <div class="p-description">
                    <ul class="listInline listInline--bullet">
                        <li>
                            <i class="fa--xf far fa-user" aria-hidden="true" title="Thread starter"></i>
                            <span class="u-srOnly">Thread starter</span>

                            <a href="/members/iso-9002.19/" class="username  u-concealed" dir="auto"
                                data-user-id="19" data-xf-init="member-tooltip" id="js-XFUniqueId7">
                                {{ $user[0]->username }}</a>
                        </li>
                        <li>
                            <i class="fa--xf far fa-clock" aria-hidden="true" title="Ngày gửi"></i>
                            <span class="u-srOnly">Ngày gửi</span>

                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/"
                                class="u-concealed"><time class="u-dt"> @php
                                    $date2 = new DateTime($post[0]->created_at);
                                @endphp
                                    @include('pages.partials.time')</time></a>
                        </li>

                    </ul>
                </div>



            </div>


            <div class="uix_headerInner--opposite">



                <div class="p-title-pageAction">

                    <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}/reply"
                        class="button--cta uix_quickReply--button button button--icon button--icon--write rippleButton"><span
                            class="button-text">Trả lời</span></a>
                    <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}/reply"
                        class="button--cta uix_quickReply--button button button--icon button--icon--write rippleButton"><span
                            class="button-text">Sửa</span></a>
                    <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}/reply"
                        class="button--cta uix_quickReply--button button button--icon button--icon--write rippleButton"><span
                            class="button-text">Xóa</span></a>
                    <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}/reply"
                        class="button--cta uix_quickReply--button button button--icon button--icon--write rippleButton"><span
                            class="button-text">Ghim</span></a>
                </div>






            </div>


        </div>
    </div>
@else
    <div class="p-body-header">
        <div class="pageContent">
            <div class="uix_headerInner">
                <div class="p-title ">
                    <h1 class="p-title-value">{{ $meta_title }}</h1>
                </div>
                @if (!empty($description))
                    <div class="p-description">
                        @php echo $description; @endphp
                    </div>
                @endif
            </div>
            <div class="uix_headerInner--opposite">
                <div class="p-title-pageAction">
                    <a href="/whats-new/news-post" class="button button--icon button--icon--bolt rippleButton"><span
                            class="button-text">
                            Bài viết mới
                        </span></a>
                </div>
            </div>

        </div>
    </div>
@endif
