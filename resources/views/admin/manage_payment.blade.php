@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê nạp tiền
            </div>
            <div class="row w3-res-tb">
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>

                            <th>Thứ tự</th>
                            <th>Email người dùng</th>
                            <th>Tên người dùng</th>
                            <th>Ngày tháng đặt hàng</th>
                            <th>Tình trạng đơn hàng</th>

                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($payments as $key => $payment)
                            @php
                                $i++;
                                $user_name = DB::table('users')->where('id',$payment->user_id)->get();

                            @endphp
                            <tr>
                                <td><i>{{ $i }}</i></label></td>
                                <td><i>{{ $user_name[0]->email }}</i></label></td>
                                <td><i>{{ $user_name[0]->username }}</i></label></td>
                                <td><i>{{ $payment->so_tien }}</i></label></td>
                                <td><i>{{ $payment->created_at }}</i></label></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">

                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            {!! $payments->links() !!}
                        </ul>
                    </div>
                </div>
            </footer>

        </div>
    </div>
@endsection
