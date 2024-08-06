<div class="uix_sidebarNav">
    <div class="uix_sidebarNav__inner uix_stickyBodyElement">
        <div class="uix_sidebar--scroller">
            <ul class="uix_sidebarNavList js-offCanvasNavSource">
                <li class="uix_sidebarNavList__listItem">
                    <div
                        class="p-navEl  @php if (!empty($sidebar_active)){
                                    if ($sidebar_active=='home') {
                            echo 'is-selected';
                        }
                                }else{
                                    echo 'is-selected';
                                } @endphp ">
                        <div class="p-navEl__inner u-ripple rippleButton">
                            <a href="{{ url('/') }}" class="p-navEl-link " data-xf-key="1"
                                data-nav-id="EWRporta"><span>Trang
                                    chủ</span></a>
                        </div>
                        <div class="uix_sidebarNav__subNav">
                            <div class="uix_sidebarNav__subNavInner">
                            </div>
                        </div>
                    </div>
                </li>

                <li class="uix_sidebarNavList__listItem">
                    <div class="p-navEl  
                    @php if (!empty($sidebar_active)){
                        if ($sidebar_active=='forums') {
                            echo 'is-selected';
                        } 
                        } @endphp"
                        data-has-children="true">
                        <div class="p-navEl__inner u-ripple rippleButton">
                            <a href="{{ url('/forums') }}" class="p-navEl-link p-navEl-link--splitMenu "
                                data-nav-id="forums"><span>Diễn đàn</span></a>
                            <a data-xf-key="2" data-xf-click="menu" data-menu-pos-ref="< .p-navEl"
                                class="p-navEl-splitTrigger" role="button" tabindex="0" aria-label="Toggle expanded"
                                aria-expanded="false" aria-haspopup="true">
                            </a>
                            <a class="uix_sidebarNav--trigger" rel="nofollow"><i class="fa--xf far fa-chevron-down"
                                    aria-hidden="true"></i></a>
                        </div>
                        <div data-menu="false" class="uix_sidebarNav__subNav">
                            <div class="uix_sidebarNav__subNavInner">
                                <a href="/whats-new/news-post"
                                    class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy  rippleButton"
                                    data-nav-id="newPosts"><span>Bài viết mới</span></a>
                            </div>
                        </div>
                    </div>
                </li>
      
                <li class="uix_sidebarNavList__listItem">
                    <div
                        class="p-navEl   @php if (!empty($sidebar_active)) {
                        if ($sidebar_active=='new-post') {
                            echo 'is-selected';
                        }
                    } @endphp">
                        <div class="p-navEl__inner u-ripple rippleButton">
                            <a href="/whats-new/" class="p-navEl-link  " data-xf-key="3" data-nav-id="whatsNew"><span>Có
                                    gì mới?</span></a>
                        </div>
                        <div class="uix_sidebarNav__subNav">
                            <div class="uix_sidebarNav__subNavInner">
                            </div>
                        </div>
                    </div>
                </li>
                @php
                    $danh_muc_con = DB::table('danh_muc')->where('menu', '=', '1')->get();
                    // var_dump($count_danh_muc_shubmenu);
                @endphp
                @foreach ($danh_muc_con as $key => $danh_muc_con_item)
                    <li class="uix_sidebarNavList__listItem">
                        <div class="p-navEl  ">
                            <div class="p-navEl__inner u-ripple rippleButton rippleButton">
                                <a href="/forums/{{ $danh_muc_con_item->danh_muc_slug }}.{{ $danh_muc_con_item->id }}"
                                    class="p-navEl-link  " data-xf-key="4" data-nav-id="ggcchn"><span><span
                                            class="mdi mdi-{{ $danh_muc_con_item->icon_menu != '' ? $danh_muc_con_item->icon_menu : 'check-circle' }}"
                                            style="padding-right:1em;font-size:24px"></span>
                                        <font
                                            color="{{ $danh_muc_con_item->mau_chu_menu != '' ? $danh_muc_con_item->mau_chu_menu : 'white' }}"">
                                            {{ $danh_muc_con_item->ten_danh_muc }}</font>
                                    </span></a>
                                @php
                                    $danh_muc_shubmenu = DB::table('danh_muc')
                                        ->where('menu', '=', '2')
                                        ->where('id_danh_muc_cha', '=', $danh_muc_con_item->id)
                                        ->get();
                                    if ($danh_muc_shubmenu) {
                                        $count_danh_muc_shubmenu = $danh_muc_shubmenu->count();
                                    }
                                @endphp
                                @if ($count_danh_muc_shubmenu > 0 || $danh_muc_con_item->danh_muc_slug == 'gai-goi-ha-noi-gia-re')
                                    <a data-xf-key="6" data-xf-click="menu" data-menu-pos-ref="< .p-navEl"
                                        class="p-navEl-splitTrigger" role="button" tabindex="0"
                                        aria-label="Toggle expanded" aria-expanded="false" aria-haspopup="true">
                                    </a>
                                    <a class="uix_sidebarNav--trigger " rel="nofollow"><i
                                            class="fa--xf far fa-chevron-down" aria-hidden="true"></i></a>
                                @endif
                            </div>
                            @if ($count_danh_muc_shubmenu > 0 || $danh_muc_con_item->danh_muc_slug == 'gai-goi-ha-noi-gia-re')
                                <div data-menu="false" class="uix_sidebarNav__subNav">
                                    <div class="uix_sidebarNav__subNavInner">
                                        @foreach ($danh_muc_shubmenu as $key => $danh_muc_shubmenu_item)
                                            <a href="/forums/{{ $danh_muc_shubmenu_item->danh_muc_slug }}.{{ $danh_muc_shubmenu_item->id }}"
                                                class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy  rippleButton"
                                                data-nav-id="ggpc"><span>
                                                    <h3>{{ $danh_muc_shubmenu_item->ten_danh_muc }}</h3>
                                                </span></a>
                                        @endforeach
                                        @if ($danh_muc_con_item->danh_muc_slug == 'gai-goi-ha-noi-gia-re')
                                            <a href="/forums/{{ $danh_muc_shubmenu_item->danh_muc_slug }}.{{ $danh_muc_shubmenu_item->id }}"
                                                class="menu-linkRow u-ripple u-indentDepth0 js-offCanvasCopy  rippleButton"
                                                data-nav-id="ggpc"><span>
                                                    <h3>Cập nhật sau</h3>
                                                </span></a>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="uix_sidebarNav__subNav">
                                    <div class="uix_sidebarNav__subNavInner">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
