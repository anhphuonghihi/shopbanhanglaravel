<!DOCTYPE html>
<html lang="vi-VN" dir="LTR" style="font-size: 62.5%;" data-app="public" data-template="forum_list"
    data-container-key="" data-content-key="" data-logged-in="false" data-cookie-prefix="xf_"
    data-csrf="1721271149,72cd611a04159962921f3d5fc7fa14b0"
    class="has-js template-forum_list uix_page--fixed sidebarNav--active uix_hasWelcomeSection uix_hasSectionLinks uix_hasPageAction has-no-touchevents has-passiveeventlisteners has-no-hiddenscroll has-overflowanchor has-os-windows has-browser-chrome has-pointer-nav"
    data-run-jobs="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="keywords" content="{{ $meta_keywords }}" />
    <!--//-------Seo--------->
    <title>{{ $meta_title }}</title>
    <link rel="shortcut icon" href="{{ 'frontend/images/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <meta name="apple-mobile-web-app-title"
        content="Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Danh sách diễn đàn | Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam</title>
    <link rel="manifest" href="/webmanifest.php">
    <meta name="theme-color" content="#2196f3">
    <meta name="msapplication-TileColor" content="#2196F3">
    <meta name="apple-mobile-web-app-title"
        content="Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam">
    <meta name="description" content="{{ $meta_desc }}">
    <meta property="og:description" content="{{ $meta_desc }}">
    <meta property="twitter:description" content="{{ $meta_desc }}">
    <link rel="canonical" href="{{ $url_canonical }}" />
    <link rel="alternate" type="application/rss+xml"
        title="RSS Feed For Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam"
        href="/forums/-/index.rss">
    <meta property="og:site_name" content="Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Danh sách diễn đàn">
    <meta property="twitter:title" content="Danh sách diễn đàn">
    <meta property="og:url" content="{{ $url_canonical }}" />
    <link rel="preload" href="{{ asset('dang_tin/fonts/materialdesignicons-webfont.woff2') }}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dang_tin/user/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dang_tin/user/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('dang_tin/user/css/css.css') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
