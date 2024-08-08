@extends('layout_dang_tin')
@section('content')
    <div class="p-body-pageContent">
        <div class="tabs tabs--standalone">
            <div class="hScroller" data-xf-init="h-scroller">
                <span class="hScroller-scroll is-calculated">
                    <a class="tabs-tab  is-active rippleButton"">Kết quả</a>
                </span><i class="hScroller-action hScroller-action--end" aria-hidden="true"></i><i
                    class="hScroller-action hScroller-action--start" aria-hidden="true"></i>
            </div>
        </div>
        <div class="block" data-widget-id="4" data-widget-key="whats_new_new_posts" data-widget-definition="new_posts">
            <div class="block-outer">

                {{ $post->links('vendor.pagination.default') }}
            </div>
            <div class="block-container">
                <div class="block-body">
                    <div class="structItemContainer">
                        @foreach ($post as $item)
                            <div class="structItem structItem--thread has-thumbnail has-thumbnail--real is-prefix34 is-prefix47 is-unread js-inlineModContainer js-threadListItem-125897"
                                data-author="Soursop">
                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">
                                        <div class="threadThumbnailWrapper" id="thread-thumbnail-125897">
                                            <div>
                                                <div class="lbContainer js-lbContainer lbContainer--inline avatar avatar--s"
                                                    data-xf-init="lightbox" data-lb-single-image="1" data-lb-universal="1">

                                                    <div id="js-lbImage-105263" class="lbContainer-zoomer"
                                                        data-src="{{ $item->anh_dai_dien }}" aria-label="Zoom">
                                                    </div>
                                                    <span class="heightHelper"></span><img
                                                        data-src="/public/uploads/product/{{ $item->anh_dai_dien }}"
                                                        src="/public/uploads/product/{{ $item->anh_dai_dien }}"
                                                        href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                        class="lbTrigger bbImage alignThumbnail" data-zoom-target="1"
                                                        alt="" loading="lazy" data-fancybox="lb-lb-thread-105263"
                                                        data-caption="<h4>TRANG VENUS - EM GÁI PG NGỌT NGÀO NHƯ CHOCOLATE - VÚ TO - MÔNG MẨY</h4><p><a href=&quot;https:&amp;#x2F;&amp;#x2F;xcheckerviet.biz&amp;#x2F;forums&amp;#x2F;gai-goi-sai-gon.31&amp;#x2F;#lb-thread-105263&quot; class=&quot;js-lightboxCloser&quot;></a></p>"
                                                        style="cursor: pointer;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">
                                    <div class="structItem-title"
                                        uix-href="/threads/{{ $item->post_slug }}.{{ $item->id }}">

                                        @php
                                            $nhan = $item->nhan;
                                            $listnhan = explode(',', $nhan);
                                        @endphp
                                        @foreach ($listnhan as $key => $listnhan_item)
                                            @php
                                                $nhan = DB::table('tbl_tag')
                                                    ->where('name', '=', $listnhan_item)
                                                    ->where('la_label', '=', '1')
                                                    ->get();
                                            @endphp
                                            <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}" class="labelLink"
                                                rel="nofollow"></a><a
                                                href="/threads/{{ $item->post_slug }}.{{ $item->id }}?nhan={{ $nhan[0]->id }}"
                                                class="labelLink" rel="nofollow"><span
                                                    class="label label--@php if($nhan->count()>0){
                                                        echo $nhan[0]->color;
                                                    } else{
                                                        echo 'green';
                                                    } @endphp"
                                                    dir="auto">
                                                    {{ $listnhan_item }}</span></a><span class="label-append">&nbsp;</span>
                                        @endforeach

                                        <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}" class=""
                                            data-tp-primary="on" data-xf-init="preview-tooltip"
                                            data-preview-url="/threads/trang-venus-em-gai-pg-ngot-ngao-nhu-chocolate-vu-to-mong-may.105263/preview"
                                            id="js-XFUniqueId134">{{ $item->ten_bai_viet }}</a>
                                    </div>

                                    @php
                                        $user_postnew = DB::table('users')
                                            ->where('id', '=', $item->user_id)
                                            ->limit(1)
                                            ->get();
                                        $tbl_binh_luan = DB::table('tbl_binh_luan')
                                            ->where('post_id', '=', $item->id)
                                            ->orderby('created_at', 'desc')
                                            ->get();
                                        $count_binh_luan_by_id_post = $tbl_binh_luan->count();
                                        if (!empty($tbl_binh_luan[0])) {
                                            $user_bl = DB::table('users')
                                                ->where('id', '=', $tbl_binh_luan[0]->user_id)
                                                ->limit(1)
                                                ->get();
                                        }
                                    @endphp
                                    <div class="structItem-minor">



                                        <ul class="structItem-parts">
                                            <li><a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                    class="username " dir="auto" data-user-id="158380"
                                                    data-xf-init="member-tooltip"
                                                    id="js-XFUniqueId135">{{ $user_postnew[0]->username }}</a>
                                            </li>
                                            <li class="structItem-startDate"><a
                                                    href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                    rel="nofollow"><time class="u-dt"> @php
                                                        $date2 = new DateTime($item->created_at);
                                                    @endphp
                                                        @include('pages.partials.time')</time></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="structItem-cell structItem-cell--meta" title="First message reaction score: 0">
                                    <dl class="pairs pairs--justified">
                                        <dt>Trả lời</dt>
                                        <dd>{{ $count_binh_luan_by_id_post }}</dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>Đọc</dt>
                                        <dd>{{ $item->view }}</dd>
                                    </dl>
                                </div>
                                <div class="structItem-cell structItem-cell--latest ">

                                    @if ($count_binh_luan_by_id_post > 0)
                                        <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}" rel="nofollow"><time
                                                class="structItem-latestDate u-dt" dir="auto">@php
                                                    if ($tbl_binh_luan[0]) {
                                                        $date2 = new DateTime($tbl_binh_luan[0]->created_at);
                                                    }
                                                @endphp
                                                @include('pages.partials.time')</time></a>
                                        <div class="structItem-minor">

                                            <a href="/members/anh-tuan-r.497523/" class="username " dir="auto"
                                                data-user-id="497523" data-xf-init="member-tooltip"
                                                id="js-XFUniqueId136">{{ $user_bl[0]->username }}
                                            </a>

                                        </div>
                                    @endif

                                </div>


                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    @if ($count_binh_luan_by_id_post > 0)
                                        <div class="structItem-iconContainer">
                                            <a href="/threads/{{ $item->post_slug }}.{{ $item->id }}"
                                                class="avatar avatar--xxs avatar--default avatar--default--dynamic"
                                                data-user-id="475821"
                                                data-xf-init="member-tooltip"style="background-color: {{ $user_bl[0]->background_color ?? 'red' }}; color: #b9f6ca"
                                                id="js-XFUniqueId149">
                                                <span class="avatar-u475821-s" role="img" aria-label="Little bird_ckv">
                                                    @php

                                                        $user_name = $user_bl[0]->username;
                                                        echo strtoupper(
                                                            substr($user_name, 0, -(strlen($user_name) - 1)),
                                                        );
                                                    @endphp</span>
                                            </a>


                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
            <div class="block-outer">

                {{ $post->links('vendor.pagination.default') }}
            </div>
        </div>
    </div>
@endsection
