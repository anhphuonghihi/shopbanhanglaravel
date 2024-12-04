@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật ngân hàng
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
                        @foreach ($tbl_admin_payment_item as $key => $edit_value)
                            <form role="form" action="{{ URL::to('/update-bank-post/' . $edit_value->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số tài khoản ngân hàng</label>
                                    <input type="text" class="form-control" name="stk" placeholder="Số tài khoản"
                                        required value="{{ $edit_value->stk }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Token</label>
                                    <input type="text" class="form-control" name="token" placeholder="Token" required
                                        value="{{ $edit_value->token }}">
                                </div>
                                <div class="form-group" id="ten_ngan_hang">
                                    <label for="exampleInputEmail1">Tên ngân hàng</label>
                                    <select class="form-control" name="ten_ngan_hang" id="">
                                        <option value="BIDV">BIDV</option>
                                        <option value="ACB">ACB</option>
                                        <option value="TPBANK">TPBANk</option>
                                        <option value="VIETCOMBANK">VIETCOMBANK</option>
                                        <option value="TECHCOMBANK">TECHCOMBANK</option>
                                        <option value="MBBANK">MBBANK</option>
                                        <option value="VIETINBANK">VIETINBANK</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Password" value="{{ $edit_value->password }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên người dùng ngân hàng</label>
                                    <input type="text" class="form-control" name="acc_name" placeholder="acc_name"  value="{{ $edit_value->acc_name }}"
                                        required>
                                </div>
                                <button type="submit" name="add_bank_product" class="btn btn-info">Thêm danh
                                    mục</button>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var ten_ngan_hang = {!! json_encode($edit_value->ten_ngan_hang) !!};
                                        $("#ten_ngan_hang bank").val(ten_ngan_hang);
                                    });
                                </script>
                            </form>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
    @endsection
