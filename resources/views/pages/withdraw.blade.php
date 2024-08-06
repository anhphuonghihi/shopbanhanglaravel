@extends('layout_dang_tin')
@section('content')
    <div class="p-body-main  p-body-main--withSideNav">
        @include('pages.partials.sidenav')
        <div uix_component="MainContent" class="p-body-content">
            <!-- ABOVE MAIN CONTENT -->
            <div class="block">
                <div class="block-container">
                    <div class="block-body">
                        <div class="memberHeader ">

                            <div class="memberProfileBanner memberHeader-main memberProfileBanner-u516184-l"
                                data-toggle-class="memberHeader--withBanner">
                                <div class="memberHeader-mainContent">
                                    <span class="memberHeader-avatar">
                                        <span class="avatarWrapper">


                                        </span>
                                    </span>
                                    <div class="">


                                        <h1 class="memberHeader-name">
                                            <span class="memberHeader-nameWrapper">
                                                <span class="username " dir="auto" data-user-id="516184"><span
                                                        style="
                                                                display: flex;
                                                                text-align: center;
                                                                padding: 10px;
                                                                justify-content: center;
                                                                align-items: center;
                                                            ">Rút
                                                        tiền</span></span>
                                            </span>

                                        </h1>





                                    </div>
                                </div>
                            </div>

                            <div>
                                <?php
                                
                                $message = Session::get('message');
                                if (!empty($message)) {
                                    echo '<span class="text-alert">' . $message . '</span>';
                                    Session::put('message', null);
                                }
                                ?>
                                @if (!empty(Session::get('sum_da_tung_nap')))
                                    @if (Session::get('sum_da_tung_nap') >= 50000)
                                        <form action="/withdraw-money-user" method="post">
                                            <input type="hidden" name="_token"
                                                value="yLsf0TcKfFhBg8d4BBRGKDoxsWKEnXb88s53YZwA">
                                            <dl class="formRow formRow--input">
                                                <dt>
                                                    <div class="formRow-labelWrapper">
                                                        <label class="formRow-label" for="_xfUid-1-1721463296">Số tài
                                                            khoản</label>
                                                    </div>
                                                </dt>
                                                <dd>
                                                    <input type="text" class="input" name="stk" required="required" " id="_xfUid-1-1721463296">
                                                                </dd>
                                                            </dl>
                                                            <dl class="formRow formRow--input">
                                                                <dt>
                                                                    <div class="formRow-labelWrapper">
                                                                        <label class="formRow-label" for="_xfUid-1-1721463296">Tên ngân hàng
                                                                        </label>
                                                                    </div>
                                                                </dt>
                                                                <dd>
                                                                    <input type="text" class="input" name="ten_ngan_hang"
                                                                        required="required" id="_xfUid-1-1721463296">
                                                                </dd>
                                                            </dl>
                                                                                                                <dl class="formRow formRow--input">
                                                                <dt>
                                                                    <div class="formRow-labelWrapper">
                                                                        <label class="formRow-label" for="_xfUid-1-1721463296">Chủ sở hữu tài khoản ngân hàng
                                                                        </label>
                                                                    </div>
                                                                </dt>
                                                                <dd>
                                                                    <input type="text" class="input" name="ten_tai_khoan_ngan_hang"
                                                                        required="required" id="_xfUid-1-1721463296">
                                                                </dd>
                                                            </dl>
                                                            <dl class="formRow formRow--input">
                                                                <dt>
                                                                    <div class="formRow-labelWrapper">
                                                                        <label class="formRow-label" for="_xfUid-1-1721463296">Số tiền rút
                                                                        </label>
                                                                    </div>
                                                                </dt>
                                                                <dd>
                                                                    <input type="number" class="input" name="so_tien" required="required"
                                                                        style="max-width: 100% !important;     text-align: left;" min="0"
                                                                        id="_xfUid-1-1721463296">
                                                                </dd>
                                                            </dl>
                                                            <div class="formSubmitRow-controls"><button type="submit"
                                                                    class="button--primary button button--icon button--icon--login rippleButton rippleButton">Gửi</button>
                                                            </div>
                                                        </form>
@else
    <span
                                                            style="display: flex;text-align: center;padding: 10px;justify-content: center;align-items: center;">
                                                            Bạn chưa đủ 50.000 VND để có thể rút tiền</span>
     @endif
                                    @endif
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- BELOW MAIN CONTENT -->
        </div>
    </div>
@endsection
