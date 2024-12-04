@extends('layout_dang_tin')
@section('content')
    <div class="p-body-main  ">
        <div uix_component="MainContent" class="p-body-content">
            <!-- ABOVE MAIN CONTENT -->
            <div class="p-body-pageContent">
                <form action="/search-result" method="get" class="block">
                    @csrf
                    <div class="block-container">
                        <h2 class="block-tabHeader tabs hScroller" data-xf-init="h-scroller">
                            <span class="hScroller-scroll is-calculated" style="margin-bottom: -47px;">
                                <a href="/search/" class="tabs-tab is-active rippleButton">Tìm kiếm</a>
                            </span><i class="hScroller-action hScroller-action--end" aria-hidden="true"></i><i
                                class="hScroller-action hScroller-action--start" aria-hidden="true"></i>
                        </h2>
                        <div class="block-body">
                            <dl class="formRow formRow--input">
                                <dt>
                                    <div class="formRow-labelWrapper">
                                        <label class="formRow-label" for="_xfUid-1-1721660720">Tìm kiếm theo tiêu đề</label>
                                    </div>
                                </dt>
                                <dd>
                                    <ul class="inputList">
                                        <li><input type="search" class="input" name="keywords" autofocus="autofocus"
                                                id="_xfUid-1-1721660720"></li>
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
                                    <input type="text" class="input" data-xf-init="auto-complete" name="users"
                                        id="_xfUid-2-1721660720" autocomplete="off">
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
                                            data-xf-init="date-input " data-week-start="0" name="newer_than"
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
                                            data-xf-init="date-input " data-week-start="0" name="older_than"
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
                </form>
            </div>
            <!-- BELOW MAIN CONTENT -->
        </div>
    </div>
@endsection
