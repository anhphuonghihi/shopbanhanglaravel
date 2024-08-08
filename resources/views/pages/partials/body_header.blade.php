@if (!empty($post_header))
    <div class="p-body-header node-header-160 node--category th_node--overwriteTextStyling">
        <div class="pageContent">


            <div class="uix_headerInner">



                <div class="p-title ">
                    @php
                        $nhan = $post[0]->nhan;
                        $listnhan = explode(',', $nhan);
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

                            <a class="username  u-concealed">
                                {{ $user[0]->username }}</a>
                        </li>
                        <li>
                            <i class="fa--xf far fa-clock" aria-hidden="true" title="Ngày gửi"></i>
                            <span class="u-srOnly">Ngày gửi</span>
                            <time class="u-dt">
                                {{ $post[0]->created_at }}

                            </time>
                        </li>

                    </ul>
                </div>



            </div>


            <div class="uix_headerInner--opposite">



                <div class="p-title-pageAction">
                    @if ($post[0]->user_id == Session::get('user_id'))
                        <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}/edit"
                            class="button--cta button button--icon button--icon--write rippleButton"><span
                                class="button-text">Sửa</span></a>

                        <button type="button" class="button--cta button button--icon button--icon--write rippleButton"
                            data-toggle="modal" data-target="#exampleModalCenter">
                            <span class="button-text">Xóa</span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content"
                                    style="
                                background: #f3f3f3f2;
                            ">
                                    <div class="modal-header">
                                        <h5 class="modal-title"
                                            style="
                                        margin: 0;    color: #341313f2;
                                    "
                                            id="exampleModalLongTitle">Bạn có chắc chắn muốn xóa bài đăng không</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button"
                                            class="button--cta button button--icon button--icon--write rippleButton">
                                            <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}/delete">Chắc
                                                chắn</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                        </script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
                        </script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
                        </script>
                        <style>
                            action.active {
                                color: #fff;
                                background-color: #1b1e21;
                                border-color: #1b1e21
                            }

                            .close {
                                float: right;
                                font-size: 1.5rem;
                                font-weight: 700;
                                line-height: 1;
                                color: #000;
                                text-shadow: 0 1px 0 #fff;
                                opacity: .5
                            }

                            .close:focus,
                            .close:hover {
                                color: #000;
                                text-decoration: none;
                                opacity: .75
                            }

                            .close:not(:disabled):not(.disabled) {
                                cursor: pointer
                            }

                            button.close {
                                padding: 0;
                                background-color: transparent;
                                border: 0;
                                -webkit-appearance: none
                            }

                            .modal-open {
                                overflow: hidden
                            }

                            .modal {
                                position: fixed;
                                top: 0;
                                right: 0;
                                bottom: 0;
                                left: 0;
                                z-index: 1050;
                                display: none;
                                overflow: hidden;
                                outline: 0
                            }

                            .modal-open .modal {
                                overflow-x: hidden;
                                overflow-y: auto
                            }

                            .modal-dialog {
                                position: relative;
                                width: auto;
                                margin: .5rem;
                                pointer-events: none
                            }

                            .modal.fade .modal-dialog {
                                transition: -webkit-transform .3s ease-out;
                                transition: transform .3s ease-out;
                                transition: transform .3s ease-out, -webkit-transform .3s ease-out;
                                -webkit-transform: translate(0, -25%);
                                transform: translate(0, -25%)
                            }

                            .modal.show .modal-dialog {
                                -webkit-transform: translate(0, 0);
                                transform: translate(0, 0)
                            }

                            .modal-dialog-centered {
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: flex;
                                -webkit-box-align: center;
                                -ms-flex-align: center;
                                align-items: center;
                                min-height: calc(100% - (.5rem * 2))
                            }

                            .modal-content {
                                position: relative;
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: flex;
                                -webkit-box-orient: vertical;
                                -webkit-box-direction: normal;
                                -ms-flex-direction: column;
                                flex-direction: column;
                                width: 100%;
                                pointer-events: auto;
                                background-color: #fff;
                                background-clip: padding-box;
                                border: 1px solid rgba(0, 0, 0, .2);
                                border-radius: .3rem;
                                outline: 0
                            }

                            .modal-backdrop {
                                position: fixed;
                                top: 0;
                                right: 0;
                                bottom: 0;
                                left: 0;
                                z-index: 1040;
                                background-color: #000
                            }

                            .modal-backdrop.fade {
                                opacity: 0
                            }

                            .modal-backdrop.show {
                                opacity: .5
                            }

                            .modal-header {
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: flex;
                                -webkit-box-align: start;
                                -ms-flex-align: start;
                                align-items: flex-start;
                                -webkit-box-pack: justify;
                                -ms-flex-pack: justify;
                                justify-content: space-between;
                                padding: 1rem;
                                border-bottom: 1px solid #e9ecef;
                                border-top-left-radius: .3rem;
                                border-top-right-radius: .3rem
                            }

                            .modal-header .close {
                                padding: 1rem;
                                margin: -1rem -1rem -1rem auto
                            }

                            .modal-title {
                                margin-bottom: 0;
                                line-height: 1.5
                            }

                            .modal-body {
                                position: relative;
                                -webkit-box-flex: 1;
                                -ms-flex: 1 1 auto;
                                flex: 1 1 auto;
                                padding: 1rem
                            }

                            .modal-footer {
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: flex;
                                -webkit-box-align: center;
                                -ms-flex-align: center;
                                align-items: center;
                                -webkit-box-pack: end;
                                -ms-flex-pack: end;
                                justify-content: flex-end;
                                padding: 1rem;
                                border-top: 1px solid #e9ecef
                            }

                            .modal-footer>:not(:first-child) {
                                margin-left: .25rem
                            }

                            .modal-footer>:not(:last-child) {
                                margin-right: .25rem
                            }

                            .modal-scrollbar-measure {
                                position: absolute;
                                top: -9999px;
                                width: 50px;
                                height: 50px;
                                overflow: scroll
                            }

                            @media (min-width:576px) {
                                .modal-dialog {
                                    max-width: 500px;
                                    margin: 1.75rem auto
                                }

                                .modal-dialog-centered {
                                    min-height: calc(100% - (1.75rem * 2))
                                }

                                .modal-sm {
                                    max-width: 300px
                                }
                            }

                            @media (min-width:992px) {
                                .modal-lg {
                                    max-width: 800px
                                }
                            }

                            .tooltip {
                                position: absolute;
                                z-index: 1070;
                                display: block;
                                margin: 0;
                                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                                font-style: normal;
                                font-weight: 400;
                                line-height: 1.5;
                                text-align: left;
                                text-align: start;
                                text-decoration: none;
                                text-shadow: none;
                                text-transform: none;
                                letter-spacing: normal;
                                word-break: normal;
                                word-spacing: normal;
                                white-space: normal;
                                line-break: auto;
                                font-size: .875rem;
                                word-wrap: break-word;
                                opacity: 0
                            }

                            .tooltip.show {
                                opacity: .9
                            }

                            .tooltip .arrow {
                                position: absolute;
                                display: block;
                                width: .8rem;
                                height: .4rem
                            }

                            .tooltip .arrow::before {
                                position: absolute;
                                content: "";
                                border-color: transparent;
                                border-style: solid
                            }

                            .bs-tooltip-auto[x-placement^=top],
                            .bs-tooltip-top {
                                padding: .4rem 0
                            }

                            .bs-tooltip-auto[x-placement^=top] .arrow,
                            .bs-tooltip-top .arrow {
                                bottom: 0
                            }
                        </style>
                        <a href="/threads/{{ $post[0]->post_slug }}.{{ $post[0]->id }}/stiky"
                            class="button--cta button button--icon button--icon--write rippleButton"><span
                                class="button-text">Ghim</span></a>
                    @else
                    @endif
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
                    @if (!empty(Session::get('username')))
                        <a href="/create-thread" class="button button--icon button--icon--bolt rippleButton"><span
                                class="button-text">
                                Bài viết mới
                            </span></a>
                    @else
                        <a href="/login/"
                            class="button button--icon button--icon--bolt rippleButtonn p-navgroup-link--logIn"><span
                                class="button-text">
                                Bài viết mới
                            </span></a>
                    @endif
                </div>
            </div>

        </div>
    </div>
@endif
