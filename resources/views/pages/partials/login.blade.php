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
                {{ csrf_field() }}
                @foreach ($errors->all() as $val)
                    <ul>
                        <li>{{ $val }}</li>
                    </ul>
                @endforeach
                <form action="{{ URL::to('/login') }}" method="post" class="block">
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


            {{ csrf_field() }}
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

                                    {{-- <span class="js-strengthText meterBarLabel">Entering a password is required.</span> --}}


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
