<div class="w3layouts-main">
    <h2>Đăng nhập</h2>
    <?php
    $message = Session::get('message');
    if ($message) {
        echo '<span class="text-alert">' . $message . '</span>';
        Session::put('message', null);
    }
    ?>
    <div class="login-box">
        Đăng nhập
        <form action="{{ URL::to('/login') }}" method="post">
            {{ csrf_field() }}
            @foreach ($errors->all() as $val)
                <ul>
                    <li>{{ $val }}</li>
                </ul>
            @endforeach
            <input type="text" class="ggg" name="username" placeholder="Tên tài khoản hoặc email">
            <input type="password" class="ggg" name="password" placeholder="Mật khẩu">

            <span><input type="checkbox" />Nhớ đăng nhập</span>
            <h6><a href="#">Quên mật khẩu</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng nhập" name="login">

        </form>
        <a href="{{ url('/login-facebook') }}">Login Facebook</a> |
        <a href="{{ url('/login-google') }}">Login Google</a>
        <p>Don't Have an Account ?<a href="{{ URL::to('/dang-ky') }}">Create an account</a></p>
    </div>
    <div class="register-box">
        Đăng ký
        <form action="{{ URL::to('/register') }}" method="post">
            {{ csrf_field() }}
            @foreach ($errors->all() as $val)
                <ul>
                    <li>{{ $val }}</li>
                </ul>
            @endforeach
            <input type="text" class="ggg" name="username" placeholder="Tên tài khoản">
            <input type="text" class="ggg" name="email" placeholder="Email">
            <input type="password" class="ggg" name="password" placeholder="Mật khẩu">
            <input type="password" class="ggg" name="password_confirmation" placeholder="Mật khẩu xác nhận">
            <div class="clearfix"></div>
            <input type="submit" value="Đăng kí" name="register">
        </form>
        <a href="{{ url('/login-facebook') }}">Đăng kí bằng fb</a> |
        <a href="{{ url('/login-google') }}">Đăng kí Google</a>
        <a href="{{ URL::to('/dang-ky') }}">Đã có tài khoản</a>
    </div>
</div>


