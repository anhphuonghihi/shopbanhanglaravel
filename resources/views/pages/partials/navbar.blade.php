<div class="p-navSticky p-navSticky--primary"
    data-top-offset-breakpoints="
        [
            {
                &quot;breakpoint&quot;: &quot;0&quot;,
                &quot;offset&quot;: &quot;0&quot;
            }
        ]
    "
    data-xf-init="sticky-header">

    <nav class="p-nav">
        <div class="p-nav-inner">

            <button type="button"
                class="button--plain p-nav-menuTrigger js-uix_badge--totalUnread badgeContainer button rippleButton rippleButton"
                data-badge="0" data-xf-click="off-canvas" data-menu=".js-headerOffCanvasMenu" role="button" tabindex="0"
                aria-label="Menu"><span class="button-text">
                    <i aria-hidden="true"></i>
                </span></button>

            <button type="button"
                class="button--plain p-nav-menuTrigger uix_sidebarNav--trigger button rippleButton rippleButton"
                id="uix_sidebarNav--trigger" rel="nofollow" role="button" tabindex="0" aria-label="Menu"><span
                    class="button-text">
                    <i aria-hidden="true"></i>
                </span></button>

            <div class="p-header-logo p-header-logo--image">
                <a class="uix_logo" href="/">

                    <img src="/styles/uix_dark/images/xbiz.png" srcset="/styles/uix_dark/images/xbiz.png 2x"
                        alt="Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam" width=""
                        height="">

                </a>

                <a class="uix_logoSmall" href="/">
                    <img src="/styles/uix_dark/images/xbiz.png"
                        alt="Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam">
                </a>

            </div>
            @include('pages.partials.search')


            <div class="p-nav-opposite">
                <div class="p-nav-opposite">





                    <div class="p-navgroup p-account p-navgroup--member is-menuOpen">



                        <a href="/account/" data-badge="0"
                            class="p-navgroup-link u-ripple p-navgroup-link--iconic p-navgroup-link--user js-uix_badge--totalUnread badgeContainer rippleButton is-menuOpen"
                            data-xf-click="menu" data-xf-key="m" data-menu-pos-ref="< .p-navgroup"
                            title="phuonghole1212" aria-expanded="true" aria-haspopup="true"
                            aria-controls="js-XFUniqueId11">
                            <span class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                data-user-id="516184" style="background-color: #f44336; color: #ff8a80">
                                <span class="avatar-u516184-s" role="img" aria-label="phuonghole1212">P</span>
                            </span>
                            <span class="p-navgroup-linkText">phuonghole1212</span>
                            <div class="ripple-container"></div>
                        </a>

                    </div>





                </div>
                <div class="p-navgroup p-account p-navgroup--guest">

                    <a href="/login/"
                        class="p-navgroup-link u-ripple p-navgroup-link--textual p-navgroup-link--logIn rippleButton rippleButton"
                        data-xf-click="overlay" data-follow-redirects="on">
                        <i></i>
                        <span class="p-navgroup-linkText">Đăng nhập</span>
                    </a>

                    <a href="/register/"
                        class="p-navgroup-link u-ripple p-navgroup-link--textual p-navgroup-link--register rippleButton rippleButton"
                        data-xf-click="overlay" data-follow-redirects="on">
                        <i></i>
                        <span class="p-navgroup-linkText">Đăng Ký</span>
                    </a>
                </div>
                <div class="p-navgroup p-discovery p-discovery--noSearch">
                    <a href="/whats-new/" class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--whatsnew"
                        title="Có gì mới?">
                        <i aria-hidden="true"></i>
                        <span class="p-navgroup-linkText">Có gì mới?</span>
                    </a>

                </div>

                <a aria-label="Toggle sidebar" href="javascript:;"
                    class="uix_sidebarTrigger__component uix_sidebarTrigger p-navgroup-link" data-xf-init="tooltip"
                    rel="nofollow" data-original-title="Sidebar" id="js-XFUniqueId1">
                    <i class="fa--xf far fa-ellipsis-v mdi mdi-dots-vertical" aria-hidden="true"></i>
                    <span class="uix_sidebarTrigger--phrase">Toggle sidebar</span>
                </a>
            </div>

        </div>

    </nav>

</div>
