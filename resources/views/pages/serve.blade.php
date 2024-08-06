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
                                                        style=" display: flex; text-align: center; padding: 10px; justify-content: center; align-items: center;">Dịch
                                                        vụ</span></span>
                                            </span>

                                        </h1>





                                    </div>
                                </div>
                            </div>
                            <?php
                            $user_id = Session::get('user_id');
                            $crr_users = DB::table('users')->where('id', '=', $user_id)->get();
                            $message = Session::get('message');
                            if (!empty($message)) {
                                echo '<span class="text-alert">' . $message . '</span>';
                                Session::put('message', null);
                            }
                            ?>
                            @if ($crr_users[0]->dich_vu_su_dung == 0)
                                <form action="/serve-save" method="post">
                                    @csrf
                                    <dl class="formRow formRow--input">
                                        <dl class="formRow formRow--input">
                                            <dt style="padding: 15px !important;">
                                                <div class="formRow-labelWrapper">
                                                    <label class="formRow-label" for="_xfUid-1-1721463296">Dịch vụ
                                                    </label>
                                                </div>
                                            </dt>
                                            <dd>
                                                <div class="formRow-labelWrapper"> Gói tháng đăng bài</div>

                                            </dd>
                                        </dl>
                                        <div class="formSubmitRow-controls"><button type="submit"
                                                class="button--primary button button--icon button--icon--login rippleButton rippleButton rippleButton">Gửi</button>
                                        </div>
                                </form>
                            @else
                                <span
                                    style="display: flex;text-align: center;padding: 10px;justify-content: center;align-items: center;">
                                    Bạn đã đăng kí gói tháng</span>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
            <!-- BELOW MAIN CONTENT -->
        </div>
    </div>
@endsection
