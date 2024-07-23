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
    <title>{{ $meta_title }} | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam</title>
    <link rel="shortcut icon" href="{{ 'frontend/images/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <meta name="apple-mobile-web-app-title"
        content="{{ $meta_title }} | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>{{ $meta_title }} | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam</title>
    <link rel="manifest" href="/webmanifest.php">
    <meta name="theme-color" content="#2196f3">
    <meta name="msapplication-TileColor" content="#2196F3">
    <meta name="apple-mobile-web-app-title"
        content="{{ $meta_title }} | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam">
    <meta name="description" content="{{ $meta_desc }}">
    <meta property="og:description" content="{{ $meta_desc }}">
    <meta property="twitter:description" content="{{ $meta_desc }}">
    <link rel="canonical" href="{{ $url_canonical }}" />
    <link rel="alternate" type="application/rss+xml"
        title="RSS Feed For {{ $meta_title }} | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam"
        href="/forums/-/index.rss">
    <meta property="og:site_name"
        content="{{ $meta_title }} | Gái gọi Hà Nội | Gái gọi Sài Gòn | Cộng đồng checker Việt Nam">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $meta_title }}">
    <meta property="twitter:title" content="{{ $meta_title }}">
    <meta property="og:url" content="{{ $url_canonical }}" />
    <link rel="preload" href="{{ asset('dang_tin/fonts/materialdesignicons-webfont.woff2') }}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dang_tin/user/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dang_tin/user/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('dang_tin/user/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('dang_tin/user/css/css_home.css') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <style>
        @charset "UTF-8";

        /********* public:prefix_menu.less ********/
        .menuTrigger.menuTrigger--prefix {
            text-decoration: none
        }

        .menuPrefix,
        .menuPrefix.label--hidden {
            display: block;
            font-size: 1.3rem;
            cursor: default;
            padding: 10px
        }

        .menuPrefix.label--hidden,
        .menuPrefix.label--hidden.label--hidden {
            border: 1px solid rgba(255, 255, 255, 0.12)
        }

        .menuPrefix.menuPrefix--none,
        .menuPrefix.label--hidden.menuPrefix--none {
            color: #bcc0c7;
            text-decoration: none
        }

        /********* public:select2.less ********/
        .select2-hidden-accessible {
            border: 0 !important;
            clip: rect(0 0 0 0) !important;
            height: 1px !important;
            margin: -1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            width: 1px !important
        }

        .select2 {
            line-height: normal
        }

        .select2 *:focus {
            outline: none
        }

        .select2 .select2-selection {
            padding: 0;
            margin: 0;
            display: block
        }

        .select2 .select2-selection.input {
            cursor: text
        }

        .select2 .select2-selection ul {
            list-style: none;
            margin: 0;
            padding: 0 5px;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: inline-flex;
            flex-wrap: wrap;
            margin-bottom: 5px
        }

        .select2 .select2-selection ul>li.select2-selection__choice {
            float: left;
            font-size: 15px;
            border-radius: 4px;
            color: #bcc0c7;
            background: #484d56;
            border: 1px solid rgba(255, 255, 255, 0.12);
            display: inline-block;
            max-width: 100%;
            padding: 0 6px 1px;
            margin: 0 0 2px;
            border-radius: 3px;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
            cursor: default
        }

        .select2 .select2-selection ul>li.select2-selection__choice .select2-selection__choice__remove {
            font-size: 0;
            cursor: pointer
        }

        .select2 .select2-selection ul>li.select2-selection__choice .select2-selection__choice__remove:before {
            font: normal normal normal 18px/1 "Material Design Icons";
            font-size: 110%;
            font-weight: normal;
            line-height: inherit;
            width: auto;
            font-size: 15px;
            content: "\F0156\20";
            display: inline-block;
            text-align: center;
            opacity: .5;
            -webkit-transition: opacity .2s ease;
            transition: opacity .2s ease;
            margin-right: 3px;
            font-size: 14px
        }

        .select2 .select2-selection ul>li.select2-selection__choice .select2-selection__choice__remove:hover:before {
            opacity: 1
        }

        .select2 .select2-selection ul .select2-search {
            flex-grow: 1;
            min-width: 0
        }

        .select2 .select2-selection ul .select2-search input {
            font-size: 17px;
            color: #fff;
            background: #42464d;
            border-width: 1px;
            border-style: solid;
            border-top-color: rgba(255, 255, 255, 0.12);
            border-right-color: rgba(255, 255, 255, 0.12);
            border-bottom-color: rgba(255, 255, 255, 0.12);
            border-left-color: rgba(255, 255, 255, 0.12);
            border-radius: 4px;
            padding: 6px
        }

        .select2 .select2-selection ul .select2-search.select2-search--inline {
            float: left
        }

        .select2 .select2-selection ul .select2-search .select2-search__field {
            color: inherit;
            border: none;
            padding: 1px 0;
            margin-top: 5px;
            background: transparent;
            min-width: 100%;
            max-width: 100%
        }

        .select2 .select2-selection ul .select2-search .select2-search__field:focus {
            outline: none
        }

        .select2-container {
            display: inline-block
        }

        .select2-container.select2-container--disabled .input {
            color: #bcc0c7;
            background: rgba(188, 192, 199, 0.2)
        }

        .select2-container.select2-container--open .select2-dropdown {
            left: 0
        }

        .select2-container.select2-container--open .select2-dropdown.select2-dropdown--above {
            border-bottom: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .select2-container.select2-container--open .select2-dropdown.select2-dropdown--below {
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .select2-dropdown {
            border-radius: 4px;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            z-index: 1051;
            padding-top: 2px
        }

        .select2-dropdown.select2-dropdown--above {
            padding-bottom: 5px
        }

        .select2-dropdown.select2-dropdown--above .select2-results__option.loading-results:not(:last-child) {
            display: none
        }

        .select2-results__options {
            display: block;
            list-style: none;
            margin: 0;
            padding: 0
        }

        .select2-results>.select2-results__options {
            list-style: none;
            margin: 0;
            padding: 0;
            cursor: default;
            font-size: 1.3rem;
            color: #fff;
            background: #383c42;
            border: 0 solid rgba(255, 255, 255, 0.12);
            border-radius: 4px;
            min-width: 180px;
            max-width: 95%;
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.3);
            overflow: auto;
            max-height: 150px;
            max-height: max(150px, 50vh);
            -webkit-overflow-scrolling: touch
        }

        .select2-results>.select2-results__options li {
            padding: 10px;
            line-height: 24px
        }

        .select2-results>.select2-results__options li:before,
        .select2-results>.select2-results__options li:after {
            content: " ";
            display: table
        }

        .select2-results>.select2-results__options li:after {
            clear: both
        }

        .select2-results>.select2-results__options li.is-selected {
            background: #484d56
        }

        .select2-results>.select2-results__options li .autoCompleteList-icon {
            float: left;
            margin-right: 10px;
            width: 24px;
            height: 24px
        }

        .select2-results>.select2-results__options li[role="group"] {
            padding: 0
        }

        .select2-results__options.select2-results__options--nested {
            margin-left: .8em
        }

        .select2-results__options.select2-results__options--nested li{padding-right:0}.select2-results__group{display:block;padding:10px}.select2-results__option{user-select:none;-webkit-user-select:none}.select2-results__option.select2-results__option--highlighted{background:#484d56}.select2-results__option[aria-disabled="true"] {
            color: #bcc0c7
        }

        /********* public:sv_multiprefix_prefix_input.less ********/
        .select2-selection--single .select2-selection__arrow {
            float: right
        }

        .select2-search--dropdown .select2-search__field,
        .structItemContainer .select2-search__field {
            font-size: 17px
        }

        .structItemContainer .input.prefix--title .select2-selection__choice {
            padding-bottom: 4px !important
        }

        .input.prefix--title {
            margin-bottom: 5px !important
        }

        .input.prefix--title .select2-selection__choice {
            padding-top: 2px !important
        }

        .input.prefix--title .select2-search__field {
            font-size: 2.2rem;
            margin-bottom: -4px
        }

        .input.prefix--title .select2-search__field::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.4)
        }

        .input.prefix--title .select2-search__field::-moz-placeholder {
            color: rgba(255, 255, 255, 0.4)
        }

        .input.prefix--title .select2-search__field:-moz-placeholder {
            color: rgba(255, 255, 255, 0.4)
        }

        .input.prefix--title .select2-search__field:-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.4)
        }

        .input.prefix--title .select2-search__field:focus,
        .input.prefix--title .select2-search__field.is-focused {
            outline: 0;
            background: #383c42;
            --o-border-heavy: #39a1f4;
            --o-border-light: #128ff2
        }

        .input.prefix--title .select2-search__field:focus::-webkit-input-placeholder,
        .input.prefix--title .select2-search__field.is-focused::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.5)
        }

        .input.prefix--title .select2-search__field:focus::-moz-placeholder,
        .input.prefix--title .select2-search__field.is-focused::-moz-placeholder {
            color: rgba(255, 255, 255, 0.5)
        }

        .input.prefix--title .select2-search__field:focus:-moz-placeholder,
        .input.prefix--title .select2-search__field.is-focused:-moz-placeholder {
            color: rgba(255, 255, 255, 0.5)
        }

        .input.prefix--title .select2-search__field:focus:-ms-input-placeholder,
        .input.prefix--title .select2-search__field.is-focused:-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.5)
        }

        ul[id^=select2-js-SVMultiPrefixUniqueId][id$=-results] {
            overflow-x: auto;
            max-height: 31.250em
        }

        @media (max-width:650px) {
            ul[id^=select2-js-SVMultiPrefixUniqueId][id$=-results] {
                max-height: 25.000em
            }
        }

        @media (max-width:480px) {
            ul[id^=select2-js-SVMultiPrefixUniqueId][id$=-results] {
                max-height: 15.625em
            }
        }

        ul[id^=select2-js-SVMultiPrefixUniqueId][id$=-results] ul.select2-results__options--nested {
            max-width: 100% !important;
            box-shadow: none !important
        }

        ul[id^=select2-js-SVMultiPrefixUniqueId][id$=-results] li.select2-results__option[aria-selected="true"] .label {
            color: #bcc0c7;
            background: #484d56;
            border: 1px solid rgba(255, 255, 255, 0.12);
            display: inline-block;
            max-width: 100%;
            padding: 0 6px 1px;
            margin: 0 0 2px;
            border-radius: 3px
        }
    </style>
