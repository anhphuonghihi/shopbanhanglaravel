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
                                            <span class="avatar avatar--l avatar--default avatar--default--dynamic"
                                                data-user-id="516184" style="background-color: #f44336; color: #ff8a80"
                                                title="phuonghole1212">
                                                <span class="avatar-u516184-l" role="img"
                                                    aria-label="phuonghole1212">P</span>
                                            </span>

                                        </span>
                                    </span>
                                    <div class="memberHeader-content memberHeader-content--info">


                                        <h1 class="memberHeader-name">
                                            <span class="memberHeader-nameWrapper">
                                                <span class="username " dir="auto" data-user-id="516184"><span
                                                        class="username--style2">phuonghole1212</span></span>
                                            </span>

                                        </h1>



                                        <div class="memberHeader-blurbContainer">
                                            <div class="memberHeader-blurb" dir="auto"><span class="userTitle"
                                                    dir="auto">LÍNH DỰ BỊ</span></div>


                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="memberHeader-content">
                                <div class="memberHeader-stats">
                                    <div class="pairJustifier">



                                        <dl class="pairs pairs--rows pairs--rows--centered fauxBlockLink">
                                            <dt>Bài viết</dt>
                                            <dd>
                                                <a href="/search/member?user_id=516184"
                                                    class="fauxBlockLink-linkRow u-concealed">
                                                    0
                                                </a>
                                            </dd>
                                        </dl>



                                        <dl class="pairs pairs--rows pairs--rows--centered">
                                            <dt>Uy tín</dt>
                                            <dd>
                                                0
                                            </dd>
                                        </dl>


                                        <dl class="pairs pairs--rows pairs--rows--centered fauxBlockLink">
                                            <dt title="Điểm thưởng">Điểm</dt>
                                            <dd>
                                                <a href="/members/phuonghole1212.516184/trophies" data-xf-click="overlay"
                                                    class="fauxBlockLink-linkRow u-concealed">
                                                    0
                                                </a>
                                            </dd>
                                        </dl>




                                    </div>
                                </div>


                                <hr class="memberHeader-separator">

                                <div class="uix_memberHeader__extra">
                                    <div class="memberHeader-blurb">
                                        <dl class="pairs pairs--inline">
                                            <dt>Tham gia ngày</dt>
                                            <dd><time class="u-dt" dir="auto" datetime="2024-07-22T21:37:13+0700"
                                                    data-time="1721659033" data-date-string="22/7/24"
                                                    data-time-string="21:37" title="22/7/24 lúc 21:37">42 phút
                                                    trước</time></dd>
                                        </dl>
                                    </div>


                                    <div class="memberHeader-blurb">
                                        <dl class="pairs pairs--inline">
                                            <dt>Last seen</dt>
                                            <dd dir="auto">
                                                <time class="u-dt" dir="auto" datetime="2024-07-22T22:19:38+0700"
                                                    data-time="1721661578" data-date-string="22/7/24"
                                                    data-time-string="22:19" title="22/7/24 lúc 22:19">Vài giây
                                                    trước</time> <span role="presentation" aria-hidden="true">·</span>
                                                Đang xem thành viên
                                            </dd>
                                        </dl>
                                    </div>


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
