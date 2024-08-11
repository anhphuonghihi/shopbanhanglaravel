{{-- <script type="text/javascript">
    function ChangeToSlugValue(slug) {

        console.log(slug);

        //Lấy text từ thẻ input title 

        slug = slug.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        return slug;
    }
</script> --}}
{{-- @php
    $tinhthanhpho = DB::table('tbl_tinhthanhpho')->orderBy('type')->get();

@endphp
@foreach ($tinhthanhpho as $item)
    @php

    @endphp
    INSERT INTO `danh_muc` (`id`, `id_danh_muc_cha`, `ten_danh_muc`, `mau_chu`, `icon`, `new`, `danh_muc_slug`, `menu`,
    `read_danh_muc`, `icon_menu`, `mau_chu_menu`, `description`, `show_trang_chu`) VALUES (NULL, 1, 'Gái gọi
    @php echo str_replace("Tỉnh ", "",str_replace("Thành phố  ", "",$item->name_city)); @endphp', 'yellow', NULL, 0, 'gai-goi-<script type="text/javascript">
        var nhan = {!! json_encode(str_replace("Tỉnh ", "",str_replace("Thành phố  ", "",$item->name_city))) !!};
        console.log(nhan);
        
        document.write(ChangeToSlugValue(nhan));
    </script>', 1, 0, '', 'orange', NULL, 0);
    <br>
@endforeach --}}

{{-- @php
    $tinhthanhpho = DB::table('tbl_tinhthanhpho')->orderBy('type')->get();

    $index = 2;
@endphp --}}
{{-- @foreach ($tinhthanhpho as $item_tp)
    @php
        $index++;

        $quanhuyen = DB::table('tbl_quanhuyen')
            ->where('matp', $item_tp->matp)
            ->orderBy('type')
            ->get();

    @endphp
     INSERT INTO `danh_muc` (`id`, `id_danh_muc_cha`, `ten_danh_muc`, `mau_chu`, `icon`, `new`, `danh_muc_slug`, `menu`,
    `read_danh_muc`, `icon_menu`, `mau_chu_menu`, `description`, `show_trang_chu`) VALUES (null, {{$index}}, 'Gái gọi
    @php echo str_replace("Tỉnh ", "",str_replace("Thành phố  ", "",$item_tp->name_city)); @endphp', 'yellow', NULL, 0, 'gai-goi-<script type="text/javascript">
        var nhan = {!! json_encode(str_replace('Tỉnh ', '', str_replace('Thành phố  ', '', $item_tp->name_city))) !!};
        console.log(nhan);
        document.write(ChangeToSlugValue(nhan));
    </script>', 1, 0, '', 'orange', NULL, 0); 
    @foreach ($quanhuyen as $item_qh)
        INSERT INTO `danh_muc` (`id`, `id_danh_muc_cha`, `ten_danh_muc`, `mau_chu`, `icon`, `new`, `danh_muc_slug`,
        `menu`,
        `read_danh_muc`, `icon_menu`, `mau_chu_menu`, `description`, `show_trang_chu`) VALUES (null,
        {{ $index }}, 'Gái gọi
        @php echo str_replace("'", "",str_replace("Tỉnh ", "",str_replace("Thành phố  ", "",$item_qh->name_quanhuyen))); @endphp', 'yellow', NULL, 0, 'gai-goi-<script type="text/javascript">
            var nhan = {!! json_encode(str_replace('Tỉnh ', '', str_replace('Thành phố  ', '', $item_qh->name_quanhuyen))) !!};
            console.log(nhan);
            document.write(ChangeToSlugValue(nhan));
        </script>', 2, 0, '', 'orange', NULL, 0);
        <br>
    @endforeach
@endforeach
--}}