@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật lựa chon bài viết
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">

                    <div class="position-center">
                        @foreach ($tbl_select_item as $key => $edit_value)
                            <form role="form" action="{{ URL::to('/update-select-post/' . $edit_value->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên lựa chon</label>
                                    <input type="text" class="form-control" name="name" id="slug"
                                        placeholder="lựa chon" required value="{{ $edit_value->name }}">
                                </div>
                                <div class="form-group" id="color">
                                    <label for="exampleInputEmail1">Màu nền</label>
                                    <select class="form-control" value="{{ $edit_value->color }}" name="color"
                                        id="">
                                        <option value="orange">Orange</option>
                                        <option value="red">Red</option>
                                        <option value="royalBlue">RoyalBlue</option>
                                        <option value="green">Green</option>
                                    </select>
                                </div>

                                <div class="form-group" id="loai">
                                    <label for="exampleInputEmail1">Màu chữ</label>
                                    <select class="form-control" name="loai" id=""
                                        value="{{ $edit_value->loai }}">
                                        <option value="tong_quat">Tổng quát</option>
                                        <option value="vong_1">Vòng 1</option>
                                        <option value="vong_2">Vòng 2</option>
                                        <option value="vong_3">Vòng 3</option>
                                        <option value="vong_4">Vòng 4</option>
                                        <option value="service">Dịch vụ</option>
                                        <option value="cam_ket">Cam kết</option>
                                        <option value="khong_cam_ket">Không cam kết</option>
                                        <option value="phong_cach_phuc_vu">Phong cách dịch vụ</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_select_product" class="btn btn-info">Thêm danh
                                    mục</button>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var color = {!! json_encode($edit_value->color) !!};
                                        $("#color select").val(color);
                                        var loai = {!! json_encode($edit_value->loai) !!};
                                        $("#loai select").val(loai);
                                    });
                                </script>
                            </form>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
    @endsection
