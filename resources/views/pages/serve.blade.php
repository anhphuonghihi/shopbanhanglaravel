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
">Mã
                                                        giới thiệu</span></span>
                                            </span>

                                        </h1>





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