</head><!--/head-->
<body data-template="forum_list">
    <div id="jumpToTop"></div>
    <div class="uix_pageWrapper--fixed">
        <div class="p-pageWrapper" id="top">
            @include('pages.partials.header')
            
            @include('pages.partials.navbar')
            @include('pages.partials.menu_mobile')
            @include('pages.partials.section_links')
            @include('pages.partials.body_header')
            <div class="p-body">
                @include('pages.partials.sidebar')
                <div class="p-body-inner ">
                    <!--XF:EXTRA_OUTPUT-->
                    <ul class="notices notices--block js-notices" data-xf-init="notices" data-type="block"
                        data-scroll-interval="6">
                        <li class="notice js-notice notice--primary" data-notice-id="5" data-delay-duration="0"
                            data-display-duration="0" data-auto-dismiss="" data-visibility="">
                            <div class="uix_noticeInner">
                                <div class="uix_noticeIcon">
                                    <i class="fa--xf far fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="notice-content">
                                    <img src="{{ asset('dang_tin/images/new.gif') }}">
                                    <font color="red"><b>XCHECKERVIET.BIZ </b></font>là tên miền phụ khi checkerviet
                                    không truy cập được. <br>
                                    <img src="{{ asset('dang_tin/images/new.gif') }}">
                                    <font color="red"><a href="https://t.me/ckvxtestbot">CLICK HERE</a></font> để
                                    truy cập vào kênh telegram của diễn đàn. <br>
                                    <img src="{{ asset('dang_tin/images/new.gif') }}"> CHÚ Ý: Cập nhật mới nhất v/v đăng ký nhà cung cấp tại
                                    checkerviet<a
                                        href="/threads/quyet-dinh-ve-viec-dang-ky-nha-cung-cap-tai-checkerviet-org-nam-2021.71252/">
                                        <font color="red"><b> Xem thêm</b></font>
                                    </a><br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="uix_welcomeSection">
                        <div class="uix_welcomeSection__inner">
                            <div class="media__container">
                                <div class="media__body">
                                    <div class="uix_welcomeSection__text">Cài đặt VPN 1.1.1.1 khi checkerviet bị chặn
                                    </div>
                                    <a href="//1.1.1.1" class="button--cta button rippleButton"><span
                                            class="button-text">Cài đặt ngay</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uix_component="MainContainer" class="uix_contentWrapper">
                        <a href="/threads/v-v-trien-khai-kenh-telegram-cho-checkerviet.125378/"><img
                                src="https://upload69.com/images/2024/04/22/bottele5a3e725ad9a0c41b.jpg"></a>
                        <div class="p-body-main p-body-main--withSidebar ">
                            <div uix_component="MainContent" class="p-body-content">
                                <!-- ABOVE MAIN CONTENT -->
                                <div class="p-body-pageContent">
                                    <div class="uix_nodeList block">
                                        <div class="block block--category block--category1 ">
                                            <span class="u-anchorTarget" id="ban-dieu-hanh.1"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#ban-dieu-hanh.1" class="uix_categoryTitle"
                                                        data-xf-init="" data-shortcut="node-description">BAN ĐIỀU
                                                        HÀNH</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id4 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/thong-bao.4/" data-xf-init=""
                                                                            data-shortcut="node-description">Thông
                                                                            báo</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>58</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1.9K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/phong-tuyen-quan.69/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Phòng
                                                                                    tuyển quân
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gop-y-phat-trien-dien-dan.72/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Góp
                                                                                    ý phát triển diễn đàn
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/phong-nhan-su.90/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Phòng
                                                                                    nhân sự
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/luat-dien-dan.86/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Luật
                                                                                    diễn đàn
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>58</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>1.9K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-125378">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/v-v-trien-khai-kenh-telegram-cho-checkerviet.125378/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.com/images/2024/04/22/bottele5a3e725ad9a0c41b.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/v-v-trien-khai-kenh-telegram-cho-checkerviet.125378/post-3779603"
                                                                                class="node-extra-title"
                                                                                title="v/v triển khai kênh Telegram cho checkerviet"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">THÔNG BÁO</span> v/v
                                                                                triển khai kênh Telegram cho
                                                                                checkerviet</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T09:40:24+0700"
                                                                                        data-time="1721184024"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="09:40"
                                                                                        title="17/7/24 lúc 09:40">Hôm
                                                                                        qua, lúc 09:40</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/aloha2315.514854/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="514854"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId3">Aloha2315</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node below--xl node--id107 node--depth2 th_node--overwriteTextStyling node--category node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon "
                                                                    aria-hidden="true"><i></i></span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/categories/huong-dan-checker.107/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">HƯỚNG DẪN
                                                                            CHECKER</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>20</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2.3K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/huong-dan-su-dung.23/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hướng
                                                                                    dẫn sử dụng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/huong-dan-check-hang.108/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hướng
                                                                                    dẫn check hàng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/huong-dan-tim-nguoi-lam-bai.118/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hướng
                                                                                    dẫn tìm người làm bài
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>20</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2.3K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/linhnam2.512985/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="512985"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #ef5350; color: #ff8a80"
                                                                                id="js-XFUniqueId4">
                                                                                <span class="avatar-u512985-s"
                                                                                    role="img"
                                                                                    aria-label="linhnam2">L</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/cam-nang-so-7-linh-moi-va-cac-loi-thuong-gap-khi-check.3280/post-3781295"
                                                                                class="node-extra-title"
                                                                                title="[CẨM NANG SỐ 7] LÍNH MỚI VÀ CÁC LỖI THƯỜNG GẶP KHI CHECK">[CẨM
                                                                                NANG SỐ 7] LÍNH MỚI VÀ CÁC LỖI THƯỜNG
                                                                                GẶP KHI CHECK</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li class="node-extra-date"><time
                                                                                        class="u-dt" dir="auto"
                                                                                        datetime="2024-07-17T23:57:13+0700"
                                                                                        data-time="1721235433"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="23:57"
                                                                                        title="17/7/24 lúc 23:57">Hôm
                                                                                        qua, lúc 23:57</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/linhnam2.512985/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="512985"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId5">linhnam2</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id116 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/phong-truyen-thong.116/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">PHÒNG
                                                                            TRUYỀN THỐNG</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>202</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>20.1K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/event-2021.294/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2021
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2022.295/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2022
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2023.299/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2023
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2024.300/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2024
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2019.191/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2019
                                                                                </a>
                                                                                <ol>
                                                                                    <li>
                                                                                        <a href="/forums/sinh-nhat-checkerviet-5-tuoi.192/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Sinh
                                                                                            nhật checkerviet 5 tuổi
                                                                                        </a>
                                                                                    </li>
                                                                                </ol>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2020.194/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2020
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2017.153/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2017
                                                                                </a>
                                                                                <ol>
                                                                                    <li>
                                                                                        <a href="/forums/don-le-tinh-nhan-nhan-phong-sieu-vip.155/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Đón
                                                                                            lễ tình nhân, nhận phòng
                                                                                            siêu VIP
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/duoi-hinh-bat-buom-lan-1.156/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Đuổi
                                                                                            hình bắt bướm lần 1
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/duoi-hinh-bat-buom-lan-2.157/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Đuổi
                                                                                            hình bắt bướm lần 2
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/uefa-champions-league-2017.161/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>UEFA
                                                                                            Champions League 2017
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/event-than-lo-thanh-so-2017.162/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Event
                                                                                            thần lô - thánh số 2017
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/sinh-nhat-checkerviet-tron-3-tuoi.163/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Sinh
                                                                                            nhật checkerviet tròn 3 tuổi
                                                                                        </a>
                                                                                        <ol>
                                                                                            <li>
                                                                                                <a href="/forums/event-day-so-bi-an.164/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                                    Dãy số bí ẩn
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/event-hay-chon-gia-buom.165/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                                    Hãy chọn giá bướm
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/event-canh-buom-may-man.166/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                                    Cánh bướm may mắn
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/event-duoi-hinh-bat-buom-lan-3.167/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                                    Đuổi hình bắt bướm
                                                                                                    (lần 3)
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/event-than-lo-thanh-so-lan-2.168/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                                    Thần lô - thánh số
                                                                                                    (lần 2)
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/big-event-check-hang-lien-tay-nhan-ngay-iphonex.169/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>BIG-EVENT:
                                                                                                    Check hàng liền tay,
                                                                                                    nhận ngay IphoneX
                                                                                                </a>
                                                                                            </li>
                                                                                        </ol>
                                                                                    </li>
                                                                                </ol>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2018.183/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2018
                                                                                </a>
                                                                                <ol>
                                                                                    <li>
                                                                                        <a href="/forums/event-check-hang-chim-chuan-quoc-te.185/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Event
                                                                                            Check hàng - Chim chuẩn Quốc
                                                                                            Tế
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/dong-hanh-cung-world-cup-2018.186/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Đồng
                                                                                            hành cùng World Cup 2018
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/event-chuc-mung-sinh-nhat-checkerviet-lan-4.190/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Event
                                                                                            Chúc mừng sinh nhật
                                                                                            checkerviet lần 4
                                                                                        </a>
                                                                                    </li>
                                                                                </ol>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2016.143/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2016
                                                                                </a>
                                                                                <ol>
                                                                                    <li>
                                                                                        <a href="/categories/euro-2016.130/"
                                                                                            class="subNodeLink  subNodeLink--category "><i></i>EURO
                                                                                            2016</a>
                                                                                        <ol>
                                                                                            <li>
                                                                                                <a href="/forums/noi-dung-the-le-va-giai-thuong-event.131/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Nội
                                                                                                    dung, thể lệ và giải
                                                                                                    thưởng EVENT
                                                                                                </a>
                                                                                            </li>
                                                                                        </ol>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/event-mung-sinh-nhat-checkerviet-com-2-tuoi.147/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>Event
                                                                                            Mừng sinh nhật
                                                                                            checkerviet.com 2 tuổi
                                                                                        </a>
                                                                                        <ol>
                                                                                            <li>
                                                                                                <a href="/forums/miss-checkerviet-2016.145/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Miss
                                                                                                    checkerviet 2016
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/big-sale-mung-sinh-nhat.148/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>BIG
                                                                                                    SALE mừng sinh nhật
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/tang-ve-massage-mung-sinh-nhat.149/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Tặng
                                                                                                    vé massage mừng sinh
                                                                                                    nhật
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/forums/checker-lam-phim-sex-mung-sinh-nhat.150/"
                                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                        aria-hidden="true"></i><i></i>Checker
                                                                                                    làm phim Sex mừng
                                                                                                    sinh nhật
                                                                                                </a>
                                                                                            </li>
                                                                                        </ol>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="/forums/don-tet-dinh-dau-vui-ke-chuyen-ga.151/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>ĐÓN
                                                                                            TẾT ĐINH DẬU - VUI KỂ CHUYỆN
                                                                                            GÀ
                                                                                        </a>
                                                                                    </li>
                                                                                </ol>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/event-2015.117/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Event
                                                                                    2015
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>202</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>20.1K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-126995">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/to-chuc-event-checkerviet-dong-hanh-cung-uefa-euro-2024-germany.126995/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/06/11/Remove-bg-ai-1718036382307f22dd6e5439d2439.png"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/to-chuc-event-checkerviet-dong-hanh-cung-uefa-euro-2024-germany.126995/post-3780228"
                                                                                class="node-extra-title"
                                                                                title="Tổ chức Event CHECKERVIET Đồng Hành Cùng UEFA EURO 2024 - GERMANY"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">THÔNG BÁO</span> Tổ
                                                                                chức Event CHECKERVIET Đồng Hành Cùng
                                                                                UEFA EURO 2024 - GERMANY</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T13:22:33+0700"
                                                                                        data-time="1721197353"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="13:22"
                                                                                        title="17/7/24 lúc 13:22">Hôm
                                                                                        qua, lúc 13:22</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/algiers.114916/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="114916"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId6">Algiers</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id154 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/giai-quyet-to-cao-va-khieu-nai.154/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Giải quyết
                                                                            tố cáo và khiếu nại</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>246</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2.3K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/toa-an-toi-cao.36/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Tòa
                                                                                    án tối cao
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>246</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2.3K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-1930">
                                                                            <a href="/members/dem7ngay3.503534/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="503534"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #5e35b1; color: #b388ff"
                                                                                id="js-XFUniqueId7">
                                                                                <span class="avatar-u503534-s"
                                                                                    role="img"
                                                                                    aria-label="Đêm7Ngày3">Đ</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/cach-nhan-dien-va-phong-tranh-banh-my-pr-hang-lom.1930/post-3779465"
                                                                                class="node-extra-title"
                                                                                title="Cách nhận diện và phòng tránh bánh mỳ PR hàng lởm."><span
                                                                                    class="label label--red"
                                                                                    dir="auto">CHÚ Ý</span> Cách
                                                                                nhận diện và phòng tránh bánh mỳ PR hàng
                                                                                lởm.</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T00:40:58+0700"
                                                                                        data-time="1721151658"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="00:40"
                                                                                        title="17/7/24 lúc 00:40">Hôm
                                                                                        qua, lúc 00:40</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/dem7ngay3.503534/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="503534"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId8">Đêm7Ngày3</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id146 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/doi-thoai-cung-nha-cung-cap.146/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Đối thoại
                                                                            cùng nhà cung cấp</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>82</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>300</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>82</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>300</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-45184">
                                                                            <a href="/members/chanh-an.80568/"
                                                                                class="avatar avatar--xs"
                                                                                data-user-id="80568"
                                                                                data-xf-init="member-tooltip"
                                                                                id="js-XFUniqueId9">
                                                                                <img src="/data/avatars/s/80/80568.jpg?1489685856"
                                                                                    srcset="/data/avatars/m/80/80568.jpg?1489685856 2x"
                                                                                    alt="Chánh Án"
                                                                                    class="avatar-u80568-s"
                                                                                    width="48" height="48"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/nha-cung-cap-mogilevich.45184/post-1270587"
                                                                                class="node-extra-title"
                                                                                title="Nhà cung cấp Mogilevich">Nhà
                                                                                cung cấp Mogilevich</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2019-10-01T16:23:04+0700"
                                                                                        data-time="1569921784"
                                                                                        data-date-string="1/10/19"
                                                                                        data-time-string="16:23"
                                                                                        title="1/10/19 lúc 16:23">1/10/19</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/chanh-an.80568/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="80568"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId10">Chánh
                                                                                        Án</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node below--xl node--id45 node--depth2 th_node--overwriteTextStyling node--category node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon "
                                                                    aria-hidden="true"><i></i></span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/categories/khu-bang-hoi.45/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Khu bang
                                                                            hội</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>103</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/clb-checker-thong-thai.46/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>CLB
                                                                                    Checker thông thái
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/phong-kham-bac-si-tam-ly-tinh-duc.84/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Phòng
                                                                                    khám: bác sĩ tâm lý - tình dục
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/clb-lo-de-bong-da.85/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>CLB
                                                                                    Lô đề - Bóng đá
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/categories/clb-some-swing.101/"
                                                                                    class="subNodeLink  subNodeLink--category "><i></i>CLB
                                                                                    Some - Swing</a>
                                                                                <ol>
                                                                                    <li>
                                                                                        <a href="/forums/clb-some-mien-nam.80/"
                                                                                            class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                            <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                                aria-hidden="true"></i><i></i>CLB
                                                                                            Some Miền Nam
                                                                                        </a>
                                                                                    </li>
                                                                                </ol>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/clb-gai-xinh-viet-nam-non-sex.119/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>CLB
                                                                                    Gái xinh Việt Nam (non-sex)
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>103</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/mixx.511740/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="511740"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #ffa726; color: #ffd180"
                                                                                id="js-XFUniqueId11">
                                                                                <span class="avatar-u511740-s"
                                                                                    role="img"
                                                                                    aria-label="Mixx">M</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/than-moi-anh-em-tham-gia-vao-clb-checker-thong-thai-nhe.356/post-3754712"
                                                                                class="node-extra-title"
                                                                                title="Thân mời anh em tham gia vào CLB Checker thông thái nhé">Thân
                                                                                mời anh em tham gia vào CLB Checker
                                                                                thông thái nhé</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li class="node-extra-date"><time
                                                                                        class="u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-02T09:30:21+0700"
                                                                                        data-time="1719887421"
                                                                                        data-date-string="2/7/24"
                                                                                        data-time-string="09:30"
                                                                                        title="2/7/24 lúc 09:30">2/7/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/mixx.511740/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="511740"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId12">Mixx</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category98 ">
                                            <span class="u-anchorTarget" id="tam-su-cung-checkerviet.98"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#tam-su-cung-checkerviet.98"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">TÂM SỰ CÙNG CHECKERVIET</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id252 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/nhat-ky-69.252/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Nhật ký
                                                                            69</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>211</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>3.1K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>211</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>3.1K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-128275">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/check-var-em-phan-tram-anh-ben-vincom-tay-mo.128275/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.com/images/2024/07/17/IMG_20240710_222943c43026ba9fd77e2f.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/check-var-em-phan-tram-anh-ben-vincom-tay-mo.128275/post-3780864"
                                                                                class="node-extra-title"
                                                                                title="Check Var em Phan Trâm Anh bên Vincom tây mỗ">Check
                                                                                Var em Phan Trâm Anh bên Vincom tây
                                                                                mỗ</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T20:23:58+0700"
                                                                                        data-time="1721222638"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="20:23"
                                                                                        title="17/7/24 lúc 20:23">Hôm
                                                                                        qua, lúc 20:23</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/buom-say.248810/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="248810"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId13">Bướm
                                                                                        say</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category114 ">
                                            <span class="u-anchorTarget" id="checker-ha-noi.114"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#checker-ha-noi.114" class="uix_categoryTitle"
                                                        data-xf-init="" data-shortcut="node-description">CHECKER HÀ
                                                        NỘI</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id22 node--depth2 th_node--overwriteTextStyling th_node--hasBackground th_node--hasBackgroundImage node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-ha-noi-cao-cap.22/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Hà Nội Cao Cấp</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>24</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>996</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/gai-goi-tay-ha-noi.280/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Tây Hà Nội
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>24</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>996</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-126945">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/hot-girl-diep-anh-_-dang-yeu-de-thuong-_-lam-tinh-max-phe-luon.126945/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/06/10/73E8D692-02F6-40C2-95FF-EA08AF038EF7fbf37d59072c3909.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/hot-girl-diep-anh-_-dang-yeu-de-thuong-_-lam-tinh-max-phe-luon.126945/post-3781248"
                                                                                class="node-extra-title"
                                                                                title="HOT GIRL DIỆP ANH _ ĐÁNG YÊU DỄ THƯƠNG _ LÀM TÌNH MAX PHÊ LUÔN"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">✪ ĐỘC QUYỀN
                                                                                    ✪</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">2.000K</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--skyBlue"
                                                                                    dir="auto">Xã Đàn</span> HOT
                                                                                GIRL DIỆP ANH _ ĐÁNG YÊU DỄ THƯƠNG _ LÀM
                                                                                TÌNH MAX PHÊ LUÔN</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T23:06:56+0700"
                                                                                        data-time="1721232416"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="23:06"
                                                                                        title="17/7/24 lúc 23:06">Hôm
                                                                                        qua, lúc 23:06</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/hphuonglong.514668/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="514668"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId14">Hphuonglong</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id78 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hang-lom-treo-bim-ha-noi.78/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hàng lởm
                                                                            - Treo bím Hà Nội</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>579</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>34.1K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>579</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>34.1K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-128156">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/lan-chi-xinh-tuoi-cang-mong-nhin-la-muon-mlem-em-lien.128156/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/07/13/4005d929b39ad7274.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/lan-chi-xinh-tuoi-cang-mong-nhin-la-muon-mlem-em-lien.128156/post-3780876"
                                                                                class="node-extra-title"
                                                                                title="LAN CHI - XINH TƯƠI, CĂNG MỌNG, NHÌN LÀ MUỐN MLEM EM LIỀN"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">TREO BÍM</span> LAN
                                                                                CHI - XINH TƯƠI, CĂNG MỌNG, NHÌN LÀ MUỐN
                                                                                MLEM EM LIỀN</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T20:29:38+0700"
                                                                                        data-time="1721222978"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="20:29"
                                                                                        title="17/7/24 lúc 20:29">Hôm
                                                                                        qua, lúc 20:29</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/lan-chi.514067/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="514067"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId15">- Lan Chi
                                                                                        -</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id104 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-ha-noi-kiem-dinh.104/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Hà Nội Kiểm Định</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>73</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2.3K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/cave-nguyen-khanh-toan-kiem-dinh.158/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Cave
                                                                                    Nguyễn Khánh Toàn kiểm định
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/cave-tran-duy-hung-kiem-dinh.159/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Cave
                                                                                    Trần Duy Hưng kiểm định
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/cave-xa-dan-hoang-cau-kiem-dinh.160/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Cave
                                                                                    Xã Đàn - Hoàng Cầu kiểm định
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/cave-kiem-dinh-pho-co-giang-vo-hai-ba-trung.184/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Cave
                                                                                    Kiểm Định Phố Cổ, Giảng Võ, Hai Bà
                                                                                    Trưng
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>73</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2.3K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/ha-linh-girl.503601/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="503601"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #fbc02d; color: #ffff8d"
                                                                                id="js-XFUniqueId16">
                                                                                <span class="avatar-u503601-s"
                                                                                    role="img"
                                                                                    aria-label="Hà Linh Girl">H</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/ha-linh-cia-mat-xinh-lam-tinh-dam-sexy.126322/post-3781293"
                                                                                class="node-extra-title"
                                                                                title="Hà Linh - CIA - Mặt Xinh Làm Tình Dâm - SEXY"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">✪ ĐỘC QUYỀN
                                                                                    ✪</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">500K</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--silver"
                                                                                    dir="auto">TRƯC ĐÊM</span> Hà
                                                                                Linh - CIA - Mặt Xinh Làm Tình Dâm -
                                                                                SEXY</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T23:53:21+0700"
                                                                                        data-time="1721235201"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="23:53"
                                                                                        title="17/7/24 lúc 23:53">Hôm
                                                                                        qua, lúc 23:53</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/ha-linh-girl.503601/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="503601"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId17">Hà Linh
                                                                                        Girl</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id7 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-checker-ha-noi.7/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội
                                                                            checker Hà Nội</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>180</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1.5K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>180</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>1.5K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-108909">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/400k-an-vy-ngot-ngao-diu-dang-va-chieu-chim.108909/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2023/03/01/B66F6349-A6E3-49FE-A480-C3DE0CCAA44615797a83636c4204.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/400k-an-vy-ngot-ngao-diu-dang-va-chieu-chim.108909/post-3769560"
                                                                                class="node-extra-title"
                                                                                title="[400K] An Vy - Ngọt ngào dịu dàng và chiều chim"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">PIC</span> [400K]
                                                                                An Vy - Ngọt ngào dịu dàng và chiều
                                                                                chim</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-11T12:36:23+0700"
                                                                                        data-time="1720676183"
                                                                                        data-date-string="11/7/24"
                                                                                        data-time-string="12:36"
                                                                                        title="11/7/24 lúc 12:36">11/7/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/thichcheker.118436/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="118436"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId18">thichcheker</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id6 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-ha-noi.6/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">GÁI GỌI
                                                                            HÀ NỘI</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>9.5K</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>878K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/gai-goi-xa-dan-kim-lien-hoang-cau.136/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    gọi Xã Đàn - Kim Liên - Hoàng Cầu
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-tran-duy-hung-lang.134/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    gọi Trần Duy Hưng - Láng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-nguyen-khanh-toan-dao-tan.135/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    gọi Nguyễn Khánh Toàn - Đào Tấn
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-cau-giay-hoang-quoc-viet.138/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    gọi Cầu Giấy - Hoàng Quốc Việt
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-pho-co-giang-vo-hai-ba-trung.139/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    gọi Phố Cổ - Giảng Võ - Hai Bà Trưng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-my-dinh-ho-tung-mau.141/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    gọi Mỹ Đình - Hồ Tùng Mậu
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-hoan-kiem.11/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Hoàn Kiếm
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-q-hai-ba-trung.12/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Q. Hai Bà Trưng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-ba-dinh.13/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Ba Đình
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-dong-da.14/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Đống Đa
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-cau-giay.15/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Cầu Giấy
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-thanh-xuan-nga-tu-so-chua-boc.16/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Thanh Xuân - Ngã tư sở - Chùa
                                                                                    Bộc
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-tay-ho.17/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Tây Hồ
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-long-bien.18/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Long Biên
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-hoang-mai.19/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Hoàng Mai
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-ha-dong.20/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Hà Đông
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-tu-liem.21/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Từ Liêm
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-huyen-dong-anh.296/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Huyện Đông Anh
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>9.5K</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>878K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/nguoidungsau.44030/"
                                                                                class="avatar avatar--xs"
                                                                                data-user-id="44030"
                                                                                data-xf-init="member-tooltip"
                                                                                id="js-XFUniqueId19">
                                                                                <img src="/data/avatars/s/44/44030.jpg?1661525711"
                                                                                    srcset="/data/avatars/m/44/44030.jpg?1661525711 2x"
                                                                                    alt="Nguoidungsau"
                                                                                    class="avatar-u44030-s"
                                                                                    width="48" height="48"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/dau-xinh-2k5-_-so-1-ve-ngoan-va-ngon-va-dang-yeu-_-nen-can-anh-em-duoc-bao-ton.128357/post-3781416"
                                                                                class="node-extra-title"
                                                                                title="DÂU XINH 2K5 _ SỐ 1 VỀ NGOAN VÀ NGON VÀ ĐÁNG YÊU _ NÊN CẦN ANH EM ĐƯỢC BẢO TỒN ."><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">300K</span> DÂU
                                                                                XINH 2K5 _ SỐ 1 VỀ NGOAN VÀ NGON VÀ ĐÁNG
                                                                                YÊU _ NÊN CẦN ANH EM ĐƯỢC BẢO TỒN .</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-18T09:20:56+0700"
                                                                                        data-time="1721269256"
                                                                                        data-date-string="18/7/24"
                                                                                        data-time-string="09:20"
                                                                                        title="18/7/24 lúc 09:20">38
                                                                                        phút trước</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/nguoidungsau.44030/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="44030"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId20">Nguoidungsau</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id9 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-ha-noi-gia-re.9/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái gọi
                                                                            Hà Nội giá rẻ</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>4.3K</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>489.1K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>4.3K</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>489.1K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-127419">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/tran-huu-tuoc-minh-chau-hang-tinh-cam-lam-tinh-het-minh-nhiet-tinh-chieu-chuong-moi-tu-the.127419/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/06/24/1I0T5D351_BUM8BJ020ee180046e8a42.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/tran-huu-tuoc-minh-chau-hang-tinh-cam-lam-tinh-het-minh-nhiet-tinh-chieu-chuong-moi-tu-the.127419/post-3781386"
                                                                                class="node-extra-title"
                                                                                title="[ TRẦN HỮU TƯỚC ] MINH CHÂU-HÀNG TÌNH CẢM-LÀM TÌNH HẾT MÌNH-NHIỆT TÌNH CHIỀU CHUỘNG MỌI TƯ THẾ"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">200K</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--lightGreen"
                                                                                    dir="auto">Q. ĐỐNG ĐA</span> [
                                                                                TRẦN HỮU TƯỚC ] MINH CHÂU-HÀNG TÌNH
                                                                                CẢM-LÀM TÌNH HẾT MÌNH-NHIỆT TÌNH CHIỀU
                                                                                CHUỘNG MỌI TƯ THẾ</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-18T08:27:42+0700"
                                                                                        data-time="1721266062"
                                                                                        data-date-string="18/7/24"
                                                                                        data-time-string="08:27"
                                                                                        title="18/7/24 lúc 08:27">Hôm
                                                                                        nay lúc 08:27</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/minh-chau-xinh.510059/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="510059"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId21">Minh Chau
                                                                                        Xinh</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id10 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/nha-nghi-khach-san-ha-noi.10/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Nhà Nghỉ
                                                                            - Khách sạn Hà Nội</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>196</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2.2K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>196</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2.2K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-128228">
                                                                            <a href="/members/leephongluu.38589/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="38589"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #c2185b; color: #ff80ab"
                                                                                id="js-XFUniqueId22">
                                                                                <span class="avatar-u38589-s"
                                                                                    role="img"
                                                                                    aria-label="LeePhongLuu">L</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/masage-ly-spa-diem-den-ly-tuong-cua-cac-quy-ong-so-7-dao-duy-anh-q-dong-da.128228/post-3777262"
                                                                                class="node-extra-title"
                                                                                title="MASAGE LY SPA- ĐIỂM ĐẾN LÝ TƯỞNG CỦA CÁC QUÝ ÔNG- SỐ 7 ĐÀO DUY ANH Q.ĐỐNG ĐA"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">CHÚ Ý</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--lightGreen"
                                                                                    dir="auto">Q. ĐỐNG ĐA</span>
                                                                                MASAGE LY SPA- ĐIỂM ĐẾN LÝ TƯỞNG CỦA CÁC
                                                                                QUÝ ÔNG- SỐ 7 ĐÀO DUY ANH Q.ĐỐNG ĐA</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-15T17:47:14+0700"
                                                                                        data-time="1721040434"
                                                                                        data-date-string="15/7/24"
                                                                                        data-time-string="17:47"
                                                                                        title="15/7/24 lúc 17:47">Thứ
                                                                                        hai lúc 17:47</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/leephongluu.38589/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="38589"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId23">LeePhongLuu</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category115 ">
                                            <span class="u-anchorTarget" id="checker-sai-gon.115"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#checker-sai-gon.115" class="uix_categoryTitle"
                                                        data-xf-init="" data-shortcut="node-description">CHECKER SÀI
                                                        GÒN</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id30 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling th_node--hasBackground th_node--hasBackgroundImage node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-crown "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-sai-gon-cao-cap.30/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Sài Gòn Cao Cấp</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>20</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>218</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>20</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>218</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-125170">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/%E2%9D%A4%EF%B8%8F-new-%E2%9D%A4%EF%B8%8F-kha-ai-%E2%9D%A4%EF%B8%8F-em-be-moi-lon-vua-roi-giang-duong-cap-3%E2%9D%A4%EF%B8%8F.125170/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/04/15/z5348321367522_58c3897cde07d1874878c1aee9e2a2a8d6aaac331c7cf7a9.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/%E2%9D%A4%EF%B8%8F-new-%E2%9D%A4%EF%B8%8F-kha-ai-%E2%9D%A4%EF%B8%8F-em-be-moi-lon-vua-roi-giang-duong-cap-3%E2%9D%A4%EF%B8%8F.125170/post-3769399"
                                                                                class="node-extra-title"
                                                                                title="❤️ NEW ❤️ KHẢ ÁI ❤️ EM BÉ MỚI LỚN , VỪA RỜI GIẢNG ĐƯỜNG CẤP 3❤️"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">3.000K</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--royalBlue"
                                                                                    dir="auto">QUẬN 1 - 3 -
                                                                                    5</span> ❤️ NEW ❤️ KHẢ ÁI ❤️ EM BÉ
                                                                                MỚI LỚN , VỪA RỜI GIẢNG ĐƯỜNG CẤP
                                                                                3❤️</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-11T11:10:10+0700"
                                                                                        data-time="1720671010"
                                                                                        data-date-string="11/7/24"
                                                                                        data-time-string="11:10"
                                                                                        title="11/7/24 lúc 11:10">11/7/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/how-much.88829/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="88829"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId24">How
                                                                                        much</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id79 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hang-lom-treo-bim-sai-gon.79/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hàng lởm
                                                                            - Treo bím Sài Gòn</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>5</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>1</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>5</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-569">
                                                                            <a href="/members/thanh-b.174271/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="174271"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #d32f2f; color: #ff8a80"
                                                                                id="js-XFUniqueId25">
                                                                                <span class="avatar-u174271-s"
                                                                                    role="img"
                                                                                    aria-label="thành b">T</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/quy-trinh-bao-cao-hang-lom-va-de-nghi-treo-bim.569/post-999169"
                                                                                class="node-extra-title"
                                                                                title="Quy trình báo cáo hàng lởm và đề nghị treo bím"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">CHÚ Ý</span> Quy
                                                                                trình báo cáo hàng lởm và đề nghị treo
                                                                                bím</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2019-05-03T19:17:58+0700"
                                                                                        data-time="1556885878"
                                                                                        data-date-string="3/5/19"
                                                                                        data-time-string="19:17"
                                                                                        title="3/5/19 lúc 19:17">3/5/19</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/thanh-b.174271/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="174271"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId26">thành
                                                                                        b</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id105 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-check-circle "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-sai-gon-kiem-dinh.105/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Sài Gòn Kiểm Định</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>20</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>167</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>20</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>167</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-126250">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/ha-my-chuan-loli-than-thien-tinh-cam.126250/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/05/20/1.1855a9353eb4c89b4.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/ha-my-chuan-loli-than-thien-tinh-cam.126250/post-3777626"
                                                                                class="node-extra-title"
                                                                                title="HÀ MY - CHUẨN LOLI - THÂN THIỆN - TÌNH CẢM"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">700K</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--green"
                                                                                    dir="auto">Q.Phú Nhuận - Bình
                                                                                    Thạnh</span> HÀ MY - CHUẨN LOLI -
                                                                                THÂN THIỆN - TÌNH CẢM</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-16T06:43:39+0700"
                                                                                        data-time="1721087019"
                                                                                        data-date-string="16/7/24"
                                                                                        data-time-string="06:43"
                                                                                        title="16/7/24 lúc 06:43">Thứ
                                                                                        ba lúc 06:43</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/helios1106.514735/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="514735"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId27">Helios1106</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id42 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-checker-sai-gon.42/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội
                                                                            checker Sài Gòn</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>218</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>339</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>218</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>339</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-126887">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/quynh-anh-vu-to-body-cang-tran-duyen-dang-dang-yeu-lam-tinh-cuc-chat.126887/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/06/08/IMG_20221214_195903_982_Originalbefd60ad76e14771.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/quynh-anh-vu-to-body-cang-tran-duyen-dang-dang-yeu-lam-tinh-cuc-chat.126887/post-3718584"
                                                                                class="node-extra-title"
                                                                                title="Quỳnh Anh - Vú To Body Căng Tràn - Duyên Dáng Đáng Yêu - Làm Tình Cực Chất"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">800K</span> Quỳnh
                                                                                Anh - Vú To Body Căng Tràn - Duyên Dáng
                                                                                Đáng Yêu - Làm Tình Cực Chất</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-06-08T21:19:49+0700"
                                                                                        data-time="1717856389"
                                                                                        data-date-string="8/6/24"
                                                                                        data-time-string="21:19"
                                                                                        title="8/6/24 lúc 21:19">8/6/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/loi-tu-su.493975/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="493975"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId28">Lời Tự
                                                                                        Sự</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id31 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-sai-gon.31/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">GÁI GỌI
                                                                            SÀI GÒN</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1.7K</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>22.2K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-1.32/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 1
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-8.57/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 8
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-10.59/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 10
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-tan-binh.63/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Tân Bình
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-phu-nhuan.66/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Phú Nhuận
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-go-vap.62/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Gò Vấp
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-6.55/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 6
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-9.58/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 9
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-binh-thanh.65/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Bình Thạnh
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-tan-phu.64/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Tân Phú
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-binh-tan.180/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    gọi Quận Bình Tân
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-thu-duc.67/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận Thủ Đức
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-2.33/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 2
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-3.34/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 3
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-4.35/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 4
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-5.54/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 5
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-7.56/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 7
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-11.60/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 11
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/gai-goi-quan-12.61/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Gái
                                                                                    Gọi Quận 12
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>1.7K</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>22.2K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-106019">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/lucy-chuan-dam-noi-that-xin-ko-lam-ae-that-vong.106019/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2022/12/24/photo_2022-12-24_23-03-23c76bce38112b24b1.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/gai-goi-kim-phuong-3109-em-gai-xinh-tuoi-dam-dang-tinh-cam.128006/post-3781284"
                                                                                class="node-extra-title"
                                                                                title="Gái gọi Kim Phượng 3109-Em gái xinh tươi dâm đãng,tình cảm."><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">600K</span> Gái gọi
                                                                                Kim Phượng 3109-Em gái xinh tươi dâm
                                                                                đãng,tình cảm.</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T23:39:36+0700"
                                                                                        data-time="1721234376"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="23:39"
                                                                                        title="17/7/24 lúc 23:39">Hôm
                                                                                        qua, lúc 23:39</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/haletuan.505510/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="505510"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId29">Haletuan</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id38 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-sai-gon-gia-re.38/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái gọi
                                                                            Sài Gòn giá rẻ</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>354</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1.6K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>354</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>1.6K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-118304">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/350k-bao-trang-mat-xinh-kute-dang-loli-dang-yeu-dam-ngoan-chieu-khach.118304/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.com/images/2023/09/26/z4729780913002_d0ff8f215d8cf2f2622b8361aafd0a38c27d576cbb739702.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/350k-bao-trang-mat-xinh-kute-dang-loli-dang-yeu-dam-ngoan-chieu-khach.118304/post-3781090"
                                                                                class="node-extra-title"
                                                                                title="(350K) Bảo Trang - Mặt xinh kute, dáng loli đáng yêu, dâm ngoan chiều khách."><span
                                                                                    class="label label--lightGreen"
                                                                                    dir="auto">QUẬN 4 - 7 -
                                                                                    8</span> (350K) Bảo Trang - Mặt xinh
                                                                                kute, dáng loli đáng yêu, dâm ngoan
                                                                                chiều khách.</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T21:59:19+0700"
                                                                                        data-time="1721228359"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="21:59"
                                                                                        title="17/7/24 lúc 21:59">Hôm
                                                                                        qua, lúc 21:59</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/odysseus.177099/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="177099"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId30">Odysseus</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id39 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/nha-nghi-khach-san-sai-gon.39/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Nhà nghỉ
                                                                            - Khách sạn Sài Gòn</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>56</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>1</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>56</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-26612">
                                                                            <a href="/members/chase-nguyen.368165/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="368165"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #ec407a; color: #ff80ab"
                                                                                id="js-XFUniqueId31">
                                                                                <span class="avatar-u368165-s"
                                                                                    role="img"
                                                                                    aria-label="Chase Nguyen">C</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/thong-tin-ve-mot-so-khach-san-tai-sai-gon.26612/post-2749598"
                                                                                class="node-extra-title"
                                                                                title="Thông Tin Về Một Số Khách Sạn tại Sài Gòn">Thông
                                                                                Tin Về Một Số Khách Sạn tại Sài Gòn</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2022-07-04T04:32:44+0700"
                                                                                        data-time="1656883964"
                                                                                        data-date-string="4/7/22"
                                                                                        data-time-string="04:32"
                                                                                        title="4/7/22 lúc 04:32">4/7/22</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/chase-nguyen.368165/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="368165"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId32">Chase
                                                                                        Nguyen</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category278 ">
                                            <span class="u-anchorTarget" id="gai-goi-viet-nam.278"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#gai-goi-viet-nam.278"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">GÁI GỌI VIỆT NAM</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id70 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-hai-phong.70/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Hải Phòng</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>678</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>9.6K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>678</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>9.6K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-127915">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/%E2%9D%A4-be-sam-%E2%9D%A4-cang-chua-ve-hang-moi-len-song-cuc-tinh-cam-chieu-khach.127915/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/07/06/1I23GKHA6_ASDC0E6387390c215a332e.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/%E2%9D%A4-be-sam-%E2%9D%A4-cang-chua-ve-hang-moi-len-song-cuc-tinh-cam-chieu-khach.127915/post-3781387"
                                                                                class="node-extra-title"
                                                                                title="❤ BÉ SAM ❤ CẢNG CHÙA VẼ - HÀNG MỚI LÊN SÓNG - CỰC TÌNH CẢM CHIỀU KHÁCH"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">Qua đêm</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--yellow"
                                                                                    dir="auto">Hải An</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">400K</span> ❤ BÉ
                                                                                SAM ❤ CẢNG CHÙA VẼ - HÀNG MỚI LÊN SÓNG -
                                                                                CỰC TÌNH CẢM CHIỀU KHÁCH</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-18T08:27:59+0700"
                                                                                        data-time="1721266079"
                                                                                        data-date-string="18/7/24"
                                                                                        data-time-string="08:27"
                                                                                        title="18/7/24 lúc 08:27">Hôm
                                                                                        nay lúc 08:27</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/phamluongtruong.79700/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="79700"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId33">PhamLuongTruong</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id88 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-da-nang.88/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Đà Nẵng</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>629</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>3.3K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>629</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>3.3K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-127066">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/be-sam-nuru-bo-anh-tu-chup-sieu-chan-that.127066/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/06/12/z5532710781941_6a643aa12f5a62f3970d47cac8a0ef28f8ae1099fc7718f4.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/be-sam-nuru-bo-anh-tu-chup-sieu-chan-that.127066/post-3780102"
                                                                                class="node-extra-title"
                                                                                title="BÉ SAM NURU - BỘ ẢNH TỰ CHỤP SIÊU CHÂN THẬT"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">Qua đêm</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--yellow"
                                                                                    dir="auto">Q.Sơn
                                                                                    Trà</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">500K</span> BÉ SAM
                                                                                NURU - BỘ ẢNH TỰ CHỤP SIÊU CHÂN THẬT</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T12:34:29+0700"
                                                                                        data-time="1721194469"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="12:34"
                                                                                        title="17/7/24 lúc 12:34">Hôm
                                                                                        qua, lúc 12:34</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/hongsonle.505312/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="505312"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId34">Hongsonle</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id193 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-nha-trang-khanh-hoa.193/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Nha Trang - Khánh Hoà</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>29</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>157</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>29</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>157</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-124969">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/tuyet-nhi-cuc-pham-gai-xinh-me-man-long-nguoi-sevice-dinh-cao-chieu-khach-het-nac.124969/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2024/04/07/631967bee0e63968a99e71802f531ab2b45407666afd92de.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/tuyet-nhi-cuc-pham-gai-xinh-me-man-long-nguoi-sevice-dinh-cao-chieu-khach-het-nac.124969/post-3658123"
                                                                                class="node-extra-title"
                                                                                title="TUYẾT NHI  CỰC PHẨM GÁI XINH - MÊ MẪN LÒNG NGƯỜI- SEVICE ĐỈNH CAO - CHIỀU KHÁCH HẾT NẤC"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">500K</span> TUYẾT
                                                                                NHI CỰC PHẨM GÁI XINH - MÊ MẪN LÒNG
                                                                                NGƯỜI- SEVICE ĐỈNH CAO - CHIỀU KHÁCH HẾT
                                                                                NẤC</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-05-03T08:25:53+0700"
                                                                                        data-time="1714699553"
                                                                                        data-date-string="3/5/24"
                                                                                        data-time-string="08:25"
                                                                                        title="3/5/24 lúc 08:25">3/5/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/lamhungx89.126482/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="126482"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId35">lamhungx89</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id125 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-binh-duong.125/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Bình Dương</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>35</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>630</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>35</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>630</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-112651">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/yen-nhi-be-lolita-nhe-nhang-tinh-cam-lan-dau-lam-web.112651/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.cam/images/2023/05/16/IMG_23968a66dd15d4642bd4.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/yen-nhi-be-lolita-nhe-nhang-tinh-cam-lan-dau-lam-web.112651/post-3241558"
                                                                                class="node-extra-title"
                                                                                title="YẾN NHI - BÉ LOLITA NHẸ NHÀNG TÌNH CẢM - LẦN ĐẦU LÀM WEB"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">400K</span> YẾN NHI
                                                                                - BÉ LOLITA NHẸ NHÀNG TÌNH CẢM - LẦN ĐẦU
                                                                                LÀM WEB</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2023-07-21T07:06:08+0700"
                                                                                        data-time="1689897968"
                                                                                        data-date-string="21/7/23"
                                                                                        data-time-string="07:06"
                                                                                        title="21/7/23 lúc 07:06">21/7/23</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/vuahung789.392796/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="392796"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId36">Vuahung789</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id246 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/gai-goi-ba-ria-vung-tau.246/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Gái Gọi
                                                                            Bà Rịa - Vũng Tàu</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>12</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>74</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>12</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>74</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-70120">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/tan-thanh-ba-ria-tu-vy-da-sang-dang-cao-buom-dep-hong-hao-dat-dao-cam-xuc.70120/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.com/images/2021/08/05/0c870c12cc322a6c73230c373f40a1bd941e.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/tan-thanh-ba-ria-tu-vy-da-sang-dang-cao-buom-dep-hong-hao-dat-dao-cam-xuc.70120/post-3331381"
                                                                                class="node-extra-title"
                                                                                title="(TÂN THÀNH - BÀ RỊA) Tú Vy- Da Sáng Dáng Cao - Bướm Đẹp Hồng Hào - Dạt Dào Cảm Xúc"><span
                                                                                    class="label label--silver"
                                                                                    dir="auto">TRƯC ĐÊM</span>
                                                                                (TÂN THÀNH - BÀ RỊA) Tú Vy- Da Sáng Dáng
                                                                                Cao - Bướm Đẹp Hồng Hào - Dạt Dào Cảm
                                                                                Xúc</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2023-09-23T06:54:46+0700"
                                                                                        data-time="1695426886"
                                                                                        data-date-string="23/9/23"
                                                                                        data-time-string="06:54"
                                                                                        title="23/9/23 lúc 06:54">23/9/23</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/fa18hornet.239148/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="239148"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId37">FA18Hornet</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category5 ">
                                            <span class="u-anchorTarget" id="tong-hoi-checker-viet-nam.5"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#tong-hoi-checker-viet-nam.5"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">TỔNG HỘI CHECKER VIỆT NAM</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id97 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-checker-mien-bac.97/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">HỘI
                                                                            CHECKER MIỀN BẮC</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>5.5K</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>34.5K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-cao-bang.197/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Cao Bằng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-lang-son.198/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Lạng Sơn
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-quang-ninh.199/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Quảng Ninh
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-thai-binh.200/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Thái Bình
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-nam-dinh.201/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Nam Định
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-phu-tho.202/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Phú Thọ
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-thai-nguyen.106/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Thái Nguyên
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-tuyen-quang.204/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Tuyên Quang
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-ha-giang.205/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Hà Giang
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-lao-cai.206/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Lào Cai
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-son-la.208/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Sơn La
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-dien-bien.209/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Điện Biên
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-hoa-binh.210/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Hoà Bình
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-hai-duong.211/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Hải Dương
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-ninh-binh.212/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Ninh Bình
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-vinh-phuc.213/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Vĩnh Phúc
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-hung-yen.214/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Hưng Yên
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-ha-nam.215/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Hà Nam
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-bac-giang.217/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Bắc Giang
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-bac-ninh.218/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Bắc Ninh
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>5.5K</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>34.5K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-123012">
                                                                            <a href="/members/quanghaixxx.514583/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="514583"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #d4e157; color: #f4ff81"
                                                                                id="js-XFUniqueId38">
                                                                                <span class="avatar-u514583-s"
                                                                                    role="img"
                                                                                    aria-label="quanghaixxx">Q</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/be-vy-tp-thai-nguyen.128321/post-3781376"
                                                                                class="node-extra-title"
                                                                                title="Bé Vy - TP Thái Nguyên"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">500K</span> Bé Vy -
                                                                                TP Thái Nguyên</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-18T08:04:19+0700"
                                                                                        data-time="1721264659"
                                                                                        data-date-string="18/7/24"
                                                                                        data-time-string="08:04"
                                                                                        title="18/7/24 lúc 08:04">Hôm
                                                                                        nay lúc 08:04</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/quanghaixxx.514583/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="514583"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId39">quanghaixxx</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id195 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-checker-mien-trung-tay-nguyen.195/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">HỘI
                                                                            CHECKER MIỀN TRUNG - TÂY NGUYÊN</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>4.1K</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>24.4K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-thanh-hoa.219/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Thanh Hoá
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-nghe-an.220/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Nghệ An
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-ha-tinh.221/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Hà Tĩnh
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-dak-lak.222/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Đắk Lắk
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-dak-nong.223/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Đắk Nông
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-lam-dong.224/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Lâm Đồng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-quang-binh.225/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Quảng Bình
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-quang-tri.226/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Quảng Trị
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-hue.227/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Huế
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-quang-ngai.228/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    Checker Quảng Ngãi
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-binh-dinh.229/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Bình Định
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-phu-yen.230/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Phú Yên
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-gia-lai.233/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Gia Lai
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-kon-tum.234/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Kon Tum
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-ninh-thuan.231/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Ninh Thuận
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-binh-thuan.232/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Bình Thuận
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-quang-nam.235/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Quảng Nam
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>4.1K</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>24.4K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-128233">
                                                                            <a href="/members/checkre-na.442648/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="442648"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #ffeb3b; color: #f9a825"
                                                                                id="js-XFUniqueId40">
                                                                                <span class="avatar-u442648-s"
                                                                                    role="img"
                                                                                    aria-label="Checkre NA">C</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/tra-bai-mbtm-thu-thu.128196/post-3781389"
                                                                                class="node-extra-title"
                                                                                title="Trả bài MBTM Thu Thu">Trả bài
                                                                                MBTM Thu Thu</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-18T08:31:19+0700"
                                                                                        data-time="1721266279"
                                                                                        data-date-string="18/7/24"
                                                                                        data-time-string="08:31"
                                                                                        title="18/7/24 lúc 08:31">Hôm
                                                                                        nay lúc 08:31</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/checkre-na.442648/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="442648"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId41">Checkre
                                                                                        NA</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id196 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-checker-mien-nam-tay-nam-bo.196/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">HỘI
                                                                            CHECKER MIỀN NAM - TÂY NAM BỘ</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>551</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>12.9K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-dong-nai.181/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Đồng Nai
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-long-an.236/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Long An
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-tien-giang.237/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Tiền Giang
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-vinh-long.238/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Vĩnh Long
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-can-tho.239/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Cần Thơ
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-dong-thap.240/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Đồng Tháp
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-an-giang.241/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker An Giang
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-kien-giang-phu-quoc.242/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Kiên Giang - Phú Quốc
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-ca-mau.243/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Cà Mau
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-tay-ninh.244/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Tây Ninh
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-ben-tre.245/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Bến Tre
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-soc-trang.247/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Sóc Trăng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-tra-vinh.248/"
                                                                                    class="subNodeLink  subNodeLink--forum subNodeLink--unread"><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Trà Vinh
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-binh-phuoc.249/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Bình Phước
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-bac-lieu.250/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Bạc Liêu
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-checker-hau-giang.251/"
                                                                                    class="subNodeLink  subNodeLink--forum "><i></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink -icon"
                                                                                        aria-hidden="true"></i><i></i>Hội
                                                                                    checker Hậu Giang
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>551</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>12.9K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-127804">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/gai-goi-phu-quoc-uy-tin.127804/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.com/images/2024/07/03/Screenshot_20240623-225913_Chrome3cee6b4d442615b9.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/gai-goi-phu-quoc-0868117373.128326/post-3780926"
                                                                                class="node-extra-title"
                                                                                title="GÁI GỌI PHÚ QUỐC 0868117373">GÁI
                                                                                GỌI PHÚ QUỐC 0868117373</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T21:03:09+0700"
                                                                                        data-time="1721224989"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="21:03"
                                                                                        title="17/7/24 lúc 21:03">Hôm
                                                                                        qua, lúc 21:03</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/weibo-05.515100/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="515100"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId42">Weibo
                                                                                        05</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category259 ">
                                            <span class="u-anchorTarget"
                                                id="tong-hoi-bar-massage-karaoke.259"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#tong-hoi-bar-massage-karaoke.259"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">TỔNG HỘI BAR - MASSAGE -
                                                        KARAOKE</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id261 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-music-box "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/bar-massage-karaoke-mien-bac.261/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Bar -
                                                                            Massage - Karaoke Miền Bắc</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>142</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2.3K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/bmk-ha-noi.144/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum subNodeLink--unread"><i><span
                                                                                            class="mdi mdi-music-box subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-music-box subNodeLink"></span></i>BMK
                                                                                    Hà Nội
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/bmk-hai-phong.275/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum subNodeLink--unread"><i><span
                                                                                            class="mdi mdi-music-box subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-music-box subNodeLink"></span></i>BMK
                                                                                    Hải Phòng
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>142</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2.3K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/leephongluu.38589/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="38589"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #c2185b; color: #ff80ab"
                                                                                id="js-XFUniqueId43">
                                                                                <span class="avatar-u38589-s"
                                                                                    role="img"
                                                                                    aria-label="LeePhongLuu">L</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/lyspa-dia-diem-masage-ly-tuong-cua-dan-ong-so-7-dao-duy-anh-q-dong-da.128227/post-3777257"
                                                                                class="node-extra-title"
                                                                                title="LYSPA - ĐỊA ĐIỂM MASAGE LÝ TƯỞNG CỦA ĐÀN ÔNG- SỐ 7 ĐÀO DUY ANH- Q ĐỐNG ĐA"><span
                                                                                    class="label label--red"
                                                                                    dir="auto">CHÚ Ý</span><span
                                                                                    class="label-append">&nbsp;</span><span
                                                                                    class="label label--lightGreen"
                                                                                    dir="auto">Q. ĐỐNG ĐA</span>
                                                                                LYSPA - ĐỊA ĐIỂM MASAGE LÝ TƯỞNG CỦA ĐÀN
                                                                                ÔNG- SỐ 7 ĐÀO DUY ANH- Q ĐỐNG ĐA</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-15T20:15:28+0700"
                                                                                        data-time="1721049328"
                                                                                        data-date-string="15/7/24"
                                                                                        data-time-string="20:15"
                                                                                        title="15/7/24 lúc 20:15">Thứ
                                                                                        hai lúc 20:15</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/leephongluu.38589/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="38589"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId44">LeePhongLuu</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id262 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-music-box "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/bar-massage-karaoke-mien-trung-tay-nguyen.262/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Bar-Massage-Karaoke
                                                                            Miền Trung Tây Nguyên</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>1</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-54331">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/noi-ae-vao-gop-y-ban-luan-trao-doi-chia-se-kinh-nghiem.54331/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://s14.postimg.cc/n5h5k6jjl/chiasegopy.png"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/noi-ae-vao-gop-y-ban-luan-trao-doi-chia-se-kinh-nghiem.54331/post-1903636"
                                                                                class="node-extra-title"
                                                                                title="Nơi AE Vào Góp Ý - Bàn Luận - Trao Đổi Chia Sẻ Kinh Nghiệm">Nơi
                                                                                AE Vào Góp Ý - Bàn Luận - Trao Đổi Chia
                                                                                Sẻ Kinh Nghiệm</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2020-11-27T06:28:29+0700"
                                                                                        data-time="1606433309"
                                                                                        data-date-string="27/11/20"
                                                                                        data-time-string="06:28"
                                                                                        title="27/11/20 lúc 06:28">27/11/20</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/checkervn33.238630/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="238630"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId45">checkervn33</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id263 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-music-box "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/bar-massage-karaoke-mien-nam-tay-nam-bo.263/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Bar -
                                                                            Massage - Karaoke Miền Nam - Tây Nam Bộ</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>56</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>118</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/bmk-sai-gon.152/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-music-box subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-music-box subNodeLink"></span></i>BMK
                                                                                    Sài Gòn
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>56</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>118</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/longtran8899.357231/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="357231"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #6a1b9a; color: #ea80fc"
                                                                                id="js-XFUniqueId46">
                                                                                <span class="avatar-u357231-s"
                                                                                    role="img"
                                                                                    aria-label="Longtran8899">L</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/quan-tan-phu-massage-tan-ha.34904/post-2889352"
                                                                                class="node-extra-title"
                                                                                title="Quận Tân Phú - Massage Tân Hà">Quận
                                                                                Tân Phú - Massage Tân Hà</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2022-10-21T16:43:59+0700"
                                                                                        data-time="1666345439"
                                                                                        data-date-string="21/10/22"
                                                                                        data-time-string="16:43"
                                                                                        title="21/10/22 lúc 16:43">21/10/22</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/longtran8899.357231/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="357231"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId47">Longtran8899</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category264 ">
                                            <span class="u-anchorTarget" id="tong-hoi-phi-cong.264"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#tong-hoi-phi-cong.264"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">TỔNG HỘI PHI CÔNG</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id265 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-plane-shield "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoc-vien-phi-cong.265/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Học Viện
                                                                            Phi Công</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>40</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>40</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>1K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-120171">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/may-bay-duoc-si.120171/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.com/images/2023/11/20/619c1e2299523c378.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/may-bay-duoc-si.120171/post-3779918"
                                                                                class="node-extra-title"
                                                                                title="Máy bay Dược sĩ =))))">Máy bay
                                                                                Dược sĩ =))))</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-17T11:39:33+0700"
                                                                                        data-time="1721191173"
                                                                                        data-date-string="17/7/24"
                                                                                        data-time-string="11:39"
                                                                                        title="17/7/24 lúc 11:39">Hôm
                                                                                        qua, lúc 11:39</time></li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/titititi08.515021/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="515021"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId48">Titititi08</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id266 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-airplane-off "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-phi-cong-mien-bac.266/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội Phi
                                                                            Công Miền Bắc</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/khong-phan-ha-noi.269/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>Không
                                                                                    Phận Hà Nội
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/khong-phan-hai-phong.272/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>Không
                                                                                    Phận Hải Phòng
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <span class="node-extra-placeholder">Không
                                                                        có</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id267 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-airplane-off "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-phi-cong-mien-trung-tay-nguyen.267/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội Phi
                                                                            Công Miền Trung - Tây Nguyên</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/khong-phan-da-nang.270/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>Không
                                                                                    Phận Đà Nẵng
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/khong-phan-nha-trang-khanh-hoa.273/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>Không
                                                                                    Phận Nha Trang - Khánh Hoà
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <span class="node-extra-placeholder">Không
                                                                        có</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id268 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-airplane-off "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-phi-cong-mien-nam-tay-nam-bo.268/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội Phi
                                                                            Công Miền Nam - Tây Nam Bộ</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/khong-phan-sai-gon.271/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>Không
                                                                                    Phận Sài Gòn
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/khong-phan-binh-duong.274/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-airplane-off subNodeLink"></span></i>Không
                                                                                    Phận Bình Dương
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <span class="node-extra-placeholder">Không
                                                                        có</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category254 ">
                                            <span class="u-anchorTarget" id="tong-hoi-nong-dan.254"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#tong-hoi-nong-dan.254"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">TỔNG HỘI NÔNG DÂN</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id260 node--depth2 th_node--overwriteTextStyling node--forum node--unread">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/ban-cua-nha-nong.260/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Bạn Của
                                                                            Nhà Nông</a>
                                                                        <span class="uix_newIndicator">Mới</span>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>104</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>2.4K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>104</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>2.4K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-56468">
                                                                            <div>
                                                                                <div>
                                                                                    <a class="avatar avatar--xs"
                                                                                        href="/threads/review-ky-su-chan-rau-play-some-mai-2001-thanh-xuan-threesome-em-gai-2k1-buom-non-to-xanh-muot.56468/"><span
                                                                                            class="heightHelper"></span><img
                                                                                            class="alignThumbnail"
                                                                                            src="https://upload69.pro/images/2020/05/19/10d92f41edc7b66ae.jpg"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/review-ky-su-chan-rau-play-some-mai-2001-thanh-xuan-threesome-em-gai-2k1-buom-non-to-xanh-muot.56468/post-3761040"
                                                                                class="node-extra-title"
                                                                                title="[ReView - Ký sự Chăn Rau - Play Some] - Mai 2001 - Thanh xuân - Threesome em gái 2k1 bướm non tơ xanh mướt"><span
                                                                                    class="label label--orange"
                                                                                    dir="auto">PIC</span> [ReView
                                                                                - Ký sự Chăn Rau - Play Some] - Mai 2001
                                                                                - Thanh xuân - Threesome em gái 2k1 bướm
                                                                                non tơ xanh mướt</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-07-05T21:59:42+0700"
                                                                                        data-time="1720191582"
                                                                                        data-date-string="5/7/24"
                                                                                        data-time-string="21:59"
                                                                                        title="5/7/24 lúc 21:59">5/7/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/anh-no-bu.213260/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="213260"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId49">Anh Nô
                                                                                        bự</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id255 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-barley "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-nong-dan-mien-bac.255/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội Nông
                                                                            Dân Miền Bắc</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>6</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/hoi-nong-dan-ha-noi.8/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>Hội
                                                                                    nông dân Hà Nội
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/hoi-nong-dan-hai-phong.258/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>Hội
                                                                                    nông dân Hải Phòng
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>1</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>6</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-54330">
                                                                            <a href="/members/dnxtn3005.256286/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="256286"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #ef6c00; color: #ffd180"
                                                                                id="js-XFUniqueId50">
                                                                                <span class="avatar-u256286-s"
                                                                                    role="img"
                                                                                    aria-label="Dnxtn3005">D</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/giao-trinh-chan-rau-dai-cuong-lam-nong-dan-khong-kho.54330/post-2565939"
                                                                                class="node-extra-title"
                                                                                title="Giáo Trình Chăn Rau Đại Cương - Làm Nông Dân Không Khó">Giáo
                                                                                Trình Chăn Rau Đại Cương - Làm Nông Dân
                                                                                Không Khó</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2022-03-01T16:31:11+0700"
                                                                                        data-time="1646127071"
                                                                                        data-date-string="1/3/22"
                                                                                        data-time-string="16:31"
                                                                                        title="1/3/22 lúc 16:31">1/3/22</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/dnxtn3005.256286/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="256286"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId51">Dnxtn3005</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id256 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-barley "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-nong-dan-mien-trung-tay-nguyen.256/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội Nông
                                                                            Dân Miền Trung - Tây Nguyên</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/hoi-nong-dan-da-nang.279/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>Hội
                                                                                    Nông Dân Đà Nẵng
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>1</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>1</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-54329">
                                                                            <a href="/members/hello-kitty.25/"
                                                                                class="avatar avatar--xs"
                                                                                data-user-id="25"
                                                                                data-xf-init="member-tooltip"
                                                                                id="js-XFUniqueId52">
                                                                                <img src="/data/avatars/s/0/25.jpg?1433504628"
                                                                                    srcset="/data/avatars/m/0/25.jpg?1433504628 2x"
                                                                                    alt="Hello Kitty"
                                                                                    class="avatar-u25-s"
                                                                                    width="48" height="48"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/giao-trinh-chan-rau-dai-cuong-lam-nong-dan-khong-kho.54329/post-1596082"
                                                                                class="node-extra-title"
                                                                                title="Giáo Trình Chăn Rau Đại Cương - Làm Nông Dân Không Khó">Giáo
                                                                                Trình Chăn Rau Đại Cương - Làm Nông Dân
                                                                                Không Khó</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2014-10-09T11:18:20+0700"
                                                                                        data-time="1412828300"
                                                                                        data-date-string="9/10/14"
                                                                                        data-time-string="11:18"
                                                                                        title="9/10/14 lúc 11:18">9/10/14</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/hello-kitty.25/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="25"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId53">Hello
                                                                                        Kitty</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id257 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-barley "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hoi-nong-dan-mien-nam-tay-nam-bo.257/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hội Nông
                                                                            Dân Miền Nam - Tây Nam Bộ</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>1</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>3</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/hoi-nong-dan-sai-gon.37/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-barley subNodeLink"></span></i>Hội
                                                                                    Nông dân Sài Gòn
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>1</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>3</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/terry_duong.373039/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="373039"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #7cb342; color: #ccff90"
                                                                                id="js-XFUniqueId54">
                                                                                <span class="avatar-u373039-s"
                                                                                    role="img"
                                                                                    aria-label="terry_dương">T</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/giao-trinh-chan-rau-dai-cuong-lam-nong-dan-khong-kho.27746/post-3260087"
                                                                                class="node-extra-title"
                                                                                title="Giáo Trình Chăn Rau Đại Cương - Làm Nông Dân Không Khó">Giáo
                                                                                Trình Chăn Rau Đại Cương - Làm Nông Dân
                                                                                Không Khó</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2023-08-03T13:48:41+0700"
                                                                                        data-time="1691045321"
                                                                                        data-date-string="3/8/23"
                                                                                        data-time-string="13:48"
                                                                                        title="3/8/23 lúc 13:48">3/8/23</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/terry_duong.373039/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="373039"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId55">terry_dương</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category50 ">
                                            <span class="u-anchorTarget" id="trung-tam-giai-tri.50"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#trung-tam-giai-tri.50"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">TRUNG TÂM GIẢI TRÍ</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id52 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-image-filter "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/hinh-anh-sex-chat-luong-cao.52/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Hình ảnh
                                                                            sex chất lượng cao</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>3.3K</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>11.8K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/anh-gifs.276/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>Ảnh
                                                                                    GIFs
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/tap-chi-checkerviet-com.132/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>Tạp
                                                                                    chí CHECKERVIET.COM
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/anh-viet-nam.73/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>Ảnh
                                                                                    Việt Nam
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/anh-a-au-suu-tam.74/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>Ảnh
                                                                                    Á - Âu sưu tầm
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/anh-nude-nghe-thuat.75/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>Ảnh
                                                                                    nude nghệ thuật
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="/forums/anh-sex-nguoi-noi-tieng.120/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-image-filter subNodeLink"></span></i>Ảnh
                                                                                    SEX người nổi tiếng
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>3.3K</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>11.8K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-0">
                                                                            <a href="/members/twananh8x.30201/"
                                                                                class="avatar avatar--xs"
                                                                                data-user-id="30201"
                                                                                data-xf-init="member-tooltip"
                                                                                id="js-XFUniqueId56">
                                                                                <img src="/data/avatars/s/30/30201.jpg?1618278321"
                                                                                    srcset="/data/avatars/m/30/30201.jpg?1618278321 2x"
                                                                                    alt="Twananh8x"
                                                                                    class="avatar-u30201-s"
                                                                                    width="48" height="48"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/han-mau-anh-mup-mip-mum-mim-cho-cac-bac-thich-chuby.119330/post-3667615"
                                                                                class="node-extra-title"
                                                                                title="Hân mẫu ảnh múp míp mũm mĩm cho các bác thích chuby">Hân
                                                                                mẫu ảnh múp míp mũm mĩm cho các bác
                                                                                thích chuby</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-05-09T06:48:53+0700"
                                                                                        data-time="1715212133"
                                                                                        data-date-string="9/5/24"
                                                                                        data-time-string="06:48"
                                                                                        title="9/5/24 lúc 06:48">9/5/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/twananh8x.30201/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="30201"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId57">Twananh8x</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id53 node--depth2 th_node--hasCustomIcon th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon th_node--hasCustomIcon"
                                                                    aria-hidden="true"><i><span
                                                                            class="mdi mdi-book-open-variant "></span></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/doc-truyen-sex-suu-tam.53/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Đọc
                                                                            truyện sex sưu tầm</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>960</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>13.5K</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                    <div class="node-subNodesFlat">
                                                                        <span class="node-subNodesLabel">Diễn đàn
                                                                            con:</span>
                                                                        <ol class="node-subNodeFlatList">
                                                                            <li>
                                                                                <a href="/forums/truyen-tranh-sex-manga-sex-hentai-sex.113/"
                                                                                    class="subNodeLink th_node--hasCustomIcon subNodeLink--forum "><i><span
                                                                                            class="mdi mdi-book-open-variant subNodeLink"></span></i>
                                                                                    <i class="fa--xf far fa-comments subNodeLink th_node--hasCustomIcon-icon"
                                                                                        aria-hidden="true"></i><i><span
                                                                                            class="mdi mdi-book-open-variant subNodeLink"></span></i>Truyện
                                                                                    tranh SEX | Manga Sex | Hentai Sex
                                                                                </a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>960</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>13.5K</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <div class="node-extra-icon">
                                                                        <div class="threadThumbnailWrapper"
                                                                            id="thread-thumbnail-51551">
                                                                            <a href="/members/longcin123.506620/"
                                                                                class="avatar avatar--xs avatar--default avatar--default--dynamic"
                                                                                data-user-id="506620"
                                                                                data-xf-init="member-tooltip"
                                                                                style="background-color: #03a9f4; color: #80d8ff"
                                                                                id="js-XFUniqueId58">
                                                                                <span class="avatar-u506620-s"
                                                                                    role="img"
                                                                                    aria-label="Longcin123">L</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uix_nodeExtra__rows">
                                                                        <div class="node-extra-row">
                                                                            <a href="/threads/chi-dau-ho-tuong-xa-ma-lai-qua-gan.51551/post-3716541"
                                                                                class="node-extra-title"
                                                                                title="Chị dâu họ - Tưởng xa mà lại quá gần">Chị
                                                                                dâu họ - Tưởng xa mà lại quá gần</a>
                                                                        </div>
                                                                        <div class="node-extra-row">
                                                                            <ul class="listInline listInline--bullet">
                                                                                <li><time class="node-extra-date u-dt"
                                                                                        dir="auto"
                                                                                        datetime="2024-06-07T18:08:00+0700"
                                                                                        data-time="1717758480"
                                                                                        data-date-string="7/6/24"
                                                                                        data-time-string="18:08"
                                                                                        title="7/6/24 lúc 18:08">7/6/24</time>
                                                                                </li>
                                                                                <li class="node-extra-user"><a
                                                                                        href="/members/longcin123.506620/"
                                                                                        class="username "
                                                                                        dir="auto"
                                                                                        data-user-id="506620"
                                                                                        data-xf-init="member-tooltip"
                                                                                        id="js-XFUniqueId59">Longcin123</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block--category block--category47 ">
                                            <span class="u-anchorTarget" id="quang-cao-rao-vat.47"></span>
                                            <h2 class="block-header js-nodeMain">
                                                <div class="uix_categoryStrip-content">
                                                    <a href="/forums/#quang-cao-rao-vat.47"
                                                        class="uix_categoryTitle" data-xf-init=""
                                                        data-shortcut="node-description">Quảng cáo - rao vặt</a>
                                                </div>
                                                <a href="javascript:;"
                                                    class="u-ripple categoryCollapse--trigger rippleButton"
                                                    rel="nofollow"><i class="fa--xf far fa-chevron-up"
                                                        aria-hidden="true"></i></a>
                                            </h2>
                                            <div class="block-container th_node--overwriteTextStyling">
                                                <div class="uix_block-body--outer">
                                                    <div class="block-body">
                                                        <div
                                                            class="node node--id48 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/quang-cao-rao-vat.48/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Quảng cáo
                                                                            - rao vặt</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <span class="node-extra-placeholder">Không
                                                                        có</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="node node--id49 node--depth2 th_node--overwriteTextStyling node--forum node--read">
                                                            <div class="node-body">
                                                                <span class="node-icon " aria-hidden="true"><i></i>
                                                                    <i class="fa--xf far fa-comments"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <div class="node-main js-nodeMain">
                                                                    <h3 class="node-title">
                                                                        <a href="/forums/thung-rac.49/"
                                                                            data-xf-init=""
                                                                            data-shortcut="node-description">Thùng
                                                                            rác</a>
                                                                    </h3>
                                                                    <div class="node-meta">
                                                                        <div class="node-statsMeta">
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comment"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                            <dl class="pairs pairs--inline">
                                                                                <dt><i class="fa--xf far fa-comments"
                                                                                        aria-hidden="true"></i></dt>
                                                                                <dd>0</dd>
                                                                            </dl>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="node-stats">
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Chủ đề</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                    <dl class="pairs pairs--rows">
                                                                        <dt>Bài viết</dt>
                                                                        <dd>0</dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="node-extra">
                                                                    <span class="node-extra-placeholder">Không
                                                                        có</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="block-container" data-widget-id="42" data-widget-key="f1"
                                            data-widget-definition="html">
                                            <h3 class="block-minorHeader">f1</h3>
                                            <div class="block-body block-row">
                                                <div class="hotline-footer">
                                                    <div class="left">
                                                        <a href="/forums/gai-goi-ha-noi.6/">Hà Nội</a>
                                                    </div>
                                                    <!--<div class="middle">
