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
<script type="text/javascript">
    function ChangeToSlug() {
        var slug;

        //Lấy text từ thẻ input title 
        slug = document.getElementById("slug").value;
        slug = slug.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('convert_slug').value = slug;
    }
</script>

<script src="{{ asset('dang_tin/user/js/prefix_menu.min.js') }}"></script>
<script src="{{ asset('dang_tin/user/js/select2.full.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".uix_sidebarTrigger").click(function() {
            $("html").toggleClass('uix_sidebarCollapsed');
        });
        $(".p-nav .uix_sidebarNav--trigger").click(function() {
            $("html").toggleClass('sidebarNav--active');
        });
        $(".uix_sidebarNavList__listItem .uix_sidebarNav--trigger").click(function() {
            $(this).toggleClass('is-expanded');
            $(this).parent().parent().parent().find(".uix_sidebarNav__subNav").first().toggleClass(
                'subNav--expand')

        });
        $(".p-navgroup-link--register").click(function(event) {
            event.preventDefault();
            $("#dang_ki").toggleClass('is-active');
        });
        $(".p-navgroup-link--logIn").click(function(event) {
            event.preventDefault();
            $("#dang_nhap").toggleClass('is-active');
        });
        $(".overlay-titleCloser.js-overlayClose").click(function() {
            $(".overlay-container").removeClass('is-active');
        });

        function formatState(state) {
            if (!state.id) {
                return state.text;
            }

            var text = state.text.split(',')
            var $state = $(
                `<span class="label label--red">${text[0]}</span>`
            );
            return $state;
        };
        $(document).ready(function() {
            $('#list').select2({
                placeholder: 'Kies formaat en bekijk prijzen',
                allowClear: true,
                minimumResultsForSearch: Infinity,
                multiple: true,
                templateResult: formatState
            });
        });
    });
</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
