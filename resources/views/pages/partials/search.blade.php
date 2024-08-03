<div class="uix_searchBar">
    <div class="uix_searchBarInner">
        <form action="/search-result" method="get" class="uix_searchForm">
            @csrf
            <a class="uix_search--close">
                <i class="fa--xf far fa-window-close" aria-hidden="true"></i>
            </a>
            <input type="text" class="input js-uix_syncValue uix_searchInput uix_searchDropdown__trigger"
                autocomplete="off" data-uixsync="search" name="keywords" placeholder="Tìm kiếm…" aria-label="Tìm kiếm"
                data-menu-autofocus="true">
            <a href="/search/" class="uix_search--settings u-ripple rippleButton" data-xf-key="/" aria-label="Tìm kiếm"
                aria-expanded="false" aria-haspopup="true" title="Tìm kiếm">
                <i class="fa--xf far fa-cog" aria-hidden="true"></i>
            </a>
            <span class=" uix_searchIcon">
                <i class="fa--xf far fa-search" aria-hidden="true"></i>
            </span>
        </form>
    </div>


    <a class="uix_searchIconTrigger p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search u-ripple rippleButton"
        aria-label="Tìm kiếm" aria-expanded="false" aria-haspopup="true" title="Tìm kiếm">
        <i aria-hidden="true"></i>
    </a>



    <a href="/search/"
        class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search u-ripple js-uix_minimalSearch__target rippleButton"
        data-xf-click="menu" aria-label="Tìm kiếm" aria-expanded="false" aria-haspopup="true" title="Tìm kiếm">
        <i aria-hidden="true"></i>
    </a>


    <div class="menu menu--structural menu--wide" data-menu="menu" aria-hidden="true">
        <form action="/search-result" method="get" class="menu-content">
            @csrf
            <h3 class="menu-header">Tìm kiếm</h3>

            <div class="menu-row">

                <input type="text" class="input js-uix_syncValue" name="keywords" data-uixsync="search"
                    placeholder="Tìm kiếm…" aria-label="Tìm kiếm" data-menu-autofocus="true">

            </div>


            <div class="menu-row">
                <label class="iconic"><input type="checkbox" name="c[title_only]" value="1"><i
                        aria-hidden="true"></i><span class="iconic-label">Chỉ tìm trong tiêu đề


                        <span tabindex="0" role="button" data-xf-init="tooltip" data-trigger="hover focus click"
                            data-original-title="Tags will also be searched" aria-label="Tags will also be searched"
                            id="js-XFUniqueId1">

                            <i class="fa--xf far fa-question-circle u-muted u-smaller" aria-hidden="true"></i>
                        </span></span></label>

            </div>

            <div class="menu-row">
                <div class="inputGroup">
                    <span class="inputGroup-text" id="ctrl_search_menu_by_member">By:</span>
                    <input type="text" class="input" name="c[users]" data-xf-init="auto-complete"
                        placeholder="Thành viên" aria-labelledby="ctrl_search_menu_by_member" autocomplete="off">
                </div>
            </div>
            <div class="menu-footer">
                <span class="menu-footer-controls">
                    <button type="submit"
                        class="button--primary button button--icon button--icon--search rippleButton"><span
                            class="button-text">Search</span></button>
                    <a href="/search/" class="button rippleButton"><span class="button-text">Tìm nâng cao…</span></a>
                </span>
            </div>
        </form>
    </div>


    <div class="menu menu--structural menu--wide uix_searchDropdown__menu" aria-hidden="true">
        <form action="/search-result method="get" class="menu-content">
            @csrf

            <input name="keywords" class="js-uix_syncValue" data-uixsync="search" placeholder="Tìm kiếm…"
                aria-label="Tìm kiếm" type="hidden">



            <div class="menu-row">
                <label class="iconic"><input type="checkbox" name="c[title_only]" value="1"><i
                        aria-hidden="true"></i><span class="iconic-label">Chỉ tìm trong tiêu đề


                        <span tabindex="0" role="button" data-xf-init="tooltip" data-trigger="hover focus click"
                            data-original-title="Tags will also be searched" aria-label="Tags will also be searched"
                            id="js-XFUniqueId2">

                            <i class="fa--xf far fa-question-circle u-muted u-smaller" aria-hidden="true"></i>
                        </span></span></label>

            </div>

            <div class="menu-row">
                <div class="inputGroup">
                    <span class="inputGroup-text">By:</span>
                    <input class="input" name="c[users]" data-xf-init="auto-complete" placeholder="Thành viên"
                        autocomplete="off">
                </div>
            </div>
            <div class="menu-footer">
                <span class="menu-footer-controls">
                    <button type="submit"
                        class="button--primary button button--icon button--icon--search rippleButton"><span
                            class="button-text">Search</span></button>
                    <a href="/search/" class="button rippleButton" rel="nofollow"><span
                            class="button-text">Advanced…</span></a>
                </span>
            </div>
        </form>
    </div>
</div>
