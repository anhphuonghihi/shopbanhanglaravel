@php
    $post_by_id_danh_muc = DB::table('tbl_post')
        ->where('danh_muc_id', '=', $danh_muc_item_con->id)
        ->get();
    $count_post_by_id_danh_muc = $post_by_id_danh_muc->count();
    $post_new = DB::table('tbl_post')
        ->where('danh_muc_id', '=', $danh_muc_item_con->id)
        ->orderby('created_at', 'desc')
        ->limit(1)
        ->get();
    $tbl_binh_luan = DB::table('tbl_binh_luan')
        ->where('danh_muc_id', '=', $danh_muc_item_con->id)
        ->orderby('created_at', 'desc')
        ->limit(1)
        ->get();
    $count_binh_luan_by_id_danh_muc = $tbl_binh_luan->count();
    if (!empty($tbl_binh_luan[0])) {
        $post_new = DB::table('tbl_post')
            ->where('id', '=', $tbl_binh_luan[0]->post_id)
            ->limit(1)
            ->get();
    }
    if (!empty($post_new[0])) {
        $user_postnew = DB::table('users')
            ->where('id', '=', $post_new[0]->user_id)
            ->limit(1)
            ->get();
    }
@endphp
<div
    class="node  node--depth2 th_node--overwriteTextStyling node--forum @php if (!empty($danh_muc_item_con -> id == 34))
        echo 'node--id22 th_node--hasBackground th_node--hasBackgroundImage ';
    if (!empty($danh_muc_item_con -> read_danh_muc == 0))
        echo 'node--unread';
    else{
        echo 'node--read';
    } @endphp">
    <div class="node-body">

        @if (!empty($danh_muc_item_con->icon))
            <span class="node-icon th_node--hasCustomIcon" aria-hidden="true">
                <i>
                    <span class="mdi mdi-@php echo $danh_muc_item_con -> icon; @endphp "></span>
                </i>
            </span>
        @else
            <span class="node-icon" aria-hidden="true">
                <i></i>
                <i class="fa--xf far fa-comments" aria-hidden="true"></i>
            </span>
        @endif
        <div class="node-main js-nodeMain">
            <h3 class="node-title">
                <a href="/forums/{{ $danh_muc_item_con->danh_muc_slug }}.{{ $danh_muc_item_con->id }}" data-xf-init=""
                    data-shortcut="node-description"
                    style="color: {{ $danh_muc_item_con->mau_chu ?? 'white' }} !important;">
                    {{ $danh_muc_item_con->ten_danh_muc }}</a>
                @if ($danh_muc_item_con->new == 1)
                    <span class="uix_newIndicator">Mới</span>
                @endif

            </h3>
            <div class="node-meta">
                <div class="node-statsMeta">
                    <dl class="pairs pairs--inline">
                        <dt><i class="fa--xf far fa-comment" aria-hidden="true"></i>
                        </dt>
                        <dd>58</dd>
                    </dl>
                    <dl class="pairs pairs--inline">
                        <dt><i class="fa--xf far fa-comments" aria-hidden="true"></i></dt>
                        <dd>1.9K</dd>
                    </dl>
                </div>
            </div>
            <div class="node-subNodesFlat">
                <span class="node-subNodesLabel">Diễn đàn
                    con:</span>
                <ol class="node-subNodeFlatList">
                    @php
                        $danh_muc_con_2 = DB::table('danh_muc')
                            ->where('id_danh_muc_cha', '=', $danh_muc_item_con->id)
                            ->get();

                    @endphp
                    @foreach ($danh_muc_con_2 as $key => $danh_muc_item_con_2)
                        @php
                            $post_by_id_danh_muc = DB::table('tbl_post')
                                ->where('danh_muc_id', '=', $danh_muc_item_con_2->id)
                                ->get();
                            $count_post_by_id_danh_muc += $post_by_id_danh_muc->count();
                            $tbl_binh_luan = DB::table('tbl_binh_luan')
                                ->where('danh_muc_id', '=', $danh_muc_item_con_2->id)
                                ->get();
                            $count_binh_luan_by_id_danh_muc += $tbl_binh_luan->count();
                        @endphp
                        @if ($danh_muc_item_con_2->id_danh_muc_cha == $danh_muc_item_con->id)
                            <li>
                                <a href="/forums/{{ $danh_muc_item_con_2->danh_muc_slug }}.{{ $danh_muc_item_con_2->id }}"
                                    class="subNodeLink  subNodeLink--forum "
                                    style="color: {{ $danh_muc_item_con_2->mau_chu ?? 'white' }} !important;">
                                    <i></i>
                                    <i class="fa--xf far fa-comments subNodeLink -icon" aria-hidden="true"></i><i></i>
                                    {{ $danh_muc_item_con_2->ten_danh_muc }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
        <div class="node-stats">
            <dl class="pairs pairs--rows">
                <dt>Chủ đề</dt>
                <dd>{{ $count_post_by_id_danh_muc }}</dd>
            </dl>
            <dl class="pairs pairs--rows">
                <dt>Bình luận</dt>
                <dd>{{ $count_binh_luan_by_id_danh_muc }}</dd>
            </dl>
        </div>
        <div class="node-extra">
            @if ($post_new->count() > 0)
                <div class="node-extra-icon">
                    <div class="threadThumbnailWrapper" id="thread-thumbnail-3904">
                        <a href="/threads/{{ $post_new[0]->post_slug }}.{{ $post_new[0]->id }}"
                            class="avatar avatar--xs avatar--default avatar--default--dynamic" data-user-id="46171"
                            data-xf-init="member-tooltip"
                            style="background-color: {{ $user_postnew[0]->background_color }}; color: #b9f6ca"
                            id="js-XFUniqueId12">
                            <span class="avatar-u46171-s" role="img" aria-label="incheck">
                                @php

                                    $user_name = $user_postnew[0]->username;
                                    echo strtoupper(substr($user_name, 0, -(strlen($user_name) - 1)));
                                @endphp
                            </span>
                        </a>
                    </div>
                </div>

                <div class="uix_nodeExtra__rows">
                    <div class="node-extra-row">
                        <a href="/threads/{{ $post_new[0]->post_slug }}.{{ $post_new[0]->id }}"
                            class="node-extra-title" title="{{ $post_new[0]->ten_bai_viet }}">
                            @php
                                if ($post_new->count() > 0) {
                                    $nhan = $post_new[0]->nhan;
                                    $listnhan = explode(',', $nhan, -1);
                                }
                            @endphp
                            @foreach ($listnhan as $key => $listnhan_item)
                                <span
                                    class="label label--@php $nhan = DB::table('tbl_tag')->where('name', '=', $listnhan_item)->where('la_label', '=', '1')->get(); 
                                    if($nhan->count()>0){
                                        echo $nhan[0]->color;
                                    } else{
                                        echo 'green';
                                    } @endphp"
                                    dir="auto">
                                    {{ $listnhan_item }}
                                </span>
                            @endforeach
                            {{ $post_new[0]->ten_bai_viet }}
                        </a>
                    </div>
                    <div class="node-extra-row">
                        <ul class="listInline listInline--bullet">
                            <li><time class="node-extra-date u-dt" dir="auto"">
                                    @php
                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $date1 = new DateTime('now');
                                        $date2 = new DateTime('2024-07-20T20:00:00');
                                        $vietnamese_days = [
                                            'Thứ Hai',
                                            'Thứ Ba',
                                            'Thứ Tư',
                                            'Thứ Năm',
                                            'Thứ Sáu',
                                            'Thứ Bảy',
                                            'Chủ Nhật',
                                        ];

                                        $diff = $date2->diff($date1);

                                        if ($diff->y) {
                                            # code...
                                            echo $date2->format('d');
                                            echo '/';
                                            echo $date2->format('m');
                                            echo '/';
                                            echo $date2->format('y');
                                        } elseif ($diff->m < 1) {
                                            $hours = $diff->h;

                                            $hours = $hours + $diff->days * 24;
                                            $hour_week = 24 * 7;
                                            $thu = $date2->format('N');
                                            if ($hour_week > $hours) {
                                                if ($hours < 48) {
                                                    if ($hours < 24) {
                                                        if ($hours == 0) {
                                                            echo $diff->i;
                                                            echo ' phút trước';
                                                        } else {
                                                            echo 'Hôm nay, lúc ';
                                                            echo $date2->format('h');
                                                            echo ':';
                                                            echo $date2->format('i');
                                                        }
                                                    } else {
                                                        echo 'Hôm qua, lúc ';
                                                        echo $date2->format('h');
                                                        echo ':';
                                                        echo $date2->format('i');
                                                    }
                                                } else {
                                                    echo $vietnamese_days[$thu];
                                                    echo ' lúc ';
                                                    echo $date2->format('h');
                                                    echo ':';
                                                    echo $date2->format('i');
                                                }
                                            } else {
                                                echo $date2->format('d');
                                                echo '/';
                                                echo $date2->format('m');
                                            }
                                        } else {
                                            echo $date2->format('d');
                                            echo '/';
                                            echo $date2->format('m');
                                        }
                                    @endphp</time></li>
                            <li class="node-extra-user"><a
                                    href="/threads/{{ $post_new[0]->post_slug }}.{{ $post_new[0]->id }}"
                                    class="username " dir="auto" data-user-id="514854" data-xf-init="member-tooltip"
                                    id="js-XFUniqueId3">{{ $user_name }}</a>
                                @php

                                @endphp
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
