@extends('layout_dang_tin')
@section('content')
    <div class="p-body-pageContent">
        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<span class="text-alert">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
        <form action="/create-thread" method="post" class="block create-thread" enctype="multipart/form-data">
            @csrf

            <div class="block-container">
                <div class="block-body">
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Tiêu đề</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="title" onkeyup="ChangeToSlug();" id="slug"
                                        value="" class="input" placeholder="Tiêu đề">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Nhãn</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" class="js-example-basic-multiple" name='nhan[]'>
                                        @php
                                            $nhan = DB::table('tbl_tag')->where('la_label', '=', '1')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color;
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Slug</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="slug" value="" class="input" id="convert_slug"
                                        placeholder="Slug">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Ảnh đại diện</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="file" required name="image" value="" class="input"
                                        placeholder="Ảnh đại diện">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <div class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label for="exampleInputPassword1">Khu vực</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input list="suggestionList" id="danh_muc" class="input" placeholder="Khu vực">
                                    <datalist id="suggestionList">
                                        @php
                                            $danh_muc = DB::table('danh_muc')->get();
                                        @endphp
                                        @foreach ($danh_muc as $key => $danh_muc_item)
                                            <option data-value="{{ $danh_muc_item->id }}">{{ $danh_muc_item->ten_danh_muc }}
                                            </option>
                                        @endforeach
                                    </datalist>
                                    <input type="hidden" id="danh_muc-hidden" name="danh_muc_id" class="input">
                                </div>
                            </div>
                        </dd>


                    </div>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Nghệ danh</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="nghe_danh" value="" class="input"
                                        placeholder="Nghệ danh">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Giá đi khách</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="gia_di_khach" value="" class="input"
                                        placeholder="Giá đi khách">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Số điện thoại</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="so_dien_thoai" value="" class="input"
                                        placeholder="Số điện thoại">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Năm sinh</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="nam_sinh" value="" class="input"
                                        placeholder="Năm sinh">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Xuất xứ</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="xuat_xu" value="" class="input"
                                        placeholder="Xuất xứ">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Pass</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="pass" value="" class="input"
                                        placeholder="Pass">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Giá nhà nghỉ</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="gia_nha_nghi" value="" class="input"
                                        placeholder="Giá nhà nghỉ">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Thời gian đi làm</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="thoi_gian_di_lam" value="" class="input"
                                        placeholder="Thời gian làm việc">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Mô tả thêm</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="mo_ta_them" value="" class="input"
                                        placeholder="Mô tả thêm">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Chiều cao</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="chieu_cao" value="" class="input"
                                        placeholder="Chiều cao">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Cân nặng</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="can_nang" value="" class="input"
                                        placeholder="Cân nặng">
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Tổng quát</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='tong_quat[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'tong_quat')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>

                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Vòng 1</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='vong_1[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'vong_1')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>

                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Vòng 2</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='vong_2[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'vong_2')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Vòng 3</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='vong_3[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'vong_3')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Vòng 4</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='vong_4[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'vong_4')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Phong cách phục vụ</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='phong_cach_phuc_vu[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')
                                                ->where('loai', '=', 'phong_cach_phuc_vu')
                                                ->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>

                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Dịch vụ</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='service[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'service')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>

                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Cam kết</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='cam_ket[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'cam_ket')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>

                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">Không cam kết</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <select multiple="multiple" required class="js-example-basic-multiple"
                                        name='khong_cam_ket[]'>
                                        @php
                                            $nhan = DB::table('tbl_select')->where('loai', '=', 'khong_cam_ket')->get();
                                            foreach ($nhan as $row) {
                                                $name = $row->name;
                                                $color = $row->color ?? 'red';
                                                echo "<option class='$color' value='$name'>$name</option>";
                                            }
                                        @endphp

                                    </select>
                                </div>

                            </div>
                        </dd>
                    </dl>
                    <dl class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label class="formRow-label">List Ảnh</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="file" required name="list_anh[]" value="" class="input"
                                        multiple>
                                </div>
                            </div>
                        </dd>
                    </dl>
                </div>


                <dl class="formRow formSubmitRow">
                    <dt></dt>
                    <dd>
                        <div class="formSubmitRow-main">
                            <div class="formSubmitRow-bar"></div>
                            <div class="formSubmitRow-controls"><button type="submit"
                                    class="button--primary button button--icon button--icon--save rippleButton"><span
                                        class="button-text">Lưu</span></button></div>
                        </div>
                    </dd>
                </dl>


            </div>

        </form>




    </div>
@endsection
