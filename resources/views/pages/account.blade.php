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
                                                title="{{ Session::get('username') }}">
                                                <span class="avatar-u516184-l" role="img"
                                                    aria-label="{{ Session::get('username') }}">@php

                                                        $user_name = Session::get('username');
                                                        echo strtoupper(
                                                            substr($user_name, 0, -(strlen($user_name) - 1)),
                                                        );
                                                    @endphp</span>
                                            </span>

                                        </span>
                                    </span>
                                    <div class="memberHeader-content memberHeader-content--info">


                                        <h1 class="memberHeader-name">
                                            <span class="memberHeader-nameWrapper">
                                                <span class="username " dir="auto" data-user-id="516184"><span
                                                        class="username--style2">{{ Session::get('username') }}</span></span>
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
                                            <dt>Ví tiền</dt>
                                            <dd>
                                                @php
                                                    echo Session::get('vi_tien');
                                                @endphp
                                            </dd>
                                        </dl>
                                        <dl class="pairs pairs--rows pairs--rows--centered fauxBlockLink">
                                            <dt>Bài viết</dt>
                                            <dd id="bai_viet">
                                                0
                                            </dd>
                                        </dl>



                                        <dl class="pairs pairs--rows pairs--rows--centered">
                                            <dt>Uy tín</dt>
                                            <dd id="uy_tin">
                                                0
                                            </dd>
                                        </dl>


                                        <dl class="pairs pairs--rows pairs--rows--centered fauxBlockLink">
                                            <dt title="Hoa hồng">Hoa hồng</dt>
                                            <dd>
                                                @php
                                                    echo Session::get('sum_da_tung_nap');
                                                @endphp
                                            </dd>
                                        </dl>




                                    </div>
                                </div>


                                <hr class="memberHeader-separator">



                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- BELOW MAIN CONTENT -->
        </div>
    </div>
@endsection
