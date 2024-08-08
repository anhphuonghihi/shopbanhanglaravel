@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm nhãn bài viết
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
                        <form role="form" action="{{ URL::to('/save-nhan-post') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên nhãn</label>
                                <input type="text" class="form-control"  name="name"
                                    id="slug" placeholder="nhãn" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Màu chữ</label>
                                <select class="form-control" name="color" id="">
                                    <option value="orange">Orange</option>
                                    <option value="red">Red</option>
                                    <option value="royalBlue">RoyalBlue</option>
                                    <option value="green">Green</option>
                                </select>
                            </div>

                            <button type="submit" name="add_nhan_product" class="btn btn-info">Thêm nhãn</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection
