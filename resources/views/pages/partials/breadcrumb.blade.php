@if (!empty($breadcrumb))

    @if ($breadcrumb == 'huyen')
        <div class="pageContent">



            <ul class="p-breadcrumbs " itemscope="" itemtype="https://schema.org/BreadcrumbList">

                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a href="/forums/" itemprop="item">

                        <span itemprop="name">Diễn đàn</span>

                    </a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <span itemprop="name">{{ $meta_title }}</span>
                </li>

            </ul>



        </div>
    @else
        <div class="pageContent">



            <ul class="p-breadcrumbs " itemscope="" itemtype="https://schema.org/BreadcrumbList">

                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a href="/forums/" itemprop="item">

                        <span itemprop="name">Diễn đàn</span>

                    </a>
                    <meta itemprop="position" content="1">
                </li>
                @php
                    $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get();
                    $danh_muc_cha = DB::table('danh_muc')
                        ->where('id', '=', $danh_muc[0]->id_danh_muc_cha)
                        ->get();

                @endphp

                @if (!empty($danh_muc_cha[0]->id_danh_muc_cha == 0))
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a href="/forums/{{ $danh_muc[0]->danh_muc_slug }}.{{ $danh_muc[0]->id }}" itemprop="item">

                            <span itemprop="name">{{ $danh_muc[0]->ten_danh_muc }}</span>>

                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                @else
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a href="/forums/#{{ $danh_muc_cha[0]->danh_muc_slug }}.{{ $danh_muc_cha[0]->id }}"
                            itemprop="item">

                            <span itemprop="name">{{ $danh_muc_cha[0]->ten_danh_muc }}</span>

                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a href="/forums/{{ $danh_muc[0]->danh_muc_slug }}.{{ $danh_muc[0]->id }}" itemprop="item">

                            <span itemprop="name">{{ $danh_muc[0]->ten_danh_muc }}</span>

                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                @endif

            </ul>



        </div>
    @endif

@endif
