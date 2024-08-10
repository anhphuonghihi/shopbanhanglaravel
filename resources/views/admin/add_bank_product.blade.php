@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm ngân hàng 
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
                        <form role="form" action="{{ URL::to('/save-bank-post') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số tài khoản ngân hàng</label>
                                <input type="text" class="form-control"  name="stk"
                                     placeholder="Số tài khoản" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Token</label>
                                <input type="text" class="form-control"  name="token"
                                     placeholder="Token" required>
                            </div>
                            <div class="form-group">
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
                                <input type="text" class="form-control"  name="password"
                                     placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên người dùng ngân hàng</label>
                                <input type="text" class="form-control"  name="acc_name"
                                     placeholder="acc_name" required>
                            </div>
                       
                            <button type="submit" name="add_bank_product" class="btn btn-info">Thêm lựa chon</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection
