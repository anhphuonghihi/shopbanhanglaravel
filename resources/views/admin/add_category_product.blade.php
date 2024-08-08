@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục bài viết
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
                        <form role="form" action="{{ URL::to('/save-category-post') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();" name="ten_danh_muc"
                                    id="slug" placeholder="danh mục" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Màu chữ</label>
                                <input type="color" class="form-control" name="mau_chu" id="colro" placeholder="red">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug</label>
                                <input type="text" name="danh_muc_slug" class="form-control" id="convert_slug"
                                    placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Khu vực cha</label>

                                <input list="suggestionList" id="answerInput" class="form-control input-sm m-bot15">
                                <datalist id="suggestionList">
                                    @foreach ($danh_muc as $key => $danh_muc_item)
                                        <option data-value="{{ $danh_muc_item->id }}">{{ $danh_muc_item->ten_danh_muc }}
                                        </option>
                                    @endforeach
                                </datalist>
                                <input type="hidden" id="answerInput-hidden" name="id_danh_muc_cha">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="description" id="ckeditor1"
                                    placeholder="Mô tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Icon menu</label>
                                <select name="icon_menu" class="form-control input-sm m-bot15">
                                    <option value="">Mặc định</option>
                                    <option value="check-circle">Hình tròn</option>
                                    <option value="crown">Vương miện</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mới thêm</label>
                                <select name="new" class="form-control input-sm m-bot15">
                                    <option value="0">Mới</option>
                                    <option value="1">Lâu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị trên menu</label>
                                <select name="menu" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Icon</label>
                                <select name="icon" class="form-control input-sm m-bot15">
                                    <option value="">Mặc định</option>
                                    <option value="check-circle">Hình tròn</option>
                                    <option value="crown">Vương miện</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Màu chữ</label>
                                <input type="color" class="form-control" name="mau_chu_menu" id="colro"
                                    placeholder="red">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị trên trang chủ</label>
                                <select name="show_trang_chu" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>

                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection
