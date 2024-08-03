<div class="block-filterBar">
    <div class="filterBar">
        <ul class="filterBar-filters">

@php

$x = 'http://url.example/search/?location=london&page_number=1';

$parsed = parse_url($x);
$query = $parsed['query'];

parse_str($query, $params);
foreach($params as $k => $v) {
    if ($v == '1') {
        unset($params[$k]);
    }
}

// unset($params['page_number']);
$string = http_build_query($params);
var_dump($string);

@endphp

            <li><a href="/forums/thong-bao.4/?last_days=14&amp;order=post_date&amp;direction=asc&amp;thread_type=discussion&amp;prefix_id[1]=2"
                    class="filterBar-filterToggle" data-xf-init="tooltip" data-original-title="Remove this filter"
                    id="js-XFUniqueId11">
                    <span class="filterBar-filterToggle-label">Tiền tố:</span>
                    THÔNG BÁO</a></li>
            <li><a href="/forums/thong-bao.4/?last_days=14&amp;order=post_date&amp;direction=asc&amp;thread_type=discussion&amp;prefix_id[0]=1"
                    class="filterBar-filterToggle" data-xf-init="tooltip" data-original-title="Remove this filter"
                    id="js-XFUniqueId12">
                    <span class="filterBar-filterToggle-label">Tiền tố:</span>
                    CHÚ Ý</a></li>

            <li><a href="/forums/thong-bao.4/?last_days=14&amp;order=post_date&amp;direction=asc&amp;prefix_id[0]=1&amp;prefix_id[1]=2"
                    class="filterBar-filterToggle" data-xf-init="tooltip" data-original-title="Remove this filter"
                    id="js-XFUniqueId13">
                    <span class="filterBar-filterToggle-label">Thread type:</span>
                    Discussion</a></li>

            <li><a href="/forums/thong-bao.4/?order=post_date&amp;direction=asc&amp;thread_type=discussion&amp;prefix_id[0]=1&amp;prefix_id[1]=2"
                    class="filterBar-filterToggle" data-xf-init="tooltip" data-original-title="Remove this filter"
                    id="js-XFUniqueId14">
                    <span class="filterBar-filterToggle-label">Last updated:</span>
                    14 days</a></li>

            <li><a href="/forums/thong-bao.4/?last_days=14&amp;thread_type=discussion&amp;prefix_id[0]=1&amp;prefix_id[1]=2"
                    class="filterBar-filterToggle" data-xf-init="tooltip"
                    data-original-title="Return to the default order" id="js-XFUniqueId15">
                    <span class="filterBar-filterToggle-label">Sort by:</span>
                    First message
                    <i class="fa--xf far fa-angle-up" aria-hidden="true"></i>
                    <span class="u-srOnly">Ascending</span>
                </a></li>

        </ul>
        @php
            $danh_muc_id = Session::get('danh_muc_id');

            $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get();
        @endphp
        <a class="filterBar-menuTrigger" data-xf-click="menu" role="button" tabindex="0" aria-expanded="false"
            aria-haspopup="true">Filters</a>
        <div class="menu menu--wide" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
                <h4 class="menu-header">Show only:</h4>
                <div class="js-filterMenuBody">
                    <form action="/forums/{{ $danh_muc[0]->danh_muc_slug }}.{{ $danh_muc[0]->id }}" method="get"
                        class="">

                        <div class="menu-row menu-row--separated">
                            <label for="ctrl_started_by">Nhãn:</label>

                            <select id="list" multiple="multiple" class="js-example-basic-multiple" name="nhan">
                                @php
                                    $nhan = DB::table('tbl_tag')->where('la_label', '=', '1')->get();
                                    foreach ($nhan as $row) {
                                        $name = $row->name;
                                        $id = $row->id;
                                        $color = $row->color;
                                        echo "<option class='$color' value='$id'>$name</option>";
                                    }
                                @endphp
                            </select>
                        </div>
                        <div class="menu-row menu-row--separated">
                            <label for="ctrl_last_updated">Last updated:</label>
                            <div class="u-inputSpacer">
                                <select name="last_days" class="input" id="ctrl_last_updated">
                                    <option value="-1">Any time</option>
                                    <option value="7">7 days</option>
                                    <option value="14">14 days</option>
                                    <option value="30">30 days</option>
                                    <option value="60">2 months</option>
                                    <option value="90">3 months</option>
                                    <option value="182">6 months</option>
                                    <option value="365">1 year</option>

                                </select>

                            </div>
                        </div>
                        <div class="menu-row menu-row--separated">
                            <label for="ctrl_thread_type">Thread type:</label>
                            <div class="u-inputSpacer">

                                <select name="thread_type" class="input" id="ctrl_thread_type">
                                    <option value="">(Mọi)</option>
                                    <option value="discussion">Discussion</option>
                                    <option value="poll">Poll</option>

                                </select>

                            </div>
                        </div>





                        <div class="menu-row menu-row--separated">
                            Sort by:
                            <div class="inputGroup u-inputSpacer">
                                <span class="u-srOnly" id="ctrl_sort_by">Sort order</span>

                                <select name="order" class="input" aria-labelledby="ctrl_sort_by">
                                    <option value="last_post_date" selected="selected">Last
                                        message
                                    </option>
                                    <option value="post_date">First message</option>
                                    <option value="title">Title</option>
                                    <option value="reply_count">Replies</option>
                                    <option value="view_count">Views</option>
                                    <option value="first_post_reaction_score">First message
                                        reaction score
                                    </option>

                                </select>

                                <span class="inputGroup-splitter"></span>
                                <span class="u-srOnly" id="ctrl_sort_direction">Sort
                                    direction</span>

                                <select name="direction" class="input" aria-labelledby="ctrl_sort_direction">
                                    <option value="desc" selected="selected">Descending</option>
                                    <option value="asc">Ascending</option>

                                </select>

                            </div>
                        </div>



                        <div class="menu-footer">
                            <span class="menu-footer-controls">
                                <button type="submit" class="button--primary button"><span
                                        class="button-text">Filter</span></button>
                            </span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
