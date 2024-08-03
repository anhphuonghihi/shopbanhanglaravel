@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục sản phẩm
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
                        @foreach ($danh_muc_item as $key => $edit_value)
                            <form role="form" action="{{ URL::to('/update-category-post/' . $edit_value->id) }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" onkeyup="ChangeToSlug();" name="ten_danh_muc"
                                        id="slug" placeholder="danh mục" required
                                        value="{{ $edit_value->ten_danh_muc }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Màu chữ</label>
                                    <input type="color" class="form-control" name="mau_chu"
                                        id="colro"value="{{ $edit_value->ten_danh_muc }}" placeholder="red">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="danh_muc_slug" class="form-control" id="convert_slug"
                                        value="{{ $edit_value->ten_danh_muc }}" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group" id="id_danh_muc_cha">
                                    <label for="exampleInputPassword1">Danh mục cha</label>

                                    <input list="suggestionList" id="answerInput" class="form-control input-sm m-bot15"
                                        required>
                                    <datalist id="suggestionList">
                                        @foreach ($danh_muc as $key => $danh_muc_item)
                                            <option data-value="{{ $danh_muc_item->id }}">{{ $danh_muc_item->ten_danh_muc }}
                                            </option>
                                        @endforeach
                                    </datalist>
                                    <input type="hidden" id="answerInput-hidden" name="id_danh_muc_cha" required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="description" id="ckeditor1"
                                        placeholder="Mô tả sản phẩm">
                                       {{ $edit_value->description }}</textarea>
                                </div>
                                <div class="form-group" id="icon">
                                    <label for="exampleInputPassword1">Icon</label>
                                    <select name="icon" class="form-control input-sm m-bot15">
                                        <option value="">Mặc định</option>
                                        <option value="check-circle">Hình tròn</option>
                                        <option value="crown">Vương miện</option>

                                    </select>
                                </div>
                                <div class="form-group" id="new">
                                    <label for="exampleInputPassword1">Mới thêm</label>
                                    <select name="new" class="form-control input-sm m-bot15">
                                        <option value="0">Mới</option>
                                        <option value="1">Lâu</option>
                                    </select>
                                </div>
                                <div class="form-group" id="menu">
                                    <label for="exampleInputPassword1">Hiển thị trên menu</label>
                                    <select name="menu" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>
                                <div class="form-group" id="icon_menu">
                                    <label for="exampleInputPassword1">Icon menu</label>
                                    <select name="icon_menu" class="form-control input-sm m-bot15">
                                        <option value="">Mặc định</option>
                                        <option value="check-circle">Hình tròn</option>
                                        <option value="crown">Vương miện</option>

                                    </select>
                                </div>
                                <div class="form-group" id="mau_chu_menu">
                                    <label for="exampleInputEmail1">Màu chữ</label>
                                    <input type="color" class="form-control" name="mau_chu_menu" id="colro"
                                        placeholder="red">
                                </div>

                                <div class="form-group" id="show_trang_chu">
                                    <label for="exampleInputPassword1">Hiển thị trên trang chủ</label>
                                    <select name="show_trang_chu" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>

                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh
                                    mục</button>
                                @php
                                    $danh_muc_item_cha = DB::table('danh_muc')
                                        ->where('id', $edit_value->id_danh_muc_cha)
                                        ->get();
                                    $name = '';
                                    if (!empty($danh_muc_item_cha[0])) {
                                        $name = $danh_muc_item_cha[0]->ten_danh_muc;
                                    }
                                @endphp
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var id_danh_muc_cha = {!! json_encode($edit_value->id_danh_muc_cha) !!};
                                        var danh_muc_cha_name = {!! json_encode($name) !!};
                                        $("#answerInput-hidden").val(id_danh_muc_cha);
                                        $("#answerInput").val(danh_muc_cha_name);
                                        var icon_menu = {!! json_encode($edit_value->icon_menu) !!};
                                        $("#icon_menu select").val(icon_menu);
                                        var new_icon = {!! json_encode($edit_value->new) !!};
                                        $("#new select").val(new_icon);
                                        var icon = {!! json_encode($edit_value->icon) !!};
                                        $("#icon select").val(icon);
                                        var mau_chu_menu = {!! json_encode($edit_value->mau_chu_menu) !!};
                                        $("#mau_chu_menu select").val(mau_chu_menu);
                                        var show_trang_chu = {!! json_encode($edit_value->show_trang_chu) !!};
                                        $("#show_trang_chu select").val(show_trang_chu);
                                    });
                                </script>
                            </form>
                        @endforeach
                    </div>

                </div>
            </section>

        </div>
    @endsection
