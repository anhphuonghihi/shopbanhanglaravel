<div uix_component="MainSidebar" class="p-body-sidebar">
    <div data-ocm-class="offCanvasMenu-backdrop"></div>
    <div class="uix_sidebarInner  uix_stickyBodyElement ">
        <div class="uix_sidebar--scroller">
            <div class="block" data-widget-id="36" data-widget-key="ggmbmn" data-widget-definition="new_threads">
                <div class="block-container">
                    <h3 class="block-minorHeader">
                        <a href="/whats-new/" rel="nofollow">Gái Gọi Miền Bắc mới
                            nhất</a>
                    </h3>
                    @php
                        $stiky_post_danh_muc_right = DB::table('tbl_post')
                            ->where('danh_muc_id', '=', 42)
                            ->orderBy('created_at', 'desc')
                            ->paginate(5);
                        $danh_muc_con = DB::table('danh_muc')->where('id_danh_muc_cha', '=', 42)->get();
                        $stiky_post_danh_muc_right_con = [];
                        if ($danh_muc_con->count() > 0) {
                            foreach ($danh_muc_con as $key => $danh_muc_item_con) {
                                array_push(
                                    $stiky_post_danh_muc_right_con,
                                    DB::table('tbl_post')
                                        ->where('danh_muc_id', '=', $danh_muc_item_con->id)
                                        ->orderBy('created_at', 'desc')
                                        ->get(),
                                );
                            }
                        }
                    @endphp
                    <ul class="block-body">
                        @foreach ($stiky_post_danh_muc_right as $key => $item)
                            @include('pages.partials.item_post')
                        @endforeach
                        @if (count($stiky_post_danh_muc_right_con) != 0)
                            @foreach ($stiky_post_danh_muc_right_con[0] as $key => $item)
                                @include('pages.partials.item_post')
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="block" data-widget-id="37" data-widget-key="ggmnmn" data-widget-definition="new_threads">
                <div class="block-container">
                    <h3 class="block-minorHeader">
                        <a href="/whats-new/" rel="nofollow">Gái Gọi Miền Nam mới
                            nhất</a>
                    </h3>
                    @php
                        $stiky_post_danh_muc_right = DB::table('tbl_post')
                            ->where('danh_muc_id', '=', 69)
                            ->orderBy('created_at', 'desc')
                            ->paginate(5);
                        $danh_muc_con = DB::table('danh_muc')->where('id_danh_muc_cha', '=', 69)->get();
                        $stiky_post_danh_muc_right_con = [];
                        if ($danh_muc_con->count() > 0) {
                            foreach ($danh_muc_con as $key => $danh_muc_item_con) {
                                array_push(
                                    $stiky_post_danh_muc_right_con,
                                    DB::table('tbl_post')
                                        ->where('danh_muc_id', '=', $danh_muc_item_con->id)
                                        ->orderBy('created_at', 'desc')
                                        ->get(),
                                );
                            }
                        }
                    @endphp
                    <ul class="block-body">
                        @foreach ($stiky_post_danh_muc_right as $key => $item)
                            @include('pages.partials.item_post')
                        @endforeach
                        @if (count($stiky_post_danh_muc_right_con) != 0)
                            @foreach ($stiky_post_danh_muc_right_con[0] as $key => $item)
                                @include('pages.partials.item_post')
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