</head><!--/head-->

<body data-template="forum_list">
    <div id="jumpToTop"></div>
    <div class="uix_pageWrapper--fixed">
        <div class="p-pageWrapper" id="top">
            @include('pages.partials.header')

            @include('pages.partials.navbar')
            @include('pages.partials.menu_mobile')
            @if (!empty($rightbar))
                @include('pages.partials.section_links')
            @endif
            @include('pages.partials.body_header')
            <div class="p-body">

                @include('pages.partials.sidebar')

                <div class="p-body-inner ">
                    <!--XF:EXTRA_OUTPUT-->
                    @include('pages.partials.notices')

                    @include('pages.partials.welcome')
                    @if (!empty($breadcrumb))
                        <div class="breadcrumb">
                            @include('pages.partials.breadcrumb')
                        </div>
                    @endif

                    <div uix_component="MainContainer" class="uix_contentWrapper">
                        <a href="/threads/v-v-trien-khai-kenh-telegram-cho-checkerviet.125378/"><img
                                src="https://upload69.com/images/2024/04/22/bottele5a3e725ad9a0c41b.jpg"></a>
                        <div
                            class="p-body-main                             
                            @php if(!empty($rightbar))
                                echo 'p-body-main--withSidebar'; @endphp
                             ">
                            <div uix_component="MainContent" class="p-body-content">
                                <!-- ABOVE MAIN CONTENT -->
                                @yield('content')
                                <!-- BELOW MAIN CONTENT -->
                                @if (!empty($breadcrumb))
                                    <div class="breadcrumb p-breadcrumb--bottom">
                                        @include('pages.partials.breadcrumb')
                                    </div>
                                @endif
                            </div>
                            @if (!empty($rightbar))
                                @include('pages.partials.rightbar')
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            @include('pages.partials.footer')
        </div>
    </div>
    @include('pages.partials.script')
    @include('pages.partials.login')

</body>

</html>