<a href="/forums/gai-goi-sai-gon.31/" >Sài Gòn</a>
</div>-->
                                                    <div class="right">
                                                        <a href="/forums/gai-goi-sai-gon.31/">Sài Gòn</a>
                                                    </div>
                                                    <div class="clearboth"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BELOW MAIN CONTENT -->
                            </div>
                            <div uix_component="MainSidebar" class="p-body-sidebar">
                                <div data-ocm-class="offCanvasMenu-backdrop"></div>
                                <div class="uix_sidebarInner  uix_stickyBodyElement">
                                    <div class="uix_sidebar--scroller">
                                        <div class="block">
                                            <div class="block-container" data-widget-id="47"
                                                data-widget-key="tmtt" data-widget-definition="html">
                                                <h3 class="block-minorHeader">THÔNG BÁO</h3>
                                                <div class="block-body block-row">
                                                    <a href="/threads/mot-so-cach-truy-cap-trang-web-mxh-khi-bi-chan-tren-he-thong-internet.48752/"
                                                        target="_blank"><img src="/images/antiblock.gif"></a><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="block-container" data-widget-id="16"
                                                data-widget-key="nbcb" data-widget-definition="html">
                                                <h3 class="block-minorHeader">Newbie cần biết</h3>
                                                <div class="block-body block-row">
                                                    <style>
                                                        .newbie-info {
                                                            background: #515151;
                                                            border-bottom: 1px solid #878787;
                                                            line-height: 1.5em;
                                                            font-size: 10pt;
                                                            padding: 10px 7px
                                                        }
                                                        .newbie-info:hover {
                                                            background: #ff9800
                                                        }
                                                        .newbie-info a {
                                                            color: #fff
                                                        }
                                                        .newbie-info a:hover {
                                                            color: #fff
                                                        }
                                                    </style>
                                                    <div class="newbie-info"><img src="{{ asset('dang_tin/images/new.gif') }}"
                                                            rel="nofollow"> <a
                                                            href="/threads/quyet-dinh-ve-viec-dang-ky-nha-cung-cap-tai-checkerviet-org-nam-2021.71252/"
                                                            target="_blank" rel="nofollow"><i>Đăng bài tại
                                                                checkerviet</i></a></div>
                                                    <div class="newbie-info"><a href="/threads/luat-dien-dan.843"
                                                            target="_blank" rel="nofollow"><i>LUẬT DIỄN ĐÀN</i></a>
                                                    </div>
                                                    <div class="newbie-info"><a
                                                            href="/threads/cau-hoi-thuong-gap.127/" target="_blank"
                                                            rel="nofollow"><i>Câu hỏi thường gặp</i></a></div>
                                                    <div class="newbie-info"><a
                                                            href="/forums/clb-checker-thong-thai.46/"
                                                            target="_blank" rel="nofollow"><i>Cẩm nang dành cho
                                                                checker</i></a></div>
                                                    <div class="newbie-info"><a
                                                            href="/threads/quy-dinh-1-hoi-1-tra-loi-giua-checker-va-nha-cung-cap.804/"
                                                            target="_blank" rel="nofollow"><i>Quy định "1 hỏi 1 trả
                                                                lời"</i></a></div>
                                                    <div class="newbie-info"><a
                                                            href="/threads/quyen-tu-choi-phuc-vu-cua-hang-va-nha-cung-cap.803/"
                                                            target="_blank" rel="nofollow"><i>Quyền từ chối phục vụ
                                                                của hàng và nhà cung cấp</i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block" data-widget-id="36" data-widget-key="ggmbmn"
                                            data-widget-definition="new_threads">
                                            <div class="block-container">
                                                <h3 class="block-minorHeader">
                                                    <a href="/whats-new/" rel="nofollow">Gái Gọi Miền Bắc mới
                                                        nhất</a>
                                                </h3>
                                                <ul class="block-body">
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128357">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/dau-xinh-2k5-_-so-1-ve-ngoan-va-ngon-va-dang-yeu-_-nen-can-anh-em-duoc-bao-ton.128357/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/18/IMG_1721234770406_1721257850416ace9c939953ea0c0.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/dau-xinh-2k5-_-so-1-ve-ngoan-va-ngon-va-dang-yeu-_-nen-can-anh-em-duoc-bao-ton.128357/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> DÂU XINH 2K5 _ SỐ 1
                                                                    VỀ NGOAN VÀ NGON VÀ ĐÁNG YÊU _ NÊN CẦN ANH EM ĐƯỢC
                                                                    BẢO TỒN .</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi Nguoidungsau</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T09:20:56+0700"
                                                                                data-time="1721269256"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="09:20"
                                                                                title="18/7/24 lúc 09:20">38 phút
                                                                                trước</time></li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-tran-duy-hung-lang.134/">Gái
                                                                        gọi Trần Duy Hưng - Láng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128356">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/hoang-ngan-gai-goi-my-anh-8034-xinh-xan-non-to-lam-tinh-cuc-phe.128356/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.com/images/2024/07/18/IMG_8030970b8f9366e093ea.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/hoang-ngan-gai-goi-my-anh-8034-xinh-xan-non-to-lam-tinh-cuc-phe.128356/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> { Hoàng Ngân} Gái
                                                                    gọi Mỹ Anh 8034 - Xinh xắn, non tơ , làm tình cực
                                                                    phê.</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi Tần_Thủy_Hoàng</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T09:15:29+0700"
                                                                                data-time="1721268929"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="09:15"
                                                                                title="18/7/24 lúc 09:15">43 phút
                                                                                trước</time></li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-tran-duy-hung-lang.134/">Gái
                                                                        gọi Trần Duy Hưng - Láng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128328">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/phuong-thao-mong-cong-con-doggy-phe-pha-lam-tinh-mien-che.128328/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/17/1I307O7ML_BO84M105dd5bccfb8ffdb4.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/phuong-thao-mong-cong-con-doggy-phe-pha-lam-tinh-mien-che.128328/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">200K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--yellow"
                                                                        dir="auto">Q. CẦU GIẤY</span> Phương Thảo
                                                                    - Mông Cong Cớn Doggy Phê Pha- Làm Tình Miễn Chê</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi Durian</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-17T18:58:21+0700"
                                                                                data-time="1721217501"
                                                                                data-date-string="17/7/24"
                                                                                data-time-string="18:58"
                                                                                title="17/7/24 lúc 18:58">Hôm qua, lúc
                                                                                18:58</time></li>
                                                                        <li>Trả lời: 1</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-ha-noi-gia-re.9/">Gái gọi
                                                                        Hà Nội giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128325">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/trau-quy-thu-hoai-buom-moi-dam-dang-sevit-dinh-cao-gap-em-la-ngat-ngay-khong-muon-ve.128325/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/17/1I2QPDIRE_4OCG0Ubd3e98a071fe74c6.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/trau-quy-thu-hoai-buom-moi-dam-dang-sevit-dinh-cao-gap-em-la-ngat-ngay-khong-muon-ve.128325/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> [ TRÂU QUỲ ] THU
                                                                    HOÀI-BƯỚM MỚI DÂM ĐÃNG,SEVIT ĐỈNH CAO,GẶP EM LÀ NGẤT
                                                                    NGÂY KHÔNG MUỐN VỀ</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi guava</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-17T16:46:54+0700"
                                                                                data-time="1721209614"
                                                                                data-date-string="17/7/24"
                                                                                data-time-string="16:46"
                                                                                title="17/7/24 lúc 16:46">Hôm qua, lúc
                                                                                16:46</time></li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-quan-long-bien.18/">Gái
                                                                        Gọi Quận Long Biên</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128319">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/ha-linh-dam-chac-dam-dang-buom-khit-mong-cong-sv-pro-de-me-nhiet-tinh-het-minh-phuc-vu-anh-em.128319/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/17/DB2FA28A-A870-4B2D-886B-2336E73A7452bfb4df1d90529eb9.png"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/ha-linh-dam-chac-dam-dang-buom-khit-mong-cong-sv-pro-de-me-nhiet-tinh-het-minh-phuc-vu-anh-em.128319/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">200K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--yellow"
                                                                        dir="auto">Q. CẦU GIẤY</span> *** HẠ LINH
                                                                    *** Đầm Chắc, Dâm Đãng - Bướm Khít, Mông Cong - SV
                                                                    Pro Đê Mê Nhiệt Tình Hết Mình Phục Vụ Anh Em !</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi The North Face</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-17T14:41:45+0700"
                                                                                data-time="1721202105"
                                                                                data-date-string="17/7/24"
                                                                                data-time-string="14:41"
                                                                                title="17/7/24 lúc 14:41">Hôm qua, lúc
                                                                                14:41</time></li>
                                                                        <li>Trả lời: 1</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-ha-noi-gia-re.9/">Gái gọi
                                                                        Hà Nội giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="block" data-widget-id="37" data-widget-key="ggmnmn"
                                            data-widget-definition="new_threads">
                                            <div class="block-container">
                                                <h3 class="block-minorHeader">
                                                    <a href="/whats-new/" rel="nofollow">Gái Gọi Miền Nam mới
                                                        nhất</a>
                                                </h3>
                                                <ul class="block-body">
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128178">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/duong-quang-ham-tieu-sam-2k5-gai-moi-lon-hang-ngon-bim-dep-len-song-cho-ae.128178/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/13/z5611228522614_943101db9d96d1e6553dd09407b49a9af2a26ad80f181d57.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/duong-quang-ham-tieu-sam-2k5-gai-moi-lon-hang-ngon-bim-dep-len-song-cho-ae.128178/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--blue"
                                                                        dir="auto">Q.Gò Vấp - Q.12</span> [DƯƠNG
                                                                    QUẢNG HÀM] TIỂU SAM 2K5 GÁI MỚI LỚN HÀNG NGON BÍM
                                                                    ĐẸP LÊN SÓNG CHO AE</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi Epic Game</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-13T19:55:39+0700"
                                                                                data-time="1720875339"
                                                                                data-date-string="13/7/24"
                                                                                data-time-string="19:55"
                                                                                title="13/7/24 lúc 19:55">Thứ bảy lúc
                                                                                19:55</time></li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-sai-gon-gia-re.38/">Gái
                                                                        gọi Sài Gòn giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128173">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/duong-quang-ham-tieu-sam-2k5-gai-moi-lon-hang-ngon-bim-dep-len-song-cho-ae.128173/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/13/z5611228522614_943101db9d96d1e6553dd09407b49a9af2a26ad80f181d57.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/duong-quang-ham-tieu-sam-2k5-gai-moi-lon-hang-ngon-bim-dep-len-song-cho-ae.128173/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> [DƯƠNG QUẢNG HÀM]
                                                                    TIỂU SAM 2K5 GÁI MỚI LỚN HÀNG NGON BÍM ĐẸP LÊN SÓNG
                                                                    CHO AE</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi Epic Game</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-13T19:55:39+0700"
                                                                                data-time="1720875339"
                                                                                data-date-string="13/7/24"
                                                                                data-time-string="19:55"
                                                                                title="13/7/24 lúc 19:55">Thứ bảy lúc
                                                                                19:55</time></li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-quan-go-vap.62/">Gái Gọi
                                                                        Quận Gò Vấp</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128179">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/duong-quang-ham-be-tho-2k4-xinh-ngoan-dam-len-song-pv-ae.128179/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/13/z5602921456617_1f1a993d4fc42828138f56ed5fc00194885e6980d81b408f.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/duong-quang-ham-be-tho-2k4-xinh-ngoan-dam-len-song-pv-ae.128179/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--blue"
                                                                        dir="auto">Q.Gò Vấp - Q.12</span> [DƯƠNG
                                                                    QUẢNG HÀM] BÉ THỎ 2K4 XINH NGOAN DÂM LÊN SÓNG PV
                                                                    AE</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi Epic Game</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-13T19:41:44+0700"
                                                                                data-time="1720874504"
                                                                                data-date-string="13/7/24"
                                                                                data-time-string="19:41"
                                                                                title="13/7/24 lúc 19:41">Thứ bảy lúc
                                                                                19:41</time></li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-sai-gon-gia-re.38/">Gái
                                                                        gọi Sài Gòn giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128172">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/duong-quang-ham-be-tho-2k4-xinh-ngoan-dam-len-song-pv-ae.128172/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/13/z5602921456617_1f1a993d4fc42828138f56ed5fc00194885e6980d81b408f.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/duong-quang-ham-be-tho-2k4-xinh-ngoan-dam-len-song-pv-ae.128172/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> [DƯƠNG QUẢNG HÀM]
                                                                    BÉ THỎ 2K4 XINH NGOAN DÂM LÊN SÓNG PV AE</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi Epic Game</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-13T19:41:44+0700"
                                                                                data-time="1720874504"
                                                                                data-date-string="13/7/24"
                                                                                data-time-string="19:41"
                                                                                title="13/7/24 lúc 19:41">Thứ bảy lúc
                                                                                19:41</time></li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-quan-go-vap.62/">Gái Gọi
                                                                        Quận Gò Vấp</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128076">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/quynh-nga-gai-xinh-vu-to-buom-dep-nong-bong-va-hap-dan-tinh-cam-ngat-ngay.128076/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/11/2EFBA597-A476-4814-9292-A5EE6E9C7520a099ba9565650b05.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/quynh-nga-gai-xinh-vu-to-buom-dep-nong-bong-va-hap-dan-tinh-cam-ngat-ngay.128076/"><span
                                                                        class="label label--orange"
                                                                        dir="auto">400K</span> Quỳnh Nga - Gái
                                                                    Xinh Vú To Bướm Đẹp - Nóng Bỏng Và Hấp Dẫn - Tình
                                                                    Cảm Ngất Ngây</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Đăng bởi strawberry</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-11T06:28:18+0700"
                                                                                data-time="1720654098"
                                                                                data-date-string="11/7/24"
                                                                                data-time-string="06:28"
                                                                                title="11/7/24 lúc 06:28">11/7/24</time>
                                                                        </li>
                                                                        <li>Trả lời: 0</li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-quan-12.61/">Gái Gọi Quận
                                                                        12</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="block" data-widget-id="9"
                                            data-widget-key="forum_overview_new_posts"
                                            data-widget-definition="new_posts">
                                            <div class="block-container">
                                                <h3 class="block-minorHeader">
                                                    <a href="/whats-new/posts/?skip=1" rel="nofollow">Bình luận
                                                        mới</a>
                                                </h3>
                                                <ul class="block-body">
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128357">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/dau-xinh-2k5-_-so-1-ve-ngoan-va-ngon-va-dang-yeu-_-nen-can-anh-em-duoc-bao-ton.128357/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/18/IMG_1721234770406_1721257850416ace9c939953ea0c0.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/dau-xinh-2k5-_-so-1-ve-ngoan-va-ngon-va-dang-yeu-_-nen-can-anh-em-duoc-bao-ton.128357/post-3781416"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> DÂU XINH 2K5 _ SỐ 1
                                                                    VỀ NGOAN VÀ NGON VÀ ĐÁNG YÊU _ NÊN CẦN ANH EM ĐƯỢC
                                                                    BẢO TỒN .</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: Nguoidungsau</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T09:20:56+0700"
                                                                                data-time="1721269256"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="09:20"
                                                                                title="18/7/24 lúc 09:20">38 phút
                                                                                trước</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-tran-duy-hung-lang.134/">Gái
                                                                        gọi Trần Duy Hưng - Láng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128356">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/hoang-ngan-gai-goi-my-anh-8034-xinh-xan-non-to-lam-tinh-cuc-phe.128356/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.com/images/2024/07/18/IMG_8030970b8f9366e093ea.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/hoang-ngan-gai-goi-my-anh-8034-xinh-xan-non-to-lam-tinh-cuc-phe.128356/post-3781411"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> { Hoàng Ngân} Gái
                                                                    gọi Mỹ Anh 8034 - Xinh xắn, non tơ , làm tình cực
                                                                    phê.</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: Tần_Thủy_Hoàng</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T09:15:29+0700"
                                                                                data-time="1721268929"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="09:15"
                                                                                title="18/7/24 lúc 09:15">43 phút
                                                                                trước</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-tran-duy-hung-lang.134/">Gái
                                                                        gọi Trần Duy Hưng - Láng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-127959">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/yen-xa-thao-xiu-nu-cuoi-hien-diu-anh-mat-de-me-lam-tinh-day-cam-xuc.127959/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/07/1f2b707c7ad68a6e4.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/yen-xa-thao-xiu-nu-cuoi-hien-diu-anh-mat-de-me-lam-tinh-day-cam-xuc.127959/post-3781388"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> [ YÊN XÁ ] THẢO XÍU
                                                                    - NỤ CƯỜI HIỀN DỊU - ÁNH MẮT ĐÊ MÊ - LÀM TÌNH ĐẦY
                                                                    CẢM XÚC</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: tizzy3654</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:30:33+0700"
                                                                                data-time="1721266233"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:30"
                                                                                title="18/7/24 lúc 08:30">Hôm nay lúc
                                                                                08:30</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-quan-ha-dong.20/">Gái Gọi
                                                                        Quận Hà Đông</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-127915">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/%E2%9D%A4-be-sam-%E2%9D%A4-cang-chua-ve-hang-moi-len-song-cuc-tinh-cam-chieu-khach.127915/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/06/1I23GKHA6_ASDC0E6387390c215a332e.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/%E2%9D%A4-be-sam-%E2%9D%A4-cang-chua-ve-hang-moi-len-song-cuc-tinh-cam-chieu-khach.127915/post-3781387"><span
                                                                        class="label label--red" dir="auto">Qua
                                                                        đêm</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--yellow"
                                                                        dir="auto">Hải An</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--orange"
                                                                        dir="auto">400K</span> ❤ BÉ SAM ❤ CẢNG
                                                                    CHÙA VẼ - HÀNG MỚI LÊN SÓNG - CỰC TÌNH CẢM CHIỀU
                                                                    KHÁCH</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: PhamLuongTruong</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:27:59+0700"
                                                                                data-time="1721266079"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:27"
                                                                                title="18/7/24 lúc 08:27">Hôm nay lúc
                                                                                08:27</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-hai-phong.70/">Gái Gọi
                                                                        Hải Phòng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-127419">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/tran-huu-tuoc-minh-chau-hang-tinh-cam-lam-tinh-het-minh-nhiet-tinh-chieu-chuong-moi-tu-the.127419/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/06/24/1I0T5D351_BUM8BJ020ee180046e8a42.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/tran-huu-tuoc-minh-chau-hang-tinh-cam-lam-tinh-het-minh-nhiet-tinh-chieu-chuong-moi-tu-the.127419/post-3781386"><span
                                                                        class="label label--orange"
                                                                        dir="auto">200K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--lightGreen"
                                                                        dir="auto">Q. ĐỐNG ĐA</span> [ TRẦN HỮU
                                                                    TƯỚC ] MINH CHÂU-HÀNG TÌNH CẢM-LÀM TÌNH HẾT
                                                                    MÌNH-NHIỆT TÌNH CHIỀU CHUỘNG MỌI TƯ THẾ</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: Minh Chau Xinh</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:27:42+0700"
                                                                                data-time="1721266062"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:27"
                                                                                title="18/7/24 lúc 08:27">Hôm nay lúc
                                                                                08:27</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-ha-noi-gia-re.9/">Gái gọi
                                                                        Hà Nội giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-127168">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/newww-thanh-binh-em-gai-mien-trung-sv-tuyet-dinh-chieu-khach-nhu-nguoi-yeu.127168/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/06/16/1I0FEE5TA_9K17QU184925b0afdaf16b.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/newww-thanh-binh-em-gai-mien-trung-sv-tuyet-dinh-chieu-khach-nhu-nguoi-yeu.127168/post-3781385"><span
                                                                        class="label label--orange"
                                                                        dir="auto">200K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--green"
                                                                        dir="auto">Q.LONG BIÊN</span> NEWWW THANH
                                                                    BÌNH EM GÁI MIỀN TRUNG, SV TUYỆT ĐỈNH , CHIỀU KHÁCH
                                                                    NHƯ NGƯỜI YÊU</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: nuhoang71</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:25:54+0700"
                                                                                data-time="1721265954"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:25"
                                                                                title="18/7/24 lúc 08:25">Hôm nay lúc
                                                                                08:25</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-ha-noi-gia-re.9/">Gái gọi
                                                                        Hà Nội giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-127679">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/new-dau-beo-2k6-_-da-trang-min-mang-_-vu-tron-va-dep-_-phuc-vu-anh-em-checkerviet.127679/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/06/30/IMG_1719734446016_17197351934253a15b3977c1f8f81.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/new-dau-beo-2k6-_-da-trang-min-mang-_-vu-tron-va-dep-_-phuc-vu-anh-em-checkerviet.127679/post-3781384"><span
                                                                        class="label label--orange"
                                                                        dir="auto">300K</span> NEW DÂU BÉO 2K6 _
                                                                    DA TRẮNG MỊN MÀNG _ VÚ TRÒN VÀ ĐẸP _ PHỤC VỤ ANH EM
                                                                    CHECKERVIET .</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: dâu béo</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:23:52+0700"
                                                                                data-time="1721265832"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:23"
                                                                                title="18/7/24 lúc 08:23">Hôm nay lúc
                                                                                08:23</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-tran-duy-hung-lang.134/">Gái
                                                                        gọi Trần Duy Hưng - Láng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128316">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/ngoc-bich-2k6-_-hang-danh-cho-ae-thich-chan-dai.128316/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/17/100001800507a1683f77531c15.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/ngoc-bich-2k6-_-hang-danh-cho-ae-thich-chan-dai.128316/post-3781383"><span
                                                                        class="label label--orange"
                                                                        dir="auto">400K</span> NGỌC BÍCH 2K6 _
                                                                    HÀNG DÀNH CHO AE THÍCH CHÂN DÀI</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: checker chệch</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:17:39+0700"
                                                                                data-time="1721265459"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:17"
                                                                                title="18/7/24 lúc 08:17">Hôm nay lúc
                                                                                08:17</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-tran-duy-hung-lang.134/">Gái
                                                                        gọi Trần Duy Hưng - Láng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-128238">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/nguyen-ngoc-vu-bich-ngoc-762-bu-liem-chat-lu-lam-tinh-cuc-chat-phuc-vu-khach-hang-nhiet-tinh-lam-viec-gio-giac-cong-so.128238/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/07/16/165eabf32ef6edfdd.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/nguyen-ngoc-vu-bich-ngoc-762-bu-liem-chat-lu-lam-tinh-cuc-chat-phuc-vu-khach-hang-nhiet-tinh-lam-viec-gio-giac-cong-so.128238/post-3781382"><span
                                                                        class="label label--orange"
                                                                        dir="auto">200K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--accent"
                                                                        dir="auto">Q.THANH XUÂN</span> (Nguyễn
                                                                    Ngọc Vũ) BÍCH NGỌC 762 - BÚ LIẾM CHẤT LỪ - LÀM TÌNH
                                                                    CỰC CHẤT - PHỤC VỤ KHÁCH HÀNG NHIỆT TÌNH - LÀM VIỆC
                                                                    GIỜ GIẤC CÔNG SỞ</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: Bích Ngọc 762</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:13:10+0700"
                                                                                data-time="1721265190"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:13"
                                                                                title="18/7/24 lúc 08:13">Hôm nay lúc
                                                                                08:13</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-ha-noi-gia-re.9/">Gái gọi
                                                                        Hà Nội giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="block-row">
                                                        <div class="contentRow">
                                                            <div class="contentRow-figure">
                                                                <div class="threadThumbnailWrapper"
                                                                    id="thread-thumbnail-126667">
                                                                    <div>
                                                                        <div>
                                                                            <a class="avatar avatar--xxs"
                                                                                href="/threads/nga-tu-so-truong-chinh-da-trang-vo-bi-bach-mong-cong-zu-bu-cia-body-day-nhuc-duc-jav-cua-xchekerviet.126667/"><span
                                                                                    class="heightHelper"></span><img
                                                                                    class="alignThumbnail"
                                                                                    src="https://upload69.cam/images/2024/06/01/z5481896488950_82b346ffbf868598d4bb92b1f2cc49380b6ac5a808f9c941.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contentRow-main contentRow-main--close">
                                                                <a
                                                                    href="/threads/nga-tu-so-truong-chinh-da-trang-vo-bi-bach-mong-cong-zu-bu-cia-body-day-nhuc-duc-jav-cua-xchekerviet.126667/post-3781381"><span
                                                                        class="label label--orange"
                                                                        dir="auto">200K</span><span
                                                                        class="label-append">&nbsp;</span><span
                                                                        class="label label--accent"
                                                                        dir="auto">Q.THANH XUÂN</span> NGÃ TƯ
                                                                    SỞ-TRƯỜNG CHINH-DA TRẮNG VỖ BÌ BẠCH-MÔNG CONG-ZÚ
                                                                    BỰ-CIA-BODY ĐẦY NHỤC DỤC -JAV CỦA XCHEKERVIET</a>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <ul class="listInline listInline--bullet">
                                                                        <li>Latest: thuhuongckv</li>
                                                                        <li><time class="u-dt" dir="auto"
                                                                                datetime="2024-07-18T08:12:12+0700"
                                                                                data-time="1721265132"
                                                                                data-date-string="18/7/24"
                                                                                data-time-string="08:12"
                                                                                title="18/7/24 lúc 08:12">Hôm nay lúc
                                                                                08:12</time></li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="contentRow-minor contentRow-minor--hideLinks">
                                                                    <a href="/forums/gai-goi-ha-noi-gia-re.9/">Gái gọi
                                                                        Hà Nội giá rẻ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="p-footer" id="footer" style="margin-bottom: 0px;">
                <div class="uix_extendedFooter">
                    <div class="pageContent">
                        <div class="uix_extendedFooterRow">
                            <div class="block">
                                <div class="block-container" data-widget-id="39" data-widget-key="aboutus"
                                    data-widget-definition="html">
                                    <h3 class="block-minorHeader">© Checkerviet.net</h3>
                                    <div class="block-body block-row">
                                        <div class="aboutus" font-size="16px">
                                            Được ra đời vào năm 2014, checkerviet.net mang sứ mệnh gắn kết các checker
                                            trên khắp đât nước. Cùng chia sẻ, cùng đánh giá nhận định, cùng góp sức xây
                                            dựng một cộng động checker mạnh mẽ. Góp phần đưa gai goi ha noi, gai goi sai
                                            gon, gai goi da nang, gai goi hai phong, gai goi viet nam đến với tất cả các
                                            anh em yêu tình dục trên khắp Việt Nam
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-container" data-widget-id="40" data-widget-key="gaigoihnf"
                                    data-widget-definition="html">
                                    <h3 class="block-minorHeader">Gái gọi Hà Nội</h3>
                                    <div class="block-body block-row">
                                        • <a href="/forums/gai-goi-ha-noi.6/">gai goi ha noi</a><br>
                                        • <a href="/forums/gai-goi-ha-noi-cao-cap.22/">gai goi cao cap ha noi</a><br>
                                        • <a href="/forums/gai-goi-ha-noi-cao-cap.22/">gai goi lam tien cao cap ha
                                            noi</a><br>
                                        • <a href="/forums/gai-goi-ha-noi-kiem-dinh.104/">cave ha noi kiem dinh
                                        </a><br>
                                        • <a href="/forums/clb-massage-ha-noi.144/">massage vip ha noi</a><br>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-container" data-widget-id="41" data-widget-key="ggsg"
                                    data-widget-definition="html">
                                    <h3 class="block-minorHeader">Gái Gọi Tp.Hồ Chí Minh</h3>
                                    <div class="block-body block-row">
                                        • <a href="/forums/gai-goi-sai-gon.31/">gai goi sai gon</a><br>
                                        • <a href="/forums/gai-goi-sai-gon-cao-cap.30/">gai goi cao cap sai
                                            gon</a><br>
                                        • <a href="/forums/gai-goi-ha-noi-cao-cap.22/">gai lam tien sai gon cao
                                            cap</a><br>
                                        • <a href="/forums/gai-goi-sai-gon-kiem-dinh.105/">cave sai gon kiem dinh
                                        </a><br>
                                        • <a href="/forums/clb-massage-sai-gon.152/">massage vip sai gon</a><br>
                                    </div>
                                </div>
                            </div>
                            <div class="block" data-widget-id="11" data-widget-key="footer_forumStatistics"
                                data-widget-definition="forum_statistics">
                                <div class="block-container">
                                    <h3 class="block-minorHeader">Forum statistics</h3>
                                    <div class="block-body block-row">
                                        <dl class="pairs pairs--justified">
                                            <dt>Chủ đề</dt>
                                            <dd>34,372</dd>
                                        </dl>
                                        <dl class="pairs pairs--justified">
                                            <dt>Bài viết</dt>
                                            <dd>1,582,340</dd>
                                        </dl>
                                        <dl class="pairs pairs--justified">
                                            <dt>Thành viên</dt>
                                            <dd>367,738</dd>
                                        </dl>
                                        <dl class="pairs pairs--justified">
                                            <dt>Thành viên mới nhất</dt>
                                            <dd><a href="/members/rut-ra-o-kip.515185/" class="username "
                                                    dir="auto" data-user-id="515185"
                                                    data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId60">Rút.ra.O.kịp</a></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="block" data-widget-id="14" data-widget-key="footer_sharePage"
                                data-widget-definition="share_page">
                                <div class="block-container">
                                    <h3 class="block-minorHeader">Share this page</h3>
                                    <div class="block-body block-row" style="text-align: center;">
                                        <div class="shareButtons shareButtons--iconic" data-xf-init="share-buttons"
                                            data-page-url="" data-page-title="" data-page-desc=""
                                            data-page-image="">
                                            <div class="shareButtons-buttons">
                                                <a class="shareButtons-button shareButtons-button--brand shareButtons-button--facebook"
                                                    data-href="https://www.facebook.com/sharer.php?u={url}"
                                                    id="js-XFUniqueId61">
                                                    <i aria-hidden="true"></i>
                                                    <span>Facebook</span>
                                                </a>
                                                <a class="shareButtons-button shareButtons-button--brand shareButtons-button--twitter"
                                                    data-href="https://twitter.com/intent/tweet?url={url}&amp;text={title}&amp;via=checkerviet&amp;related=checkerviet"
                                                    id="js-XFUniqueId62">
                                                    <i aria-hidden="true"></i>
                                                    <span>Twitter</span>
                                                </a>
                                                <a class="shareButtons-button shareButtons-button--share is-hidden"
                                                    data-xf-init="web-share" data-title="" data-text=""
                                                    data-url=""
                                                    data-hide=".shareButtons-button:not(.shareButtons-button--share)"
                                                    id="js-XFUniqueId63">
                                                    <i aria-hidden="true"></i>
                                                    <span>Share</span>
                                                </a>
                                                <a class="shareButtons-button shareButtons-button--link"
                                                    data-clipboard="{url}" id="js-XFUniqueId64">
                                                    <i aria-hidden="true"></i>
                                                    <span>Link</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-footer-inner">
                    <div class="pageContent">
                        <div class="p-footer-row">
                            <div class="p-footer-row-main">
                                <ul class="p-footer-linkList p-footer-choosers">
                                    <li><a id="uix_widthToggle--trigger" data-xf-init="tooltip" rel="nofollow"
                                            data-original-title="Toggle width" aria-label="Toggle width"><i
                                                class="fa--xf far fa-compress-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="/misc/language" data-xf-click="overlay" data-xf-init="tooltip"
                                            rel="nofollow" data-original-title="Chọn Ngôn ngữ"
                                            id="js-XFUniqueId65"><i class="fa fa-globe" aria-hidden="true"></i>
                                            Tiếng Việt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-footer-row-opposite">
                            <ul class="p-footer-linkList">
                                <li><a href="/misc/contact" data-xf-click="overlay">Liên hệ</a></li>
                                <li><a href="/help/terms/">Quy định và Nội quy</a></li>
                                <li><a href="/help/privacy-policy/">Privacy Policy</a></li>
                                <li><a href="/help/">Trợ giúp</a></li>
                                <li><a href="#top" title="Top" data-xf-click="scroll-to"><i
                                            class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
                                <li><a href="/forums/-/index.rss" target="_blank" class="p-footer-rssLink"
                                        title="RSS"><span aria-hidden="true"><i class="fa fa-rss"></i><span
                                                class="u-srOnly">RSS</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-footer-copyrightRow">
                    <div class="pageContent">
                        <div class="uix_copyrightBlock">
                            <div class="p-footer-copyright">
                                <a href="https://xenforo.com" class="u-concealed" dir="ltr" target="_blank"
                                    rel="sponsored noopener">Community platform by XenForo<sup>®</sup> <span
                                        class="copyright">© 2010-2022 XenForo Ltd.</span></a>
                                <div><a style="color: red" href="https://customers.addonslab.com/"
                                        target="_blank">Thread Thumbnail by AddonsLab: invalid license detected.</a>
                                </div>
                                <span class="thBranding"><span class="thBranding__pipe"> | </span><a
                                        href="https://www.themehouse.com/?utm_source=xcheckerviet.biz&amp;utm_medium=xf2product&amp;utm_campaign=product_branding"
                                        class="u-concealed" target="_BLANK" nofollow="nofollow">Style and add-ons
                                        by ThemeHouse</a></span>
                                <div class="porta-copyright">
                                    <a href="https://xenforo.com/community/resources/6023/" target="_blank">XenPorta
                                        2 PRO</a> © Jason Axelrod of
                                    <a href="https://8wayrun.com/" target="_blank">8WAYRUN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="uix_fabBar uix_fabBar--active">
                <div class="u-scrollButtons js-scrollButtons is-active" data-trigger-type="both">
                    <a href="#top" class="button--scroll ripple-JsOnly button" data-xf-click="scroll-to"><span
                            class="button-text"><i class="fa--xf far fa-arrow-up" aria-hidden="true"></i><span
                                class="u-srOnly">Top</span></span></a>
                    <a href="#footer" class="button--scroll ripple-JsOnly button" data-xf-click="scroll-to"><span
                            class="button-text"><i class="fa--xf far fa-arrow-down" aria-hidden="true"></i><span
                                class="u-srOnly">Bottom</span></span></a>
                </div>
                <div class="p-title-pageAction">
                    <a href="/whats-new/posts/" class="button button--icon button--icon--bolt rippleButton"><span
                            class="button-text">
                            Bài viết mới
                        </span></a>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        @include('pages.partials.sidebar')
        @yield('content')
        @include('pages.partials.rightbar')
    </main>
    @include('pages.partials.footer')
    <script>
        if (typeof(window.themehouse) !== 'object') {
            window.themehouse = {};
        }
        if (typeof(window.themehouse.settings) !== 'object') {
            window.themehouse.settings = {};
        }
        window.themehouse.settings = {
            common: {
                '20210125': {
                    init: false,
                },
            },
            data: {
                version: '2.2.9.0.0',
                jsVersion: 'No JS Files',
                templateVersion: '2.1.8.0_Release',
                betaMode: 0,
                theme: '',
                url: 'http://127.0.0.1:8000/',
                user: '0',
            },
            inputSync: {},
            minimalSearch: {
                breakpoint: "900px",
                dropdownBreakpoint: "900",
            },
            fab: {
                enabled: 1,
            },
            checkRadius: {
                enabled: 0,
                selectors: '.p-footer-inner, .uix_extendedFooter, .p-nav, .p-sectionLinks, .p-staffBar, .p-header, #wpadminbar',
            },
            nodes: {
                enabled: 0,
            },
        }
        window.document.addEventListener('DOMContentLoaded', function() {
            try {
                window.themehouse.common['20210125'].init();
                window.themehouse.common['20180112'] = window.themehouse.common[
                    '20210125']; // custom projects fallback
            } catch (e) {
                console.log('Error caught', e);
            }
            var jsVersionPrefix = 'No JS Files';
            if (typeof(window.themehouse.settings.data.jsVersion) === 'string') {
                var jsVersionSplit = window.themehouse.settings.data.jsVersion.split('_');
                if (jsVersionSplit.length) {
                    jsVersionPrefix = jsVersionSplit[0];
                }
            }
            var templateVersionPrefix = 'No JS Template Version';
            if (typeof(window.themehouse.settings.data.templateVersion) === 'string') {
                var templateVersionSplit = window.themehouse.settings.data.templateVersion.split('_');
                if (templateVersionSplit.length) {
                    templateVersionPrefix = templateVersionSplit[0];
                }
            }
            if (jsVersionPrefix !== templateVersionPrefix) {
                var splitFileVersion = jsVersionPrefix.split('.');
                var splitTemplateVersion = templateVersionPrefix.split('.');
                console.log('version mismatch', jsVersionPrefix, templateVersionPrefix);
            }
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('dang_tin/user/js/vendor-compiled.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/vendor-compiled-xf.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/notice.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/ripple.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/20210125.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/index.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/jquery.hoverIntent.min.js') }}"></script>
    <script>
        // detect android device. Added to fix the dark pixel bug https://github.com/Audentio/xf2theme-issues/issues/1055
        $(document).ready(function() {
            var ua = navigator.userAgent.toLowerCase();
            var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
            if (isAndroid) {
                $('html').addClass('device--isAndroid');
            }
        })
    </script>
    <script>
        /****** OFF CANVAS ***/
        $(document).ready(function() {
            var panels = {
                navigation: {
                    position: 1
                },
                account: {
                    position: 2
                },
                inbox: {
                    position: 3
                },
                alerts: {
                    position: 4
                }
            };
            var tabsContainer = $('.sidePanel__tabs');
            var activeTab = 'navigation';
            var activeTabPosition = panels[activeTab].position;
            var generateDirections = function() {
                $('.sidePanel__tabPanel').each(function() {
                    var tabPosition = $(this).attr('data-content');
                    var activeTabPosition = panels[activeTab].position;
                    if (tabPosition != activeTab) {
                        if (panels[tabPosition].position < activeTabPosition) {
                            $(this).addClass('is-left');
                        }
                        if (panels[tabPosition].position > activeTabPosition) {
                            $(this).addClass('is-right');
                        }
                    }
                });
            };
            generateDirections();
            $('.sidePanel__tab').click(function() {
                $(tabsContainer).find('.sidePanel__tab').removeClass('sidePanel__tab--active');
                $(this).addClass('sidePanel__tab--active');
                activeTab = $(this).attr('data-attr');
                $('.sidePanel__tabPanel').removeClass('is-active');
                $('.sidePanel__tabPanel[data-content="' + activeTab + '"]').addClass('is-active');
                $('.sidePanel__tabPanel').removeClass('is-left').removeClass('is-right');
                generateDirections();
            });
        });
        /******** extra info post toggle ***********/
        $(document).ready(function() {
            XF.thThreadsUserExtraTrigger = XF.Click.newHandler({
                eventNameSpace: 'XFthThreadsUserExtraTrigger',
                init: function(e) {},
                click: function(e) {
                    var parent = this.$target.parents('.message-user');
                    var triggerContainer = this.$target.parent('.thThreads__userExtra--toggle');
                    var container = triggerContainer.siblings('.thThreads__message-userExtras');
                    var child = container.find('.message-userExtras');
                    var eleHeight = child.height();
                    if (parent.hasClass('userExtra--expand')) {
                        container.css({
                            height: eleHeight
                        });
                        parent.toggleClass('userExtra--expand');
                        window.setTimeout(function() {
                            container.css({
                                height: '0'
                            });
                            window.setTimeout(function() {
                                container.css({
                                    height: ''
                                });
                            }, 200);
                        }, 17);
                    } else {
                        container.css({
                            height: eleHeight
                        });
                        window.setTimeout(function() {
                            parent.toggleClass('userExtra--expand');
                            container.css({
                                height: ''
                            });
                        }, 200);
                    }
                }
            });
            XF.Click.register('ththreads-userextra-trigger', 'XF.thThreadsUserExtraTrigger');
        });
        /******** Backstretch images ***********/
        $(document).ready(function() {
            if (0) {
                $("body").addClass('uix__hasBackstretch');
                $("body").backstretch([
                    "/styles/uix_dark/images/bg/1.jpg", "/styles/uix_dark/images/bg/2.jpg",
                    "/styles/uix_dark/images/bg/3.jpg"
                ], {
                    duration: 4000,
                    fade: 500
                });
                $("body").css("zIndex", "");
            }
        });
        // sidenav canvas blur fix
        $(document).ready(function() {
            $('.p-body-sideNavTrigger .button').click(function() {
                $('body').addClass('sideNav--open');
            });
        })
        $(document).ready(function() {
            $("[data-ocm-class='offCanvasMenu-backdrop']").click(function() {
                $('body').removeClass('sideNav--open');
            });
        })
        $(document).on('editor:start', function(m, ed) {
            if (typeof(m) !== 'undefined' && typeof(m.target) !== 'undefined') {
                var ele = $(m.target);
                if (ele.hasClass('js-editor')) {
                    var wrapper = ele.closest('.message-editorWrapper');
                    if (wrapper.length) {
                        window.setTimeout(function() {
                            var innerEle = wrapper.find('.fr-element');
                            if (innerEle.length) {
                                innerEle.focus(function(e) {
                                    $('html').addClass('uix_editor--focused')
                                });
                                innerEle.blur(function(e) {
                                    $('html').removeClass('uix_editor--focused')
                                });
                            }
                        }, 0);
                    }
                }
            }
        });
        // off canvas menu closer keyboard shortcut
        $(document).ready(function() {
            $(document.body).onPassive('keyup', function(e) {
                switch (e.key) {
                    case 'Escape':
                        $('.offCanvasMenu.is-active .offCanvasMenu-backdrop').click();
                        return;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var uixMegaHovered = false;
            $('.uix-navEl--hasMegaMenu').hoverIntent({
                over: function() {
                    if (uixMegaHovered) {
                        menu = $(this).attr('data-nav-id');
                        $('.p-nav').addClass('uix_showMegaMenu');
                        $('.uix_megaMenu__content').removeClass('uix_megaMenu__content--active');
                        $('.uix_megaMenu__content--' + menu).addClass('uix_megaMenu__content--active');
                    }
                },
                timeout: 200,
            });
            $('.p-nav').mouseenter(function() {
                uixMegaHovered = true;
            });
            $('.p-nav').mouseleave(function() {
                $(this).removeClass('uix_showMegaMenu');
                uixMegaHovered = false;
            });
        });
    </script>
    <script>
        /******** signature collapse toggle ***********/
        $(window).on('load', function() {
            window.setTimeout(function() {
                var maxHeight = 100;
                /*** check if expandable ***/
                var eles = [];
                $('.message-signature').each(function() {
                    var height = $(this).height();
                    if (height > maxHeight) {
                        eles.push($(this));
                    }
                });
                for (var i = 0; i < eles.length; i++) {
                    eles[i].addClass('message-signature--expandable');
                };
                /**** expand function ***/
                var expand = function(container, canClose) {
                    var inner = container.find('.bbWrapper');
                    var eleHeight = inner.height();
                    var isExpanded = container.hasClass('message-signature--expanded');
                    if (isExpanded) {
                        if (canClose) {
                            container.css({
                                height: eleHeight
                            });
                            container.removeClass('message-signature--expanded');
                            window.setTimeout(function() {
                                container.css({
                                    height: maxHeight
                                });
                                window.setTimeout(function() {
                                    container.css({
                                        height: ''
                                    });
                                }, 200);
                            }, 17);
                        }
                    } else {
                        container.css({
                            height: eleHeight
                        });
                        window.setTimeout(function() {
                            container.addClass('message-signature--expanded');
                            container.css({
                                height: ''
                            });
                        }, 200);
                    }
                }
                var hash = window.location.hash
                if (!!hash && hash.indexOf('#') === 0) {
                    var replacedHash = hash.replace('#', '');
                    var ele = document.getElementById(replacedHash);
                    if (ele) {
                        ele.scrollIntoView();
                    }
                }
                /*** handle hover ***/
                /*** handle click ***/
                $('.uix_signatureExpand').click(function() {
                    var container = $(this).parent('.message-signature');
                    expand(container, true);
                });
            }, 0);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;
            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });
                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");
                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }
                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }
                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                var editor = XF.getEditorInContainer($(document));
                if (!!editor && !!editor.ed) {
                    editor.ed.events.on('focus', function() {
                        $('.uix_fabBar').css('display', 'none');
                    })
                    editor.ed.events.on('blur', function() {
                        $('.uix_fabBar').css('display', '');
                    })
                }
            }, 100)
        })
    </script>
    <script>
        $(document).on('ajax:complete', function(e, xhr, status) {
            var data = xhr.responseJSON;
            if (!data) {
                return;
            }
            if (data.visitor) {
                $('.js-uix_badge--totalUnread').data('badge', data.visitor.total_unread);
            }
        });
    </script>
    <script src="{{ asset('dang_tin/user/js/defer.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/deferFab.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/defer.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/deferNodesCollapse.min.js') }}"></script>
    <script src="{{ asset('dang_tin/user/js/deferWidthToggle.min.js') }}"></script>
    <script src="/js/themehouse/uix_dark/defer.min.js?_v=ff3a2254" defer=""></script>
    <script>
        jQuery.extend(true, XF.config, {
            // 
            userId: 0,
            enablePush: false,
            pushAppServerKey: '',
            url: {
                fullBase: 'http://127.0.0.1:8000/',
                basePath: '/',
                css: '/css.php?css=__SENTINEL__&s=12&l=2&d=1720838790',
                keepAlive: '/login/keep-alive'
            },
            cookie: {
                path: '/',
                domain: '',
                prefix: 'xf_',
                secure: true
            },
            cacheKey: '759e247ee94d0d76e3d270317ea7066f',
            csrf: '1721268225,66b37889f0448b7acc8a04e3ebfbaaf3',
            js: {
                "\/js\/xf\/notice.min.js?_v=ff3a2254": true,
                "\/js\/themehouse\/uix_dark\/ripple.min.js?_v=ff3a2254": true,
                "\/js\/themehouse\/global\/20210125.min.js?_v=ff3a2254": true,
                "\/js\/themehouse\/uix_dark\/index.min.js?_v=ff3a2254": true,
                "\/js\/themehouse\/uix_dark\/vendor\/hover-intent\/jquery.hoverIntent.min.js?_v=ff3a2254": true
            },
            css: {
                "public:altt_thread_thumbnail.less": true,
                "public:node_list.less": true,
                "public:notices.less": true,
                "public:share_controls.less": true,
                "public:th_nodeStyling_nodes.12.less": true,
                "public:uix.less": true,
                "public:uix_extendedFooter.less": true,
                "public:uix_socialMedia.less": true,
                "public:uix_welcomeSection.less": true,
                "public:extra.less": true
            },
            time: {
                now: 1721268225,
                today: 1721235600,
                todayDow: 4,
                tomorrow: 1721322000,
                yesterday: 1721149200,
                week: 1720717200
            },
            borderSizeFeature: '2px',
            fontAwesomeWeight: 'r',
            enableRtnProtect: true,
            enableFormSubmitSticky: true,
            uploadMaxFilesize: 167772160,
            allowedVideoExtensions: ["m4v", "mov", "mp4", "mp4v", "mpeg", "mpg", "ogv", "webm"],
            allowedAudioExtensions: ["mp3", "opus", "ogg", "wav"],
            shortcodeToEmoji: true,
            visitorCounts: {
                conversations_unread: '0',
                alerts_unviewed: '0',
                total_unread: '0',
                title_count: true,
                icon_indicator: true
            },
            jsState: {},
            publicMetadataLogoUrl: '',
            publicPushBadgeUrl: 'http://127.0.0.1:8000/styles/default/xenforo/bell.png'
        });
        jQuery.extend(XF.phrases, {
            // 
            date_x_at_time_y: "{date} lúc {time}",
            day_x_at_time_y: "{day} lúc {time}",
            yesterday_at_x: "Hôm qua, lúc {time}",
            x_minutes_ago: "{minutes} phút trước",
            one_minute_ago: "1 phút trước",
            a_moment_ago: "Vài giây trước",
            today_at_x: "Hôm nay lúc {time}",
            in_a_moment: "In a moment",
            in_a_minute: "In a minute",
            in_x_minutes: "In {minutes} minutes",
            later_today_at_x: "Lần đẩy tiếp: {time}",
            tomorrow_at_x: "Tomorrow at {time}",
            day0: "Chủ nhật",
            day1: "Thứ hai",
            day2: "Thứ ba",
            day3: "Thứ tư",
            day4: "Thứ năm",
            day5: "Thứ sáu",
            day6: "Thứ bảy",
            dayShort0: "CN",
            dayShort1: "T2",
            dayShort2: "T3",
            dayShort3: "T4",
            dayShort4: "T5",
            dayShort5: "T6",
            dayShort6: "T7",
            month0: "Tháng một",
            month1: "Tháng hai",
            month2: "Tháng ba",
            month3: "Tháng tư",
            month4: "Tháng năm",
            month5: "Tháng sáu",
            month6: "Tháng bảy",
            month7: "Tháng tám",
            month8: "Tháng chín",
            month9: "Tháng mười",
            month10: "Tháng mười một",
            month11: "Tháng mười hai",
            active_user_changed_reload_page: "The active user has changed. Reload the page for the latest version.",
            server_did_not_respond_in_time_try_again: "The server did not respond in time. Please try again.",
            oops_we_ran_into_some_problems: "Oops! Từ từ đã checker!",
            oops_we_ran_into_some_problems_more_details_console: "Oops! We ran into some problems. Please try again later. More error details may be in the browser console.",
            file_too_large_to_upload: "The file is too large to be uploaded.",
            uploaded_file_is_too_large_for_server_to_process: "The uploaded file is too large for the server to process.",
            files_being_uploaded_are_you_sure: "Files are still being uploaded. Are you sure you want to submit this form?",
            attach: "Attach files",
            rich_text_box: "Rich text box",
            close: "Đóng",
            link_copied_to_clipboard: "Link copied to clipboard.",
            text_copied_to_clipboard: "Text copied to clipboard.",
            loading: "Đang tải…",
            you_have_exceeded_maximum_number_of_selectable_items: "You have exceeded the maximum number of selectable items.",
            processing: "Processing",
            'processing...': "Processing…",
            showing_x_of_y_items: "Showing {count} of {total} items",
            showing_all_items: "Showing all items",
            no_items_to_display: "No items to display",
            number_button_up: "Increase",
            number_button_down: "Decrease",
            push_enable_notification_title: "Push notifications enabled successfully at Gái gọi | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam",
            push_enable_notification_body: "Thank you for enabling push notifications!"
        });
    </script>
    <div class="tooltip-content-inner">
        <div class="reactTooltip">
            <a href="#" class="reaction reaction--1" data-reaction-id="1"><i aria-hidden="true"></i><img
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    class="reaction-sprite js-reaction" alt="Like" title="Like" data-xf-init="tooltip"
                    data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
            <a href="#" class="reaction reaction--2" data-reaction-id="2"><i aria-hidden="true"></i><img
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    class="reaction-sprite js-reaction" alt="Love" title="Love" data-xf-init="tooltip"
                    data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
            <a href="#" class="reaction reaction--5" data-reaction-id="5"><i aria-hidden="true"></i><img
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    class="reaction-sprite js-reaction" alt="Sad" title="Sad" data-xf-init="tooltip"
                    data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
            <a href="#" class="reaction reaction--6" data-reaction-id="6"><i aria-hidden="true"></i><img
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    class="reaction-sprite js-reaction" alt="Angry" title="Angry" data-xf-init="tooltip"
                    data-extra-class="tooltip--basic tooltip--noninteractive" /></a>
        </div>
    </div>
    </script>
</body>
</html>
