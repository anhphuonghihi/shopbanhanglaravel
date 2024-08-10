@extends('layout_dang_tin')
@section('content')
    <div class="p-body-main  p-body-main--withSideNav">
        @include('pages.partials.sidenav')
        @php
            $data = [];
            $thanh_toan = DB::table('tbl_admin_payment')->get();
            $user_id = Session::get('user_id');
            $tbl_payment = DB::table('tbl_payment')->get();
            $number_id = $tbl_payment->count();
            $number_value = 'NAP100' . $user_id . $number_id;
            $number = mt_rand(0, $thanh_toan->count() - 1);

        @endphp


        <div uix_component="MainContent" class="p-body-content">
            <!-- ABOVE MAIN CONTENT -->
            <div class="block">
                <div>
                    <div class="block-body">
                        <div class="memberHeader ">
                            <div class="memberProfileBanner memberHeader-main memberProfileBanner-u516184-l"
                                response-toggle-class="memberHeader--withBanner">
                                <div class="memberHeader-mainContent">
                                    <span class="memberHeader-avatar">
                                        <span class="avatarWrapper">


                                        </span>
                                    </span>
                                    <div class="">


                                        <h1 class="memberHeader-name">
                                            <span class="memberHeader-nameWrapper">
                                                <span class="username " dir="auto" data-user-id="516184"><span
                                                        style=" display: flex; text-align: center; padding: 10px; justify-content: center; align-items: center;
