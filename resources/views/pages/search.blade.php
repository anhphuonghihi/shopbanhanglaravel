@extends('layout_dang_tin')
@section('content')
    <div class="p-body-main  ">
        <div uix_component="MainContent" class="p-body-content">
            <!-- ABOVE MAIN CONTENT -->
            <div class="p-body-pageContent">
                <form action="/search/search" method="post" class="block" data-xf-init="ajax-submit">
                    <input type="hidden" name="_xfToken" value="1721660720,90b83ab098150298062d4fc7a5ffd4f6">
                    <div class="block-container">
                        <h2 class="block-tabHeader tabs hScroller" data-xf-init="h-scroller">
                            <span class="hScroller-scroll is-calculated" style="margin-bottom: -47px;">
                                <a href="/search/" class="tabs-tab is-active rippleButton">Tìm tất cả</a>
                                <a href="/search/?type=post" class="tabs-tab rippleButton">Search threads</a>
                                <a href="/tags/" class="tabs-tab rippleButton">Search tags</a>
                            </span><i class="hScroller-action hScroller-action--end" aria-hidden="true"></i><i
                                class="hScroller-action hScroller-action--start" aria-hidden="true"></i>
                        </h2>
                        <div class="block-body">
                            <dl class="formRow formRow--input">
                                <dt>
                                    <div class="formRow-labelWrapper">
                                        <label class="formRow-label" for="_xfUid-1-1721660720">Từ khóa</label>
                                    </div>
                                </dt>
                                <dd>
                                    <ul class="inputList">
                                        <li><input type="search" class="input" name="keywords" autofocus="autofocus"
                                                id="_xfUid-1-1721660720"></li>
                                        <li>
                                            <label class="iconic"><input type="checkbox" name="c[title_only]"
                                                    value="1"><i aria-hidden="true"></i><span class="iconic-label">Chỉ
                                                    tìm trong tiêu đề
                                                    <span tabindex="0" role="button" data-xf-init="tooltip"
                                                        data-trigger="hover focus click"
                                                        data-original-title="Tags will also be searched"
                                                        aria-label="Tags will also be searched" id="js-XFUniqueId5">
                                                        <i class="fa--xf far fa-question-circle u-muted u-smaller"
                                                            aria-hidden="true"></i>
                                                    </span></span></label>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="formRow formRow--input">
                                <dt>
                                    <div class="formRow-labelWrapper">
                                        <label class="formRow-label" for="_xfUid-2-1721660720">Đăng bởi</label>
                                    </div>
                                </dt>
                                <dd>
                                    <input type="text" class="input" data-xf-init="auto-complete" name="c[users]"
                                        id="_xfUid-2-1721660720" autocomplete="off">
                                    <div class="formRow-explain">Dãn cách tên bằng dấu phẩy(,).</div>
                                </dd>
                            </dl>
                            <dl class="formRow formRow--input">
                                <dt>
                                    <div class="formRow-labelWrapper">
                                        <label class="formRow-label" for="_xfUid-3-1721660720">Mới hơn ngày</label>
                                    </div>
                                </dt>
                                <dd>
                                    <div class="inputGroup inputGroup--date inputGroup--joined inputDate">
                                        <input type="text" class="input input--date " autocomplete="off"
                                            data-xf-init="date-input " data-week-start="0" name="c[newer_than]"
                                            id="_xfUid-3-1721660720">
                                        <span class="inputGroup-text inputDate-icon js-dateTrigger"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="formRow formRow--input">
                                <dt>
                                    <div class="formRow-labelWrapper">
                                        <label class="formRow-label" for="_xfUid-4-1721660720">Older than</label>
                                    </div>
                                </dt>
                                <dd>
                                    <div class="inputGroup inputGroup--date inputGroup--joined inputDate">
                                        <input type="text" class="input input--date " autocomplete="off"
                                            data-xf-init="date-input " data-week-start="0" name="c[older_than]"
                                            id="_xfUid-4-1721660720">
                                        <span class="inputGroup-text inputDate-icon js-dateTrigger"></span>
                                    </div>
                                </dd>
                            </dl>
                            <input type="hidden" name="order" value="date">
                        </div>
                        <dl class="formRow formSubmitRow formSubmitRow--sticky is-sticky" data-xf-init="form-submit-row"
                            style="height: 56px;">
                            <dt></dt>
                            <dd>
                                <div class="formSubmitRow-main" style="bottom: 0px; left: 401.5px; width: 1200px;">
                                    <div class="formSubmitRow-bar"></div>
                                    <div class="formSubmitRow-controls"><button type="submit"
                                            class="button--primary button button--icon button--icon--search rippleButton"><span
                                                class="button-text">Search</span></button></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <input type="hidden" name="search_type" value="">
                </form>
            </div>
            <!-- BELOW MAIN CONTENT -->
        </div>
    </div>
@endsection
