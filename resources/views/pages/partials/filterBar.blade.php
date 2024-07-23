<div class="block-filterBar">
    <div class="filterBar">


        <a class="filterBar-menuTrigger" data-xf-click="menu" role="button" tabindex="0" aria-expanded="false"
            aria-haspopup="true">Filters</a>
        <div class="menu menu--wide" data-menu="menu" aria-hidden="true"
            data-href="/forums/hoi-checker-mien-bac.97/filters" data-load-target=".js-filterMenuBody">
            <div class="menu-content">
                <h4 class="menu-header">Show only:</h4>
                <div class="js-filterMenuBody">
                    <form action="/forums/hoi-checker-mien-bac.97/filters" method="post" class="">
                        <input type="hidden" name="_xfToken" value="1721485566,7ea5e231e7fd2b6e242bbecde36a0e6f">




                        <div class="menu-row menu-row--separated">
                            <label for="ctrl_started_by">Bắt đầu bởi:</label>

                            <select id="list" multiple="multiple" class="js-example-basic-multiple" name='nhan[]'>
                                @php
                                    $nhan = DB::table('tbl_tag')->where('la_label', '=', '1')->get();
                                    foreach ($nhan as $row) {
                                        $name = $row->name;
                                        $color = $row->color;
                                        echo "<option class='$color' value='$name'>$name</option>";
                                    }
                                @endphp
                            </select>
                        </div>




                        <div class="menu-row menu-row--separated">
                            <label for="ctrl_started_by">Bắt đầu bởi:</label>
                            <div class="u-inputSpacer">
                                <input type="text" class="input" data-xf-init="auto-complete" data-single="true"
                                    name="starter" maxlength="50" id="ctrl_started_by" autocomplete="off">
                            </div>
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
                        <input type="hidden" name="apply" value="1">


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