">Nạp
                                                        tiền</span></span>
                                            </span>

                                        </h1>





                                    </div>
                                    <form action="/nap-tien" method="post"
                                        class="block-outer block-outer--after block js-quickReply" id="formthanhtoan">
                                        @csrf
                                        <dl class="formRow formRow--input">
                                            <dt>
                                                <div class="formRow-labelWrapper">
                                                    <label class="formRow-label">Số tiền nạp</label>
                                                </div>
                                            </dt>
                                            <dd>
                                                <select name="money" class="input">
                                                    <option value="50000"> {{ number_format(50000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="100000">{{ number_format(100000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="200000">{{ number_format(200000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="500000">{{ number_format(500000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="1000000">{{ number_format(1000000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="2000000">{{ number_format(2000000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="5000000">{{ number_format(5000000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="10000000">{{ number_format(10000000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="20000000">{{ number_format(20000000, 0, ',', '.') }}đ
                                                    </option>
                                                    <option value="50000000">{{ number_format(50000000, 0, ',', '.') }}đ
                                                    </option>
                                                </select>
                                            </dd>
                                        </dl>
                                        <dl class="formRow formSubmitRow">
                                            <input type="hidden" name="ten_ngan_hang"
                                                value="{{ $thanh_toan[$number]->ten_ngan_hang }}">
                                            <input type="hidden" name="password"
                                                value="{{ $thanh_toan[$number]->password }}">
                                            <input type="hidden" name="stk" value="{{ $thanh_toan[$number]->stk }}">
                                            <input type="hidden" name="token" value="{{ $thanh_toan[$number]->token }}">
                                            <dt></dt>
                                            <dd>
                                                <div class="formSubmitRow-main">
                                                    <div class="formSubmitRow-bar"></div>
                                                    <div class="formSubmitRow-controls"><button type="button"
                                                            id="button_nap"
                                                            class="button--primary button button--icon button--icon--save rippleButton"><span
                                                                class="button-text" data-toggle="modal"
                                                                data-target="#exampleModalCenter">Nạp tiền</span></button>
                                                    </div>
                                                </div>
                                                @if (!empty($_COOKIE['nap_tien']))
                                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">

                                                            <div class="modal-content"style="background: #f3f3f3f2;">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        style="margin: 0;    color: #341313f2;"
                                                                        id="exampleModalLongTitle">Nạp tiền <span
                                                                            id="demo"></span></h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <dl class="formRow formRow--input">
                                                                        <dd
                                                                            style="
                                                                        color:#000;
                                                                    ">
                                                                            <div>Lưu ý :Sau khi chuyển khoản 2 phút sẽ được
                                                                                tự động cộng tiền vào tài khoản</div>
                                                                            <br><img
                                                                                src="https://img.vietqr.io/image/{{ $thanh_toan[$number]->ten_ngan_hang }}-{{ $thanh_toan[$number]->stk }}-compact2.jpg?amount=tien_value&addInfo={{ $number_value }}&amp;accountName={{ $thanh_toan[$number]->acc_name }}">
                                                                        </dd>

                                                                    </dl>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </dd>
                                        </dl>
                                </div>
                            </div>
                        </div>

                        </form>


                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                        </script>
                        <script>
                            function startTimer(duration, display) {
                                var timer = duration,
                                    minutes, seconds;
                                setInterval(function() {
                                    minutes = parseInt(timer / 60, 10);
                                    seconds = parseInt(timer % 60, 10);

                                    minutes = minutes < 10 ? "0" + minutes : minutes;
                                    seconds = seconds < 10 ? "0" + seconds : seconds;

                                    display.textContent = minutes + ":" + seconds;

                                    if (--timer < 0) {
                                        timer = duration;
                                    }
                                    if (timer == 0) {
                                        window.location.reload();
                                    }
                                }, 1000);

                            }
                        </script>
                        @php
                            $response = null;
                            if ($thanh_toan[$number]->ten_ngan_hang == 'BIDV') {
                                $response = file_get_contents(
                                    'https://api.web2m.com/historyapibidv/' .
                                        $thanh_toan[$number]->password .
                                        '/' .
                                        $thanh_toan[$number]->stk .
                                        '/' .
                                        $thanh_toan[$number]->token .
                                        '',
                                );
                            } elseif ($thanh_toan[$number]->ten_ngan_hang == 'ACB') {
                                $response = file_get_contents(
                                    'https://api.web2m.com/historyapiacb/' .
                                        $thanh_toan[$number]->password .
                                        '/' .
                                        $thanh_toan[$number]->stk .
                                        '/' .
                                        $thanh_toan[$number]->token .
                                        '',
                                );
                            } elseif ($thanh_toan[$number]->ten_ngan_hang == 'TPBANK') {
                                $response = file_get_contents(
                                    'https://api.web2m.com/historyapitpb/' .
                                        $thanh_toan[$number]->password .
                                        '/' .
                                        $thanh_toan[$number]->stk .
                                        '/' .
                                        $thanh_toan[$number]->token .
                                        '',
                                );
                            } elseif ($thanh_toan[$number]->ten_ngan_hang == 'VIETCOMBANK') {
                                $response = file_get_contents(
                                    'https://api.web2m.com/historyapivcb/' .
                                        $thanh_toan[$number]->password .
                                        '/' .
                                        $thanh_toan[$number]->stk .
                                        '/' .
                                        $thanh_toan[$number]->token .
                                        '',
                                );
                            } elseif ($thanh_toan[$number]->ten_ngan_hang == 'TECHCOMBANK') {
                                $response = file_get_contents(
                                    'https://api.web2m.com/historyapitcb/' .
                                        $thanh_toan[$number]->password .
                                        '/' .
                                        $thanh_toan[$number]->stk .
                                        '/' .
                                        $thanh_toan[$number]->token .
                                        '',
                                );
                            } elseif ($thanh_toan[$number]->ten_ngan_hang == 'MBBANK') {
                                $response = file_get_contents(
                                    'https://api.web2m.com/historyapimb/' .
                                        $thanh_toan[$number]->password .
                                        '/' .
                                        $thanh_toan[$number]->stk .
                                        '/' .
                                        $thanh_toan[$number]->token .
                                        '',
                                );
                            } elseif ($thanh_toan[$number]->ten_ngan_hang == 'VIETINBANK') {
                                $response = file_get_contents(
                                    'https://api.web2m.com/historyapivtb/' .
                                        $thanh_toan[$number]->password .
                                        '/' .
                                        $thanh_toan[$number]->stk .
                                        '/' .
                                        $thanh_toan[$number]->token .
                                        '',
                                );
                            }
                            Session::put('response', $response);
                        @endphp



                        <script type="text/javascript">
                            document.querySelector('#button_nap').addEventListener('click', function(e) {
                                value = $('#formthanhtoan select').val();
                                img = $('#formthanhtoan img').attr('src');
                                let result = img.replace(/tien_value/g, value);


                                $('#formthanhtoan img').attr('src', result);
                                var fiveMinutes = 60 * 5,
                                    display = document.querySelector('#demo');
                                startTimer(fiveMinutes, display);
                            });
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

                    </div>

                </div>




            </div>
        </div>
    </div>
    </div>
    <!-- BELOW MAIN CONTENT -->
    </div>
    </div>
@endsection
