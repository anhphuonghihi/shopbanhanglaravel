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
                                dựng một cộng động checker mạnh mẽ. Góp phần đưa đến với tất cả các
                                anh em yêu tình dục trên khắp Việt Nam
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-container" data-widget-id="40" data-widget-key="gaigoihnf"
                        data-widget-definition="html">
                        <h3 class="block-minorHeader">Gái gọi Hà Nội</h3>
                        @php
                            $danh_muc_footer = DB::table('danh_muc')->where('id_danh_muc_cha', '=', 42)->paginate(5);
                        @endphp
                        <div class="block-body block-row">
                            @foreach ($danh_muc_footer as $key => $danh_muc_footer_item)
                                • <a
                                    href="/forums/{{ $danh_muc_footer_item->danh_muc_slug }}.{{ $danh_muc_footer_item->id }}/">{{ $danh_muc_footer_item->ten_danh_muc }}</a><br>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-container" data-widget-id="41" data-widget-key="ggsg"
                        data-widget-definition="html">
                        <h3 class="block-minorHeader">Gái Gọi Tp.Hồ Chí Minh</h3>
                        @php
                            $danh_muc_footer = DB::table('danh_muc')->where('id_danh_muc_cha', '=', 69)->paginate(5);
                        @endphp
                        <div class="block-body block-row">
                            @foreach ($danh_muc_footer as $key => $danh_muc_footer_item)
                                • <a
                                    href="/forums/{{ $danh_muc_footer_item->danh_muc_slug }}.{{ $danh_muc_footer_item->id }}/">{{ $danh_muc_footer_item->ten_danh_muc }}</a><br>
                            @endforeach
                        </div>
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
        <a href="/whats-new/news-post" class="button button--icon button--icon--bolt rippleButton"><span
                class="button-text">
                Bài viết mới
            </span></a>
    </div>
</div>
