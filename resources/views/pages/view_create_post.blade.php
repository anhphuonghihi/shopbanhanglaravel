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
                                        value="" class="input" placeholder="Tiêu đề" required>
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
                                    <input type="text" name="slug" value="" class="input" id="convert_slug" required
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
                                    <input type="file" required name="image" value="" class="input"  required
                                        placeholder="Ảnh đại diện">
                                </div>
                            </div>
                        </dd>
                    </dl>

                    <div class="formRow formRow--select">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label for="exampleInputPassword1">Tỉnh/Thành phố</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <select id="city" class="input" name="tinhthanhpho_id" required>
                                    <option value="" disabled selected>Chọn tỉnh thành</option>
                                </select>
                            </div>
                        </dd>
                    </div>
                    <div class="formRow formRow--select">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label for="exampleInputPassword1">Quận huyện</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <select id="district" class="input" name="quanhuyen_id" required>
                                    <option value="" disabled selected>Chọn quận huyện</option>
                                </select>
                            </div>
                        </dd>

                    </div>
                    <div class="formRow formRow--input">
                        <dt>
                            <div class="formRow-labelWrapper">
                                <label for="exampleInputPassword1">Khu vực</label>
                            </div>
                        </dt>
                        <dd>
                            <div>
                                <div class="inputGroup inputGroup--joined">
                                    <input type="text" name="khu_vuc" value="" class="input" required
                                        placeholder="Khu vực">
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
                                    <input type="text" name="nghe_danh" value="" class="input" required
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
                                    <input type="text" name="gia_di_khach" value="" class="input" required
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
                                    <input type="text" name="so_dien_thoai" value="" class="input" required
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
                                    <input type="text" name="nam_sinh" value="" class="input" required
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
                                    <input type="text" name="xuat_xu" value="" class="input" required
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
                                    <input type="text" name="pass" value="" class="input" required
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
                                    <input type="text" name="gia_nha_nghi" value="" class="input" required
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
                                    <input type="text" name="thoi_gian_di_lam" value="" class="input" required
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
                                    <input type="text" name="mo_ta_them" value="" class="input" required
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
                                    <input type="text" name="chieu_cao" value="" class="input" required
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
                                    <input type="text" name="can_nang" value="" class="input" required
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
                            <div class="formSubmitRow-controls"><button type="button" id="button--icon--save"
                                    class="button--primary button button--icon button--icon--save rippleButton"><span
                                        class="button-text" data-toggle="modal"
                                        data-target="#exampleModalCenterok">Lưu</span></button></div>
                        </div>
                        <div class="modal fade" id="exampleModalCenterok" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterokTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                @php
                                    $crr_tbl_dich_vu = DB::table('tbl_dich_vu')->where('id', '=', 1)->get();

                                @endphp
                                <div class="modal-content"style="background: #f3f3f3f2;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="margin: 0;    color: #341313f2;"
                                            id="exampleModalLongTitle">Quý khách đã check kỹ thông tin?<br>
                                            Xác nhận đăng bài với chi phí là
                                            {{ number_format($crr_tbl_dich_vu[0]->gia, 0, ',', '.') }}đ </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"
                                            class="button--primary button button--icon button--icon--save rippleButton"
                                            id="exampleModalCenteroksubmit"><span class="button-text" data-toggle="modal"
                                                data-target="#exampleModalCenterok">Chắc chắn</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>


            </div>

        </form>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>

        <script language="javascript">
            window.document.onload = function(e) {

                $('select').val(null).trigger("change");
                $('input').val(null);
            }
            document.getElementById("myBtn").addEventListener("click", displayDate);
        </script>
        <script type="text/javascript">
            document.querySelector('#danh_muc').addEventListener('input', function(e) {
                var input = e.target,
                    list = input.getAttribute('list'),
                    options = document.querySelectorAll('#' + list + ' option'),
                    hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
                    inputValue = input.value;
                hiddenInput.value = inputValue;
                for (var i = 0; i < options.length; i++) {
                    var option = options[i];
                    console.log(option);

                    if (option.innerText.trim() == inputValue.trim()) {
                        hiddenInput.value = option.getAttribute('data-value');

                        break;

                    }
                }

            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <style>
            action.active {
                color: #fff;
                background-color: #1b1e21;
                border-color: #1b1e21
            }

            .close {
                float: right;
                font-size: 1.5rem;
                font-weight: 700;
                line-height: 1;
                color: #000;
                text-shadow: 0 1px 0 #fff;
                opacity: .5
            }

            .close:focus,
            .close:hover {
                color: #000;
                text-decoration: none;
                opacity: .75
            }

            .close:not(:disabled):not(.disabled) {
                cursor: pointer
            }

            button.close {
                padding: 0;
                background-color: transparent;
                border: 0;
                -webkit-appearance: none
            }

            .modal-open {
                overflow: hidden
            }

            .modal {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1050;
                display: none;
                overflow: hidden;
                outline: 0
            }

            .modal-open .modal {
                overflow-x: hidden;
                overflow-y: auto
            }

            .modal-dialog {
                position: relative;
                width: auto;
                margin: .5rem;
                pointer-events: none
            }

            .modal.fade .modal-dialog {
                transition: -webkit-transform .3s ease-out;
                transition: transform .3s ease-out;
                transition: transform .3s ease-out, -webkit-transform .3s ease-out;
                -webkit-transform: translate(0, -25%);
                transform: translate(0, -25%)
            }

            .modal.show .modal-dialog {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0)
            }

            .modal-dialog-centered {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                min-height: calc(100% - (.5rem * 2))
            }

            .modal-content {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: .3rem;
                outline: 0
            }

            .modal-backdrop {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1040;
                background-color: #000
            }

            .modal-backdrop.fade {
                opacity: 0
            }

            .modal-backdrop.show {
                opacity: .5
            }

            .modal-header {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 1rem;
                border-bottom: 1px solid #e9ecef;
                border-top-left-radius: .3rem;
                border-top-right-radius: .3rem
            }

            .modal-header .close {
                padding: 1rem;
                margin: -1rem -1rem -1rem auto
            }

            .modal-title {
                margin-bottom: 0;
                line-height: 1.5
            }

            .modal-body {
                position: relative;
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 1rem
            }

            .modal-footer {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
                padding: 1rem;
                border-top: 1px solid #e9ecef
            }

            .modal-footer>:not(:first-child) {
                margin-left: .25rem
            }

            .modal-footer>:not(:last-child) {
                margin-right: .25rem
            }

            .modal-scrollbar-measure {
                position: absolute;
                top: -9999px;
                width: 50px;
                height: 50px;
                overflow: scroll
            }

            @media (min-width:576px) {
                .modal-dialog {
                    max-width: 500px;
                    margin: 1.75rem auto
                }

                .modal-dialog-centered {
                    min-height: calc(100% - (1.75rem * 2))
                }

                .modal-sm {
                    max-width: 300px
                }
            }

            @media (min-width:992px) {
                .modal-lg {
                    max-width: 800px
                }
            }

            .tooltip {
                position: absolute;
                z-index: 1070;
                display: block;
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                font-style: normal;
                font-weight: 400;
                line-height: 1.5;
                text-align: left;
                text-align: start;
                text-decoration: none;
                text-shadow: none;
                text-transform: none;
                letter-spacing: normal;
                word-break: normal;
                word-spacing: normal;
                white-space: normal;
                line-break: auto;
                font-size: .875rem;
                word-wrap: break-word;
                opacity: 0
            }

            .tooltip.show {
                opacity: .9
            }

            .tooltip .arrow {
                position: absolute;
                display: block;
                width: .8rem;
                height: .4rem
            }

            .tooltip .arrow::before {
                position: absolute;
                content: "";
                border-color: transparent;
                border-style: solid
            }

            .bs-tooltip-auto[x-placement^=top],
            .bs-tooltip-top {
                padding: .4rem 0
            }

            .bs-tooltip-auto[x-placement^=top] .arrow,
            .bs-tooltip-top .arrow {
                bottom: 0
            }
        </style>


    </div>
@endsection
