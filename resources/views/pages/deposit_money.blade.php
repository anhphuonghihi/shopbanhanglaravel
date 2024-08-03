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
">Nạp
                                                        tiền</span></span>
                                            </span>

                                        </h1>





                                    </div>
                                    <form action="/momo" method="post"
                                        class="block-outer block-outer--after block js-quickReply" ">
                                        @csrf
                                                <div>
                                                
                                                </div>

                                                <div class="message message--quickReply block-topRadiusContent block-bottomRadiusContent">
                                                    <div class="message-inner">

                                                        <div class="message-cell message-cell--main">
                                                            <div class="formButtonGroup ">
                                                                <div class="formButtonGroup-primary">
                                                                    <button type="submit" class="button--primary button button--icon button--icon--reply rippleButton rippleButton"><span class="button-text">
                                                                            Gửi trả lời
                                                                        </span></button>
                                                                </div>

                                      

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
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
