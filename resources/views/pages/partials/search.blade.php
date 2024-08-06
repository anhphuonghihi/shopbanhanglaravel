<div class="uix_searchBar">
    <div class="uix_searchBarInner">
        <form action="/search-result" method="post" class="uix_searchForm">
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

</div>
