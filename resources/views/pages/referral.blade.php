@extends('layout_dang_tin')
@section('content')
    <div class="p-body-main  p-body-main--withSideNav">
        @include('pages.partials.sidenav')
        <div uix_component="MainContent" class="p-body-content">
            <!-- ABOVE MAIN CONTENT -->
            <div class="block">
                <div class="block-container">
                    <div class="block-body">
                        <div class="">

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
">Mã
                                                        giới thiệu</span></span>
                                            </span>

                                        </h1>





                                    </div>
                                </div>
                            </div>




                        </div>

                        <div>
                            <div class="blockMessage blockMessage--none">





                                <div class="shareButtons shareButtons--iconic" data-xf-init="share-buttons" data-page-url=""
                                    data-page-title="" data-page-desc="" data-page-image="">



                                    <div class="shareButtons-buttons shareButtons-buttons-ma-gioi-thieu">

                                        <a class="shareButtons-button shareButtons-button--link"
                                            data-clipboard="@php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']. "/" . Session::get('ma_gioi_thieu'); @endphp">

                                            <p>@php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']. "/" . Session::get('ma_gioi_thieu'); @endphp</p>
                                        </a>

                                        <a class="shareButtons-button shareButtons-button--link"
                                            data-clipboard="@php echo Session::get('ma_gioi_thieu'); @endphp">

                                            <p>@php echo Session::get('ma_gioi_thieu'); @endphp</p>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div>

                            @if (!empty(Session::get('username')))
                            @endif
                            @php
                                $user = DB::table('users')->where('id', Session::get('user_id'))->get();

                            @endphp
                            @if ($user[0]->duoc_gioi_thieu == null)
                                @php
                                    $message = Session::get('message_gioi_thieu');
                                    if ($message) {
                                        echo '<span class="text-alert">' . $message . '</span>';
                                        Session::put('message_gioi_thieu', null);
                                    }
                                @endphp
                                <div class="">

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
        ">Nhập
                                                                mã
                                                                giới thiệu</span></span>
                                                    </span>

                                                </h1>





                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <form action="/referral-code" method="post">
                                    @csrf
                                    <dl class="formRow formRow--input">
                                        <dt>
                                            <div class="formRow-labelWrapper">
                                                <label class="formRow-label" for="_xfUid-1-1721463296">Mã giới thiệu</label>
                                            </div>
                                        </dt>
                                        <dd>
                                            <input type="text" class="input" name="code" autofocus="autofocus"
                                                required="required" autocomplete="code" id="_xfUid-1-1721463296">
                                        </dd>
                                    </dl>
                                    <div class="formSubmitRow-controls"><button type="submit"
                                            class="button--primary button button--icon button--icon--login rippleButton">Gửi</span></button>
                                    </div>
                                </form>
                            @else
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- BELOW MAIN CONTENT -->
        </div>
    </div>
@endsection
