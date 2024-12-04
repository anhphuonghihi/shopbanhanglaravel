<div class="overlay-container" id="dang_nhap">
    <div class="overlay" tabindex="-1" data-url="https://xcheckerviet.biz/login/" role="dialog" aria-hidden="false">
        <div class="overlay-title"><a class="overlay-titleCloser js-overlayClose" role="button" tabindex="0"
                aria-label="Đóng"></a>Đăng nhập</div>
        <?php
        
        $message = Session::get('message');
        if (!empty($message)) {
            echo '<span class="text-alert">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
        <div class="overlay-content">
            <div class="blocks">

                @foreach ($errors->all() as $val)
                    <ul>
                        <li>{{ $val }}</li>
                    </ul>
                @endforeach
                <form action="{{ URL::to('/login') }}" method="post" class="block" id="loginform">
                    @csrf
                    <div class="block-container">
                        <div class="block-body">


                            <dl class="formRow formRow--input">
                                <dt>
                                    <div class="formRow-labelWrapper">
                                        <label class="formRow-label" for="_xfUid-1-1721463296">Tên tài khoản hoặc địa
                                            chỉ Email</label>
                                    </div>
                                </dt>
                                <dd>
                                    <input type="text" class="input" name="username" autofocus="autofocus"
                                        required="required" autocomplete="username" id="_xfUid-1-1721463296">
                                </dd>
                            </dl>




                            <dl class="formRow formRow--input">
                                <dt>
                                    <div class="formRow-labelWrapper">
                                        <label class="formRow-label" for="_xfUid-2-1721463296">Mật khẩu</label>
                                    </div>
                                </dt>
                                <dd>




                                    <div data-xf-init=" password-hide-show" data-show-text="Show" data-hide-text="Hide">

                                        <div class="inputGroup inputGroup--joined">

                                            <input type="password" name="password" value="" required="required"
                                                class="input js-password input--passwordHideShow"
                                                autocomplete="current-password" id="_xfUid-2-1721463296">


                                            <div class="inputGroup-text">
                                                <label class="iconic iconic--hideShow js-hideShowContainer"><input
                                                        type="checkbox" value="1"><i aria-hidden="true"></i><span
                                                        class="iconic-label">Show</span></label>

                                            </div>
                                        </div>



                                    </div>
                                </dd>
                            </dl>





                            <dl class="formRow">
                                <dt>
                                    <div class="formRow-labelWrapper"></div>
                                </dt>
                                <dd>

                                    <ul class="inputChoices">
                                        <li class="inputChoices-choice"><label class="iconic"><input type="checkbox"
                                                    name="remember" value="1" checked="checked"><i
                                                    aria-hidden="true"></i><span class="iconic-label">Duy trì đăng
                                                    nhập</span></label></li>

                                    </ul>

                                </dd>
                            </dl>


                        </div>

                        <dl class="formRow formSubmitRow">
                            <dt></dt>
                            <dd>
                                <div class="formSubmitRow-main">
                                    <div class="formSubmitRow-bar"></div>
                                    <div class="formSubmitRow-controls"><button type="submit"
                                            class="button--primary button button--icon button--icon--login"><span
                                                class="button-text">Đăng Nhập</span></button></div>
                                </div>
                            </dd>
                        </dl>

                    </div>

                    <div class="block-outer block-outer--after uix_login__registerLink">
                        <div class="block-outer-middle">
                            Bạn chưa có tài khoản? <a href="/register/">Đăng Ký Ngay</a>
                        </div>
                    </div>



                </form>




            </div>
        </div>
    </div>
</div>

<div class="overlay-container" id="dang_ki">
    <div class="overlay" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="overlay-title"><a class="overlay-titleCloser js-overlayClose" role="button" tabindex="0"
                aria-label="Đóng"></a>Đăng Ký</div>
        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<span class="text-alert">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
        <div class="overlay-content">


            @foreach ($errors->all() as $val)
                <ul>
                    <li>{{ $val }}</li>
                </ul>
            @endforeach
            <form action="{{ URL::to('/register') }}" method="post" class="block">
                @csrf

                <div class="block-container">
                    <div class="block-body">






                        <dl class="formRow formRow--input">
                            <dt>
                                <div class="formRow-labelWrapper">
                                    <label class="formRow-label" for="_xfUid-1-1721464748">Tên tài khoản</label>
                                    <dfn class="formRow-hint">
                                        <font color="red">*Bắt buộc</font>
                                    </dfn>
                                </div>
                            </dt>
                            <dd>
                                <input type="text" class="input" name="username" autocomplete="username"
                                    required="required" autofocus="autofocus" maxlength="15"
                                    id="_xfUid-1-1721464748">
                                <div class="inputValidationError js-validationError"></div>
                                <div class="formRow-explain">Đây là tên hiển thị ở mỗi bài viết của bạn. Bạn có thể
                                    dùng bất cứ tên nào mình muốn. Một khi đã đặt thì không thể đổi.</div>
                            </dd>
                        </dl>






                        <dl class="formRow formRow--input">
                            <dt>
                                <div class="formRow-labelWrapper">
                                    <label class="formRow-label" for="_xfUid-3-1721464748">Email</label>
                                    <dfn class="formRow-hint">
                                        <font color="red">*Bắt buộc</font>
                                    </dfn>
                                </div>
                            </dt>
                            <dd>
                                <input type="email" class="input" name="email" autocomplete="email"
                                    required="required" maxlength="120" id="_xfUid-3-1721464748">
                            </dd>
                        </dl>










                        <dl class="formRow formRow--input">
                            <dt>
                                <div class="formRow-labelWrapper">
                                    <label class="formRow-label" for="_xfUid-4-1721464748">Mật khẩu</label>
                                    <dfn class="formRow-hint">
                                        <font color="red">*Bắt buộc</font>
                                    </dfn>
                                </div>
                            </dt>
                            <dd>






                                <div data-xf-init="password-strength password-hide-show" data-show-text="Show"
                                    data-hide-text="Hide">

                                    <div class="inputGroup inputGroup--joined">

                                        <input type="password" name="password" value=""
                                            class="input js-password input--passwordHideShow"
                                            autocomplete="new-password" required="required" checkstrength="true"
                                            id="_xfUid-4-1721464748">


                                        <div class="inputGroup-text">
                                            <label class="iconic iconic--hideShow js-hideShowContainer"><input
                                                    type="checkbox" value="1"><i aria-hidden="true"></i><span
                                                    class="iconic-label">Show</span></label>

                                        </div>
                                    </div>




                                </div>
                            </dd>
                        </dl>



                        <dl class="formRow">
                            <dt>
                                <div class="formRow-labelWrapper"></div>
                            </dt>
                            <dd>
                                <label class="iconic"><input type="checkbox" value="1" required="required"><i
                                        aria-hidden="true"></i><span class="iconic-label">I
                                        agree to the <a href="/help/terms/" target="_blank">terms</a> and <a
                                            href="/help/privacy-policy/" target="_blank">privacy
                                            policy</a>.</span></label>

                            </dd>
                        </dl>



                    </div>


                    <dl class="formRow formSubmitRow">
                        <dt></dt>
                        <dd>
                            <div class="formSubmitRow-main">
                                <div class="formSubmitRow-bar"></div>
                                <div class="formSubmitRow-controls">
                                    <button type="submit" class="button--primary button" id="js-signUpButton">Đăng
                                        Ký</button>
                                </div>
                            </div>
                        </dd>
                    </dl>


                </div>


            </form>
        </div>
    </div>
</div>