<div class="overlay-container" id="dang_nhap">
    <div class="overlay" tabindex="-1" data-url="https://xcheckerviet.biz/login/" role="dialog" aria-hidden="false">
        <div class="overlay-title"><a class="overlay-titleCloser js-overlayClose" role="button" tabindex="0"
                aria-label="Đóng"></a>Đăng nhập</div>
        <div class="overlay-content">
            <div class="blocks">

                <form action="/login/login" method="post" class="block">
                    <input type="hidden" name="_xfToken" value="1721463296,5c6d1faa04e339de8224824205ad7c61">

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
                                    <input type="text" class="input" name="login" autofocus="autofocus"
                                        autocomplete="username" id="_xfUid-1-1721463296">
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

                                            <input type="password" name="password" value=""
                                                class="input js-password input--passwordHideShow"
                                                autocomplete="current-password" id="_xfUid-2-1721463296">


                                            <div class="inputGroup-text">
                                                <label class="iconic iconic--hideShow js-hideShowContainer"><input
                                                        type="checkbox" value="1"><i aria-hidden="true"></i><span
                                                        class="iconic-label">Show</span></label>

                                            </div>
                                        </div>



                                    </div>
                                    <a class="uix_forgotPassWord__link" href="/lost-password/"
                                        data-xf-click="overlay">Bạn đã quên mật khẩu?</a>
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


                            <input type="hidden" name="_xfRedirect" value="https://xcheckerviet.biz/forums/">
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



                <div class="blocks-textJoiner"><span></span><em>or đăng nhập bằng</em><span></span></div>

                <div class="block uix_loginProvider__row">
                    <div class="block-container">
                        <div class="block-body">

                            <dl class="formRow formRow--button">
                                <dt>
                                    <div class="formRow-labelWrapper"></div>
                                </dt>
                                <dd>

                                    <ul class="listHeap">

                                        <li>

                                            <a href="/register/connected-accounts/facebook/?setup=1"
                                                class="button--provider button--provider--facebook button"><span
                                                    class="button-text">

                                                    Facebook
                                                </span></a>

                                        </li>

                                        <li>

                                            <a href="/register/connected-accounts/google/?setup=1"
                                                class="button--provider button--provider--google button"><span
                                                    class="button-text">

                                                    <img class="button-icon" alt=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAmCAYAAABDClKtAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+nhxg7wAAA11JREFUWIXNmL9vUlEYhp/a3sYiUWIiDk1burkYqYHFRSqNkwOVhcREWxMXl9rJgUFNWnWr/QuKGw4EBrsVpJMmNBHjoulQbGJq0DQ0XrVIbR3ugcDt/XGgV+KbEOCec977cPjOd79z4D9UT6cDy+GgHwgBHuCyrrkIfALy3myh+E+hyuGgD5gBIoBPclgFSACL3myh5BhUORz0AAvAlCSImRLArDdbqBwJqhwORoAltL/JCVWAaW+2kDHrcMwGaAlIOwiE8EqXw8GHbUMJoCkHYfQaMWswhCqHg07Ej5US3mxh2qzxUEyJGEq3cYMSWgp4J76PoKUKXydAh6DEKttALoYSaMvcMA+J9PGA1hm3BTKCkomjCjDpzRbydubCM4Q28xkZoBao2oriqxbObPxcGbTqXwTG7fKMAZhPNnHqoRaAe3ubbtTUKAe7vfq+FWCsHfNO1bz6IgB9wyonb3+k9+wvfd/pbgCBmKnaiuIH3uobf7wc5vf706A9WMe7AQTQJ95DRo0nrm2ijKjsvvE+lzG7Mq8a+rShSi7uLtahTFNA//lt+s9vZ3ghZfrqiFBFYKweU/p6qKWjMlFra7UdQX6weSALdQuoIRmorksGysmyRUp1qFWLPv7aitJVsPrqM40b9UDhiXohAq8TEn55iT5+zGc/3wxlaLa+d4r734Ns/XHdQqsKLJWLu20T7JV51aoKqYD4+5SJWhGtLmpouTrE3Z1LbP1xAYQCyWjE7oYSQHa7oNUGlFCjkJ9Tx5j7PoZ6oDQPWAoko1aGdkD1HZGVMnqoxa19Fzcrl1neHTIa4AHSgWS006BfwHqWirm4u9QCpUzUSte3JxLre6esjP3ARiAZDcmSBJJRz/jTz2nsi8fF+oeWylPMQlvl8FosZVgOC697wExvddhz/OsdeqvDZl6lXNw9agglzJzYOPjFq6GefRcD5Tv0/bho5DGei7vzplACbAHtVzqu/p2rHP92o/nSs1zcPdt8wXTbHkhG/9lmtO/XOQa+zNCz78rk4u5Jfbvps28tlppGImF2or2BD/wcfJwBDHc3tgccIsacPOAAeLQWSz00a5Q6ChIryYmtfB6YNVuxbUHVJTJ6J4dmGeD5WiyVlxnQ8fFiIBm1O17cAfKyIP+9/gIvkBKjE2YsSQAAAABJRU5ErkJggg==">

                                                    Google
                                                </span></a>

                                        </li>

                                    </ul>

                                </dd>
                            </dl>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="overlay-container" id="dang_ki">
    <div class="overlay" tabindex="-1" data-url="https://xcheckerviet.biz/register/" role="dialog"
        aria-hidden="false">
        <div class="overlay-title"><a class="overlay-titleCloser js-overlayClose" role="button" tabindex="0"
                aria-label="Đóng"></a>Đăng Ký</div>
        <div class="overlay-content">
            <div class="block">
                <div class="block-container">
                    <div class="block-body">

                        <dl class="formRow formRow--button">
                            <dt>
                                <div class="formRow-labelWrapper">
                                    <label class="formRow-label">Đăng Ký Nhanh</label>
                                </div>
                            </dt>
                            <dd>


                                <ul class="listHeap">

                                    <li>

                                        <a href="/register/connected-accounts/facebook/?setup=1"
                                            class="button--provider button--provider--facebook button"><span
                                                class="button-text">

                                                Facebook
                                            </span></a>

                                    </li>

                                    <li>

                                        <a href="/register/connected-accounts/google/?setup=1"
                                            class="button--provider button--provider--google button"><span
                                                class="button-text">

                                                <img class="button-icon" alt=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAmCAYAAABDClKtAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+nhxg7wAAA11JREFUWIXNmL9vUlEYhp/a3sYiUWIiDk1burkYqYHFRSqNkwOVhcREWxMXl9rJgUFNWnWr/QuKGw4EBrsVpJMmNBHjoulQbGJq0DQ0XrVIbR3ugcDt/XGgV+KbEOCec977cPjOd79z4D9UT6cDy+GgHwgBHuCyrrkIfALy3myh+E+hyuGgD5gBIoBPclgFSACL3myh5BhUORz0AAvAlCSImRLArDdbqBwJqhwORoAltL/JCVWAaW+2kDHrcMwGaAlIOwiE8EqXw8GHbUMJoCkHYfQaMWswhCqHg07Ej5US3mxh2qzxUEyJGEq3cYMSWgp4J76PoKUKXydAh6DEKttALoYSaMvcMA+J9PGA1hm3BTKCkomjCjDpzRbydubCM4Q28xkZoBao2oriqxbObPxcGbTqXwTG7fKMAZhPNnHqoRaAe3ubbtTUKAe7vfq+FWCsHfNO1bz6IgB9wyonb3+k9+wvfd/pbgCBmKnaiuIH3uobf7wc5vf706A9WMe7AQTQJ95DRo0nrm2ijKjsvvE+lzG7Mq8a+rShSi7uLtahTFNA//lt+s9vZ3ghZfrqiFBFYKweU/p6qKWjMlFra7UdQX6weSALdQuoIRmorksGysmyRUp1qFWLPv7aitJVsPrqM40b9UDhiXohAq8TEn55iT5+zGc/3wxlaLa+d4r734Ns/XHdQqsKLJWLu20T7JV51aoKqYD4+5SJWhGtLmpouTrE3Z1LbP1xAYQCyWjE7oYSQHa7oNUGlFCjkJ9Tx5j7PoZ6oDQPWAoko1aGdkD1HZGVMnqoxa19Fzcrl1neHTIa4AHSgWS006BfwHqWirm4u9QCpUzUSte3JxLre6esjP3ARiAZDcmSBJJRz/jTz2nsi8fF+oeWylPMQlvl8FosZVgOC697wExvddhz/OsdeqvDZl6lXNw9agglzJzYOPjFq6GefRcD5Tv0/bho5DGei7vzplACbAHtVzqu/p2rHP92o/nSs1zcPdt8wXTbHkhG/9lmtO/XOQa+zNCz78rk4u5Jfbvps28tlppGImF2or2BD/wcfJwBDHc3tgccIsacPOAAeLQWSz00a5Q6ChIryYmtfB6YNVuxbUHVJTJ6J4dmGeD5WiyVlxnQ8fFiIBm1O17cAfKyIP+9/gIvkBKjE2YsSQAAAABJRU5ErkJggg==">

                                                Google
                                            </span></a>

                                    </li>

                                </ul>

                            </dd>
                        </dl>

                    </div>
                </div>
            </div>



            <form action="/register/register" method="post" class="block" data-xf-init="reg-form ajax-submit"
                data-timer="10">
                <input type="hidden" name="_xfToken" value="1721464748,d4f2649df1e6461d97c7842dad7fee7a">


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
                                <input type="text" class="input" data-xf-init="input-validator"
                                    data-validation-url="/misc/validate-username"
                                    name="f9f20126c922ebffe7c6b3fe02bbb85c3e4e6e24" autocomplete="username"
                                    required="required" autofocus="autofocus" maxlength="15"
                                    id="_xfUid-1-1721464748">
                                <div class="inputValidationError js-validationError"></div>
                                <div class="formRow-explain">Đây là tên hiển thị ở mỗi bài viết của bạn. Bạn có thể
                                    dùng bất cứ tên nào mình muốn. Một khi đã đặt thì không thể đổi.</div>
                            </dd>
                        </dl>




                        <dl class="formRow formRow--limited formRow--input">
                            <dt>
                                <div class="formRow-labelWrapper">
                                    <label class="formRow-label" for="_xfUid-2-1721464748">Tên tài khoản</label>
                                </div>
                            </dt>
                            <dd>
                                <input type="text" class="input" name="username" autocomplete="off"
                                    maxlength="50" id="_xfUid-2-1721464748">
                                <div class="formRow-explain">Please leave this field blank.</div>
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
                                <input type="email" class="input" name="5ebfec2134a60b76f0974e0039194b67acc8acf4"
                                    autocomplete="email" required="required" maxlength="120"
                                    id="_xfUid-3-1721464748">
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

                                        <input type="password" name="261f99ef85ef5f8c8d2f0cec87b4aceabf44303c"
                                            value="" class="input js-password input--passwordHideShow"
                                            autocomplete="new-password" required="required" checkstrength="true"
                                            id="_xfUid-4-1721464748">


                                        <div class="inputGroup-text">
                                            <label class="iconic iconic--hideShow js-hideShowContainer"><input
                                                    type="checkbox" value="1"><i aria-hidden="true"></i><span
                                                    class="iconic-label">Show</span></label>

                                        </div>
                                    </div>



                                    <meter min="0" max="100" class="meterBar js-strengthMeter"
                                        low="40" high="80" optimum="100"></meter>
                                    <span class="js-strengthText meterBarLabel">Entering a password is required.</span>
                      

                                </div>
                            </dd>
                        </dl>



















                        <dl class="formRow" style="display: none;">
                            <dt>
                                <div class="formRow-labelWrapper">
                                    <label class="formRow-label">Mã xác nhận</label>
                                    <dfn class="formRow-hint">
                                        <font color="red">*Bắt buộc</font>
                                    </dfn>
                                </div>
                            </dt>
                            <dd>
                                <div data-xf-init="re-captcha" data-sitekey="6LdTFg8qAAAAAIXeScalbHnvhPs0ntq34zxxJ19G"
                                    data-theme="dark" data-invisible="1"></div>


                            </dd>
                        </dl>
                        <div>
                            <div class="grecaptcha-badge" data-style="bottomright"
                                style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60"
                                        role="presentation" name="a-720g96rndoow" frameborder="0" scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                        src="https://www.recaptcha.net/recaptcha/api2/anchor?ar=1&amp;k=6LdTFg8qAAAAAIXeScalbHnvhPs0ntq34zxxJ19G&amp;co=aHR0cHM6Ly94Y2hlY2tlcnZpZXQuYml6OjQ0Mw..&amp;hl=vi&amp;v=rKbTvxTxwcw5VqzrtN-ICwWt&amp;size=invisible&amp;cb=etkwzinmwi9f"></iframe>
                                </div>
                                <div class="grecaptcha-error"></div>
                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div><iframe style="display: none;"></iframe>
                        </div>










                        <dl class="formRow">
                            <dt>
                                <div class="formRow-labelWrapper"></div>
                            </dt>
                            <dd>
                                <label class="iconic"><input type="checkbox" name="accept" value="1"
                                        required="required"><i aria-hidden="true"></i><span class="iconic-label">I
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

                <input type="hidden" name="reg_key" value="ccnWCU9db9kstEII">
                <input type="hidden" name="2166c6863b54c20cd5aa10dda4ec2a194c446a37" value="Asia/Bangkok"
                    data-xf-init="auto-timezone">


            </form>
        </div>
    </div>
</div>
