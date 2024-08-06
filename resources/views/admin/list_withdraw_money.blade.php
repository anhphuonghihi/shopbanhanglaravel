@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê đơn xin rút tiền
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                    </div>
                </div>
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
                            <th style="width:100px;">Thứ tự</th>
                            <th>Số tài khoản</th>
                            <th>Tên ngân hàng</th>
                            <th>Chủ sở hữu tài khoản ngân hàng</th>
                            <th>Số tiền</th>
                            <th>Trạng thái</th>


                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($moneys as $key => $money)
                            <tr>
                                @php
                                    $i++;
                                @endphp
                                <td><i>{{ $i }}</i></td>
                                <td>{{ $money->stk }}</td>
                                <td>{{ $money->ten_ngan_hang }}</td>
                                <td>{{ $money->ten_tai_khoan_ngan_hang }}</td>
                                <td>{{ $money->so_tien }}</td>
                                <td>
                                    @if ($money->status == 2)
                                        Đã từ chối
                                    @elseif ($money->status == 1)
                                        Đã chuyển khoản
                                    @else
                                        <a class="active styling-edit" data-toggle="modal"
                                            data-target="#exampleModal{{ $i }}">
                                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel{{ $i }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $i }}">
                                                            Bạn có chắc chắn xác
                                                            nhận chuyển khoản không</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Đóng">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ URL::to('/agree-withdraw/' . $money->id) }}"
                                                            method="get">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Đóng</button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Xác nhận
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="active styling-edit" data-toggle="modal"
                                            data-target="#exampleModal2{{ $i }}">
                                            <i class="fa fa-times text-danger text"></i>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal2{{ $i }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel2{{ $i }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2{{ $i }}">
                                                            Bạn có chắc chắn từ
                                                            chối chuyển khoản không</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Đóng">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ URL::to('/refused-withdraw/' . $money->id) }}"
                                                            method="get">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Đóng</button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Xác nhận
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </td>
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
                            {!! $moneys->links() !!}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
