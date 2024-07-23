@if (!empty($post_header))
    <div class="p-body-header node-header-160 node--category th_node--overwriteTextStyling">

        <div class="pageContent">


            <div class="uix_headerInner">



                <div class="p-title ">


                    <h1 class="p-title-value"><a href="/forums/cave-xa-dan-hoang-cau-kiem-dinh.160/?prefix_id=43"
                            class="labelLink" rel="nofollow"><span class="label label--red" dir="auto">✪ ĐỘC QUYỀN
                                ✪</span></a><span class="label-append">&nbsp;</span><a
                            href="/forums/cave-xa-dan-hoang-cau-kiem-dinh.160/?prefix_id=25" class="labelLink"
                            rel="nofollow"><span class="label label--orange" dir="auto">600K</span></a>
                        TRANG ANH- NÉT DÂM HIỆN TRÊN GƯƠNG MẶT - VÚ TO - MÔNG MẨY - SỰ GỤC NGÃ CỦA CÁC CHECKER
                    </h1>


                </div>



                <div class="p-description">
                    <ul class="listInline listInline--bullet">
                        <li>
                            <i class="fa--xf far fa-user" aria-hidden="true" title="Thread starter"></i>
                            <span class="u-srOnly">Thread starter</span>

                            <a href="/members/iso-9002.19/" class="username  u-concealed" dir="auto"
                                data-user-id="19" data-xf-init="member-tooltip" id="js-XFUniqueId7">ISO 9002</a>
                        </li>
                        <li>
                            <i class="fa--xf far fa-clock" aria-hidden="true" title="Ngày gửi"></i>
                            <span class="u-srOnly">Ngày gửi</span>

                            <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/"
                                class="u-concealed"><time class="u-dt" dir="auto"
                                    datetime="2023-10-06T22:50:08+0700" data-time="1696607408"
                                    data-date-string="6/10/23" data-time-string="22:50"
                                    title="6/10/23 lúc 22:50">6/10/23</time></a>
                        </li>

                    </ul>
                </div>



            </div>


            <div class="uix_headerInner--opposite">



                <div class="p-title-pageAction">

                    <a href="/threads/trang-anh-net-dam-hien-tren-guong-mat-vu-to-mong-may-su-guc-nga-cua-cac-checker.125638/reply"
                        class="button--cta uix_quickReply--button button button--icon button--icon--write rippleButton"><span
                            class="button-text">Trả lời</span></a>

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
