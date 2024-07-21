@extends('layout_dang_tin')

@section('content')
    <div class="p-body-pageContent">



        <div class="block uix_nodeList block--category ">

            <div class="block-container">

                <div class="uix_block-body--outer">
                    <div class="block-body">

                        @php
                            $danh_muc_con = DB::table('danh_muc')
                                ->where('id_danh_muc_cha', '=', $danh_muc_id)
                                ->get();
                        @endphp
                        @foreach ($danh_muc_con as $key => $danh_muc_item_con)
                            @include('pages.partials.forum')
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


        <div class="block " data-xf-init="" data-type="thread" data-href="/inline-mod/">

            <div class="block-outer"></div>

            <div class="block-container uix_discussionList">


                <div class="block-filterBar">
                    <div class="filterBar">


                        <a class="filterBar-menuTrigger" data-xf-click="menu" role="button" tabindex="0"
                            aria-expanded="false" aria-haspopup="true">Filters</a>
                        <div class="menu menu--wide" data-menu="menu" aria-hidden="true"
                            data-href="/forums/hoi-checker-mien-bac.97/filters" data-load-target=".js-filterMenuBody">
                            <div class="menu-content">
                                <h4 class="menu-header">Show only:</h4>
                                <div class="js-filterMenuBody">
                                    <form action="/forums/hoi-checker-mien-bac.97/filters" method="post" class="">
                                        <input type="hidden" name="_xfToken"
                                            value="1721485566,7ea5e231e7fd2b6e242bbecde36a0e6f">




                                        <div class="menu-row menu-row--separated">
                                            <label for="ctrl_started_by">Bắt đầu bởi:</label>

                                            <select id="list" multiple="multiple" class="js-example-basic-multiple">
                                                <option value="None"><span class="label label--red">CHÚ Ý</span></option>
                                                <option id="one" value="1">One</option>
                                                <option value="2">Two</option>
                                            </select>
                                        </div>




                                        <div class="menu-row menu-row--separated">
                                            <label for="ctrl_started_by">Bắt đầu bởi:</label>
                                            <div class="u-inputSpacer">
                                                <input type="text" class="input" data-xf-init="auto-complete"
                                                    data-single="true" name="starter" maxlength="50" id="ctrl_started_by"
                                                    autocomplete="off">
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
                                                    <option value="last_post_date" selected="selected">Last message
                                                    </option>
                                                    <option value="post_date">First message</option>
                                                    <option value="title">Title</option>
                                                    <option value="reply_count">Replies</option>
                                                    <option value="view_count">Views</option>
                                                    <option value="first_post_reaction_score">First message reaction score
                                                    </option>

                                                </select>

                                                <span class="inputGroup-splitter"></span>
                                                <span class="u-srOnly" id="ctrl_sort_direction">Sort direction</span>

                                                <select name="direction" class="input"
                                                    aria-labelledby="ctrl_sort_direction">
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




                <div class="block-body">

                    <div class="structItemContainer">













                        <div class="structItemContainer-group js-threadList">






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none js-inlineModContainer js-threadListItem-123012"
                                data-author="bctt">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-123012">



                                            <a href="/members/bctt.481683/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="481683" data-xf-init="member-tooltip"
                                                style="background-color: #7cb342; color: #ccff90" id="js-XFUniqueId39">
                                                <span class="avatar-u481683-s" role="img" aria-label="bctt">B</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title"
                                        uix-href="/threads/tim-cho-xa-o-thuong-tin-ha-noi.123012/">


                                        <a href="/threads/tim-cho-xa-o-thuong-tin-ha-noi.123012/" class=""
                                            data-tp-primary="on" data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/tim-cho-xa-o-thuong-tin-ha-noi.123012/preview"
                                            id="js-XFUniqueId40">Tìm chỗ xả ở Thường Tín - Hà Nội</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/bctt.481683/" class="username " dir="auto"
                                                    data-user-id="481683" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId41">bctt</a></li>
                                            <li class="structItem-startDate"><a
                                                    href="/threads/tim-cho-xa-o-thuong-tin-ha-noi.123012/"
                                                    rel="nofollow"><time class="u-dt" dir="auto"
                                                        datetime="2024-02-05T10:26:57+0700" data-time="1707103617"
                                                        data-date-string="5/2/24" data-time-string="10:26"
                                                        title="5/2/24 lúc 10:26">5/2/24</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>4</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>1K</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">



                                    <a href="/threads/tim-cho-xa-o-thuong-tin-ha-noi.123012/latest" rel="nofollow"><time
                                            class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2024-06-25T01:43:21+0700" data-time="1719254601"
                                            data-date-string="25/6/24" data-time-string="01:43"
                                            title="25/6/24 lúc 01:43">25/6/24</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/kimochi998.510326/" class="username " dir="auto"
                                            data-user-id="510326" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId42">Kimochi998</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/kimochi998.510326/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="510326" data-xf-init="member-tooltip"
                                            style="background-color: #f44336; color: #ff8a80" id="js-XFUniqueId43">
                                            <span class="avatar-u510326-s" role="img"
                                                aria-label="Kimochi998">K</span>
                                        </a>

                                    </div>
                                </div>


                            </div>






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none is-prefix58 js-inlineModContainer js-threadListItem-126785"
                                data-author="linhnhung">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-126785">



                                            <a href="/members/linhnhung.506324/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="506324" data-xf-init="member-tooltip"
                                                style="background-color: #c0ca33; color: #f4ff81" id="js-XFUniqueId44">
                                                <span class="avatar-u506324-s" role="img"
                                                    aria-label="linhnhung">L</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title" uix-href="/threads/bac-ninh.126785/">



                                        <a href="/forums/hoi-checker-mien-bac.97/?prefix_id=58" class="labelLink"
                                            rel="nofollow"></a><a href="/forums/hoi-checker-mien-bac.97/?prefix_id=58"
                                            class="labelLink" rel="nofollow"><span class="label label--green"
                                                dir="auto">VIDEO</span></a>


                                        <a href="/threads/bac-ninh.126785/" class="" data-tp-primary="on"
                                            data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/bac-ninh.126785/preview" id="js-XFUniqueId45">bắc
                                            ninh</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/linhnhung.506324/" class="username " dir="auto"
                                                    data-user-id="506324" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId46">linhnhung</a></li>
                                            <li class="structItem-startDate"><a href="/threads/bac-ninh.126785/"
                                                    rel="nofollow"><time class="u-dt" dir="auto"
                                                        datetime="2024-06-05T11:32:14+0700" data-time="1717561934"
                                                        data-date-string="5/6/24" data-time-string="11:32"
                                                        title="5/6/24 lúc 11:32">5/6/24</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>0</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>487</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">





                                    <a href="/threads/bac-ninh.126785/latest" rel="nofollow"><time
                                            class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2024-06-05T11:32:14+0700" data-time="1717561934"
                                            data-date-string="5/6/24" data-time-string="11:32"
                                            title="5/6/24 lúc 11:32">5/6/24</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/linhnhung.506324/" class="username " dir="auto"
                                            data-user-id="506324" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId47">linhnhung</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/linhnhung.506324/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="506324" data-xf-init="member-tooltip"
                                            style="background-color: #c0ca33; color: #f4ff81" id="js-XFUniqueId48">
                                            <span class="avatar-u506324-s" role="img" aria-label="linhnhung">L</span>
                                        </a>

                                    </div>
                                </div>


                            </div>






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none js-inlineModContainer js-threadListItem-125122"
                                data-author="Hoilamghd">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-125122">



                                            <a href="/members/hoilamghd.495158/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="495158" data-xf-init="member-tooltip"
                                                style="background-color: #0277bd; color: #80d8ff" id="js-XFUniqueId49">
                                                <span class="avatar-u495158-s" role="img"
                                                    aria-label="Hoilamghd">H</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title" uix-href="/threads/trao-doi-mbbg-tai-tphd.125122/">


                                        <a href="/threads/trao-doi-mbbg-tai-tphd.125122/" class=""
                                            data-tp-primary="on" data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/trao-doi-mbbg-tai-tphd.125122/preview"
                                            id="js-XFUniqueId50">Trao đổi MBBG tại TpHd</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/hoilamghd.495158/" class="username " dir="auto"
                                                    data-user-id="495158" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId51">Hoilamghd</a></li>
                                            <li class="structItem-startDate"><a
                                                    href="/threads/trao-doi-mbbg-tai-tphd.125122/" rel="nofollow"><time
                                                        class="u-dt" dir="auto" datetime="2024-04-14T01:09:53+0700"
                                                        data-time="1713031793" data-date-string="14/4/24"
                                                        data-time-string="01:09"
                                                        title="14/4/24 lúc 01:09">14/4/24</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>1</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>473</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">



                                    <a href="/threads/trao-doi-mbbg-tai-tphd.125122/latest" rel="nofollow"><time
                                            class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2024-05-31T07:15:59+0700" data-time="1717114559"
                                            data-date-string="31/5/24" data-time-string="07:15"
                                            title="31/5/24 lúc 07:15">31/5/24</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/trustmen.386343/" class="username " dir="auto"
                                            data-user-id="386343" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId52">Trustmen</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/trustmen.386343/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="386343" data-xf-init="member-tooltip"
                                            style="background-color: #2196f3; color: #bbdefb" id="js-XFUniqueId53">
                                            <span class="avatar-u386343-s" role="img" aria-label="Trustmen">T</span>
                                        </a>

                                    </div>
                                </div>


                            </div>






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none js-inlineModContainer js-threadListItem-124963"
                                data-author="damvodoi123">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-124963">



                                            <a href="/members/damvodoi123.178850/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="178850" data-xf-init="member-tooltip"
                                                style="background-color: #ffc107; color: #ffe57f" id="js-XFUniqueId54">
                                                <span class="avatar-u178850-s" role="img"
                                                    aria-label="damvodoi123">D</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title" uix-href="/threads/sao-ko-co-yen-bai-ae-nhi.124963/">


                                        <a href="/threads/sao-ko-co-yen-bai-ae-nhi.124963/" class=""
                                            data-tp-primary="on" data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/sao-ko-co-yen-bai-ae-nhi.124963/preview"
                                            id="js-XFUniqueId55">Sao ko có Yên Bái ae nhỉ</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/damvodoi123.178850/" class="username " dir="auto"
                                                    data-user-id="178850" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId56">damvodoi123</a></li>
                                            <li class="structItem-startDate"><a
                                                    href="/threads/sao-ko-co-yen-bai-ae-nhi.124963/" rel="nofollow"><time
                                                        class="u-dt" dir="auto" datetime="2024-04-06T20:03:52+0700"
                                                        data-time="1712408632" data-date-string="6/4/24"
                                                        data-time-string="20:03"
                                                        title="6/4/24 lúc 20:03">6/4/24</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>1</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>281</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">



                                    <a href="/threads/sao-ko-co-yen-bai-ae-nhi.124963/latest" rel="nofollow"><time
                                            class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2024-05-06T20:43:14+0700" data-time="1715002994"
                                            data-date-string="6/5/24" data-time-string="20:43"
                                            title="6/5/24 lúc 20:43">6/5/24</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/rhojlund2023.493878/" class="username " dir="auto"
                                            data-user-id="493878" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId57">rhojlund2023</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/rhojlund2023.493878/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="493878" data-xf-init="member-tooltip"
                                            style="background-color: #ef5350; color: #ff8a80" id="js-XFUniqueId58">
                                            <span class="avatar-u493878-s" role="img"
                                                aria-label="rhojlund2023">R</span>
                                        </a>

                                    </div>
                                </div>


                            </div>






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none js-inlineModContainer js-threadListItem-123708"
                                data-author="hunterxt">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-123708">



                                            <a href="/members/hunterxt.486067/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="486067" data-xf-init="member-tooltip"
                                                style="background-color: #cddc39; color: #f4ff81" id="js-XFUniqueId59">
                                                <span class="avatar-u486067-s" role="img"
                                                    aria-label="hunterxt">H</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title" uix-href="/threads/anh-em-luu-y.123708/">


                                        <a href="/threads/anh-em-luu-y.123708/" class="" data-tp-primary="on"
                                            data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/anh-em-luu-y.123708/preview"
                                            id="js-XFUniqueId60">Anh em lưu ý!</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/hunterxt.486067/" class="username " dir="auto"
                                                    data-user-id="486067" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId61">hunterxt</a></li>
                                            <li class="structItem-startDate"><a href="/threads/anh-em-luu-y.123708/"
                                                    rel="nofollow"><time class="u-dt" dir="auto"
                                                        datetime="2024-02-29T21:00:37+0700" data-time="1709215237"
                                                        data-date-string="29/2/24" data-time-string="21:00"
                                                        title="29/2/24 lúc 21:00">29/2/24</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>0</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>278</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">





                                    <a href="/threads/anh-em-luu-y.123708/latest" rel="nofollow"><time
                                            class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2024-02-29T21:00:37+0700" data-time="1709215237"
                                            data-date-string="29/2/24" data-time-string="21:00"
                                            title="29/2/24 lúc 21:00">29/2/24</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/hunterxt.486067/" class="username " dir="auto"
                                            data-user-id="486067" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId62">hunterxt</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/hunterxt.486067/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="486067" data-xf-init="member-tooltip"
                                            style="background-color: #cddc39; color: #f4ff81" id="js-XFUniqueId63">
                                            <span class="avatar-u486067-s" role="img" aria-label="hunterxt">H</span>
                                        </a>

                                    </div>
                                </div>


                            </div>






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none js-inlineModContainer js-threadListItem-115195"
                                data-author="mincutess">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-115195">



                                            <a href="/members/mincutess.440272/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="440272" data-xf-init="member-tooltip"
                                                style="background-color: #f44336; color: #ff8a80" id="js-XFUniqueId64">
                                                <span class="avatar-u440272-s" role="img"
                                                    aria-label="mincutess">M</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title"
                                        uix-href="/threads/tim-cho-xa-o-lieu-xa-yen-my-hung-yen-cac-dai-ca-oi-bu-lam-roi.115195/">


                                        <a href="/threads/tim-cho-xa-o-lieu-xa-yen-my-hung-yen-cac-dai-ca-oi-bu-lam-roi.115195/"
                                            class="" data-tp-primary="on" data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/tim-cho-xa-o-lieu-xa-yen-my-hung-yen-cac-dai-ca-oi-bu-lam-roi.115195/preview"
                                            id="js-XFUniqueId65">tìm chỗ xả ở liêu xá yên mỹ hưng yên các đại ca ơi, bứ
                                            lắm rồi =((</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/mincutess.440272/" class="username " dir="auto"
                                                    data-user-id="440272" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId66">mincutess</a></li>
                                            <li class="structItem-startDate"><a
                                                    href="/threads/tim-cho-xa-o-lieu-xa-yen-my-hung-yen-cac-dai-ca-oi-bu-lam-roi.115195/"
                                                    rel="nofollow"><time class="u-dt" dir="auto"
                                                        datetime="2023-07-04T05:34:16+0700" data-time="1688423656"
                                                        data-date-string="4/7/23" data-time-string="05:34"
                                                        title="4/7/23 lúc 05:34">4/7/23</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>2K</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">



                                    <a href="/threads/tim-cho-xa-o-lieu-xa-yen-my-hung-yen-cac-dai-ca-oi-bu-lam-roi.115195/latest"
                                        rel="nofollow"><time class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2023-09-24T20:54:48+0700" data-time="1695563688"
                                            data-date-string="24/9/23" data-time-string="20:54"
                                            title="24/9/23 lúc 20:54">24/9/23</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/chichnatlonem.454274/" class="username " dir="auto"
                                            data-user-id="454274" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId67">Chichnatlonem</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/chichnatlonem.454274/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="454274" data-xf-init="member-tooltip"
                                            style="background-color: #ffa000; color: #ffe57f" id="js-XFUniqueId68">
                                            <span class="avatar-u454274-s" role="img"
                                                aria-label="Chichnatlonem">C</span>
                                        </a>

                                    </div>
                                </div>


                            </div>






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none js-inlineModContainer js-threadListItem-116210"
                                data-author="Ache">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-116210">



                                            <a href="/members/ache.311805/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="311805" data-xf-init="member-tooltip"
                                                style="background-color: #00695c; color: #a7ffeb" id="js-XFUniqueId69">
                                                <span class="avatar-u311805-s" role="img" aria-label="Ache">A</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title" uix-href="/threads/hi.116210/">


                                        <a href="/threads/hi.116210/" class="" data-tp-primary="on"
                                            data-xf-init="preview-tooltip" data-preview-url="/threads/hi.116210/preview"
                                            id="js-XFUniqueId70">Hi</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/ache.311805/" class="username " dir="auto"
                                                    data-user-id="311805" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId71">Ache</a></li>
                                            <li class="structItem-startDate"><a href="/threads/hi.116210/"
                                                    rel="nofollow"><time class="u-dt" dir="auto"
                                                        datetime="2023-07-29T22:01:22+0700" data-time="1690642882"
                                                        data-date-string="29/7/23" data-time-string="22:01"
                                                        title="29/7/23 lúc 22:01">29/7/23</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>0</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>457</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">





                                    <a href="/threads/hi.116210/latest" rel="nofollow"><time
                                            class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2023-07-29T22:01:22+0700" data-time="1690642882"
                                            data-date-string="29/7/23" data-time-string="22:01"
                                            title="29/7/23 lúc 22:01">29/7/23</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/ache.311805/" class="username " dir="auto"
                                            data-user-id="311805" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId72">Ache</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/ache.311805/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="311805" data-xf-init="member-tooltip"
                                            style="background-color: #00695c; color: #a7ffeb" id="js-XFUniqueId73">
                                            <span class="avatar-u311805-s" role="img" aria-label="Ache">A</span>
                                        </a>

                                    </div>
                                </div>


                            </div>






                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--none js-inlineModContainer js-threadListItem-115831"
                                data-author="kimhong">


                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">


                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-115831">



                                            <a href="/members/kimhong.344398/"
                                                class="avatar avatar--s avatar--default avatar--default--dynamic"
                                                data-user-id="344398" data-xf-init="member-tooltip"
                                                style="background-color: #c0ca33; color: #f4ff81" id="js-XFUniqueId74">
                                                <span class="avatar-u344398-s" role="img"
                                                    aria-label="kimhong">K</span>
                                            </a>



                                        </div>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">

                                    <div class="structItem-title" uix-href="/threads/nha-nghi-thao-nguyen.115831/">


                                        <a href="/threads/nha-nghi-thao-nguyen.115831/" class=""
                                            data-tp-primary="on" data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/nha-nghi-thao-nguyen.115831/preview"
                                            id="js-XFUniqueId75">Nhà nghỉ Thảo Nguyên</a>
                                    </div>

                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/members/kimhong.344398/" class="username " dir="auto"
                                                    data-user-id="344398" data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId76">kimhong</a></li>
                                            <li class="structItem-startDate"><a
                                                    href="/threads/nha-nghi-thao-nguyen.115831/" rel="nofollow"><time
                                                        class="u-dt" dir="auto" datetime="2023-07-21T13:03:44+0700"
                                                        data-time="1689919424" data-date-string="21/7/23"
                                                        data-time-string="13:03"
                                                        title="21/7/23 lúc 13:03">21/7/23</time></a></li>



                                        </ul>

                                    </div>
                                </div>



                                <div class="structItem-cell structItem-cell--meta"
                                    title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>0</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>2K</dd>
                                    </dl>
                                </div>



                                <div class="structItem-cell structItem-cell--latest ">





                                    <a href="/threads/nha-nghi-thao-nguyen.115831/latest" rel="nofollow"><time
                                            class="structItem-latestDate u-dt" dir="auto"
                                            datetime="2023-07-21T13:03:44+0700" data-time="1689919424"
                                            data-date-string="21/7/23" data-time-string="13:03"
                                            title="21/7/23 lúc 13:03">21/7/23</time></a>
                                    <div class="structItem-minor">

                                        <a href="/members/kimhong.344398/" class="username " dir="auto"
                                            data-user-id="344398" data-xf-init="member-tooltip"
                                            id="js-XFUniqueId77">kimhong</a>

                                    </div>

                                </div>



                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">

                                        <a href="/members/kimhong.344398/"
                                            class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                            data-user-id="344398" data-xf-init="member-tooltip"
                                            style="background-color: #c0ca33; color: #f4ff81" id="js-XFUniqueId78">
                                            <span class="avatar-u344398-s" role="img" aria-label="kimhong">K</span>
                                        </a>

                                    </div>
                                </div>


                            </div>




                        </div>

                    </div>

                </div>
            </div>

            <div class="block-outer block-outer--after">



                <div class="block-outer-opposite">

                    <a href="/login/" class="button--link button--wrap button rippleButton" data-xf-click="overlay"><span
                            class="button-text">
                            You must log in or register to post here.
                        </span></a>

                </div>

            </div>
        </div>












    </div>
@endsection
