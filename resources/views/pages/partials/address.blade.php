<div class="node  node--depth2 th_node--overwriteTextStyling node--forum node--unread">
    <div class="node-body">

        <span class="node-icon" aria-hidden="true">
            <i></i>
            <i class="fa--xf far fa-comments" aria-hidden="true"></i>
        </span>
        <div class="node-main js-nodeMain">
            <div class="node-meta">
                <div class="node-statsMeta">
                </div>
            </div>
            <div class="node-subNodesFlat">
                <span class="node-subNodesLabel">Diễn đàn
                    con:</span>
                <ol class="node-subNodeFlatList">
                    @foreach ($danh_muc_con as $key => $danh_muc_item_con_2)
                        @php
                            $post_by_id_danh_muc = DB::table('tbl_post')
                                ->where('tinh_id', '=', $danh_muc_item->matp)
                                ->get();
                        @endphp

                        <li>
                            <a href="/address/huyen.{{ $danh_muc_item_con_2->maqh }}" class="subNodeLink  subNodeLink--forum">
                                <i></i>
                                <i class="fa--xf far fa-comments subNodeLink -icon" aria-hidden="true"></i><i></i>
                                {{ $danh_muc_item_con_2->name_quanhuyen }}
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>

<style>
    .node-subNodeFlatList>li{
        width: 25% !important;
    }
</style>
