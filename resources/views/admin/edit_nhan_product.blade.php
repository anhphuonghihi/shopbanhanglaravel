@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật nhãn bài viết
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
                        @foreach ($tbl_tag_item as $key => $edit_value)
                            <form role="form" action="{{ URL::to('/update-nhan-post/' . $edit_value->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhãn</label>
                                    <input type="text" class="form-control" name="name" id="slug"
                                        placeholder="nhãn" required value="{{ $edit_value->name }}">
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


                                <button type="submit" name="add_nhan_product" class="btn btn-info">Thêm danh
                                    mục</button>
                            </form>
                        @endforeach
                    </div>

                </div>
            </section>
            <script type="text/javascript">
                $(document).ready(function() {
                    var color = {!! json_encode($edit_value->color) !!};
                    $("#color select").val(color);
                });
            </script>

        </div>
    @endsection
