<div class="block-filterBar">
    <div class="filterBar">
        <ul class="filterBar-filters">
            @php
            @endphp
            @if (count($output) != 0)
                @if (count($output2array) != 0)
                    @foreach ($output2array as $item)
                        <li>
                            <div class="filterBar-filterToggle">
                                <span class="filterBar-filterToggle-label">Tiền tố:</span>

                                @php
                                    $nhan = DB::table('tbl_tag')
                                        ->where('id', '=', $item)
                                        ->where('la_label', '=', '1')
                                        ->get();
                                    foreach ($nhan as $row) {
                                        $name = $row->name;
                                        echo $name;
                                    }
                                @endphp
                            </div>
                        </li>
                    @endforeach
                @endif

                @if (!empty($direction))
                    <li>
                        <div class="filterBar-filterToggle">
                            <span class="filterBar-filterToggle-label">Sắp xếp theo:</span>
                            Tiêu đề <span>
                                @if ($direction == 'asc')
                                    tăng dần
                                @else
                                    giảm dần
                                @endif
                            </span>
                        </div>
                    </li>
                @endif
            @endif
        </ul>
        @php
            $danh_muc_id = $danh_muc_id;

            $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get();
        @endphp
        <a class="filterBar-menuTrigger" data-xf-click="menu" role="button" tabindex="0" aria-expanded="false"
            aria-haspopup="true">Filters</a>
        <div class="menu menu--wide" data-menu="menu" aria-hidden="true">
            <div class="menu-content">
                <h4 class="menu-header">Bộ lọc:</h4>
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
                            Sắp xếp:
                            <div class="inputGroup u-inputSpacer">
                                <span class="u-srOnly" id="ctrl_sort_by">Sort order</span>

                                <select name="order" class="input" aria-labelledby="ctrl_sort_by">
                                    <option value="title">Tiêu đề</option>

                                </select>

                                <span class="inputGroup-splitter"></span>
                                <span class="u-srOnly" id="ctrl_sort_direction">Sort
                                    direction</span>

                                <select name="direction" class="input" aria-labelledby="ctrl_sort_direction">
                                    <option value="desc" selected="selected">Giảm dần</option>
                                    <option value="asc">Tăng dần</option>

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
