@if ($paginator->hasPages())
    <div class="block-outer-main">
        <nav class="pageNavWrapper pageNavWrapper--mixed ">



            <div class="pageNav  pageNav--skipEnd">


                @if ($paginator->onFirstPage())
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"
                        class="pageNav-jump pageNav-jump--prev">Trước</a>
                @endif

                <ul class="pageNav-main">

                    @if ($paginator->lastPage() > 5)
                        @foreach ($elements as $element)
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="pageNav-page pageNav-page--current " aria-current="page">
                                            <a>{{ $page }}</a>
                                        </li>
                                    @endif
                                    @if ($page == 2 && $paginator->currentPage() == 1)
                                        <li class="pageNav-page pageNav-page--later"><a
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                    @if ($page == 3 && $paginator->currentPage() == 1)
                                        <li class="pageNav-page pageNav-page--later"><a
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                    @if ($page == $paginator->currentPage() - 3)
                                        <li class="pageNav-page pageNav-page--later"><a
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                    @if ($page == $paginator->currentPage() - 2)
                                        <li class="pageNav-page pageNav-page--later"><a
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                    @if ($page == $paginator->currentPage() - 1)
                                        <li class="pageNav-page pageNav-page--later"><a
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach





                        <li class="pageNav-page pageNav-page--skip pageNav-page--skipEnd">
                            <a data-xf-init="tooltip" data-xf-click="menu" role="button" tabindex="0"
                                aria-expanded="false" aria-haspopup="true" data-original-title="Go to page"
                                id="js-XFUniqueId226">…</a>
                            @php
                                $danh_muc_id = Session::get('danh_muc_id');

                                $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get();
                            @endphp
                            <div class="menu menu--pageJump" data-menu="menu" aria-hidden="true">
                                <div class="menu-content">
                                    <h4 class="menu-header">Go to page</h4>
                                    <div class="menu-row" data-xf-init="page-jump"
                                        data-page-url="/forums/{{ $danh_muc[0]->danh_muc_slug }}.{{ $danh_muc[0]->id }}?page=%page%">
                                        <div class="inputGroup inputGroup--numbers">
                                            <div class="inputGroup inputGroup--numbers inputNumber inputGroup--joined"
                                                data-xf-init="number-box"><input type="number" pattern="\d*"
                                                    class="input input--number js-numberBoxTextInput input input--numberNarrow js-pageJumpPage"
                                                    value="2" min="1" max={{ $paginator->lastPage() }}
                                                    step="1" required="required"
                                                    data-menu-autofocus="true"><button type="button" tabindex="-1"
                                                    class="inputGroup-text inputNumber-button inputNumber-button--up js-up"
                                                    data-dir="up" title="Increase"
                                                    aria-label="Increase"></button><button type="button" tabindex="-1"
                                                    class="inputGroup-text inputNumber-button inputNumber-button--down js-down"
                                                    data-dir="down" title="Decrease" aria-label="Decrease"></button>
                                            </div>
                                            <span class="inputGroup-text"><button type="button"
                                                    class="js-pageJumpGo button rippleButton"><span
                                                        class="button-text">Tới</span></button></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>


                        <li class="pageNav-page "><a
                                href={{ $paginator->url($paginator->lastPage()) }}>{{ $paginator->lastPage() }}</a>
                        </li>
                    @else
                        @foreach ($elements as $element)
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="pageNav-page pageNav-page--current " aria-current="page">
                                            <a>{{ $page }}</a>
                                        </li>
                                    @else
                                        <li class="pageNav-page pageNav-page--later"><a
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endif




                </ul>
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"
                        class="pageNav-jump pageNav-jump--next">Tiếp</a>
                @else
                @endif



            </div>

            <div class="pageNavSimple">

                <a href={{ $paginator->url(1) }} class="pageNavSimple-el pageNavSimple-el--first"
                    data-xf-init="tooltip" data-original-title="First" id="js-XFUniqueId4">
                    <i aria-hidden="true"></i> <span class="u-srOnly">First</span>
                </a>
                @if ($paginator->onFirstPage())
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"
                        class="pageNavSimple-el pageNavSimple-el--prev">
                        <i aria-hidden="true"></i> Trước
                    </a>
                @endif



                <a class="pageNavSimple-el pageNavSimple-el--current" data-xf-init="tooltip" data-xf-click="menu"
                    role="button" tabindex="0" aria-expanded="false" aria-haspopup="true"
                    data-original-title="Go to page" id="js-XFUniqueId5">
                    {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
                </a>
                @php
                    $danh_muc_id = Session::get('danh_muc_id');

                    $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get();
                @endphp

                <div class="menu menu--pageJump" data-menu="menu" aria-hidden="true">
                    <div class="menu-content">
                        <h4 class="menu-header">Go to page</h4>
                        <div class="menu-row" data-xf-init="page-jump"
                            data-page-url="/forums/{{ $danh_muc[0]->danh_muc_slug }}.{{ $danh_muc[0]->id }}?page=%page%">
                            <div class="inputGroup inputGroup--numbers">
                                <div class="inputGroup inputGroup--numbers inputNumber inputGroup--joined"
                                    data-xf-init="number-box"><input type="number" pattern="\d*"
                                        class="input input--number js-numberBoxTextInput input input--numberNarrow js-pageJumpPage"
                                        value="2" min="1" max={{ $paginator->lastPage() }}
                                        step="1" required="required" data-menu-autofocus="true"><button
                                        type="button" tabindex="-1"
                                        class="inputGroup-text inputNumber-button inputNumber-button--up js-up"
                                        data-dir="up" title="Increase" aria-label="Increase"></button><button
                                        type="button" tabindex="-1"
                                        class="inputGroup-text inputNumber-button inputNumber-button--down js-down"
                                        data-dir="down" title="Decrease" aria-label="Decrease"></button></div>
                                <span class="inputGroup-text"><button type="button"
                                        class="js-pageJumpGo button rippleButton"><span
                                            class="button-text">Tới</span></button></span>
                            </div>
                        </div>
                    </div>
                </div>




                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"
                        class="pageNavSimple-el pageNavSimple-el--next">
                        Tiếp <i aria-hidden="true"></i>
                    </a>
                @else
                @endif
                <a href="{{ $paginator->url($paginator->lastPage()) }}"
                    class="pageNavSimple-el pageNavSimple-el--last" data-xf-init="tooltip"
                    data-original-title="Last">
                    <i aria-hidden="true"></i> <span class="u-srOnly">Last</span>
                </a>

            </div>

        </nav>



    </div>

@endif
