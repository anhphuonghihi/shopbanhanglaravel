@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê người dùng
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <form action="/users" method="get">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search" name='search'>
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
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
                            <th>Tên tài khoản</th>
                            <th>Email</th>
                            <th>Mã giới thiệu</th>
                            <th>Được giới thiệu bởi</th>
                            <th>Ví tiền</th>
                            <th>Uy tín</th>
                            <th>Dịch vụ sử dụng</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($admin as $key => $user)
                            <tr>
                                @php
                                    $i++;
                                @endphp
                                <td><i>{{ $i }}</i></td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }} <input type="hidden" name="admin_email"
                                        value="{{ $user->email }}">
                                </td>

                                <td>{{ $user->ma_gioi_thieu }}</td>
                                <td>{{ $user->duoc_gioi_thieu }}</td>
                                <td>
                                    {{ number_format($user->vi_tien, 0, ',', '.') . 'đ' }}
                                </td>
                                <td>{{ $user->uy_tin }}</td>
                                <td>
                                    @if ($user->dich_vu_su_dung == 0)
                                        Chưa đăng kí dịch vụ
                                    @else
                                        Đã đăng kí dịch vụ đăng bài
                                    @endif
                                </td>
                                <td>
                                    @if ($user->lock == 0)
                                        <form action="{{ URL::to('/lock-account/' . $user->id) }}" method="POST">
                                            @csrf <input type="submit" value="Khóa tài khoản"
                                                class="btn btn-sm btn-default">
                                        </form>
                                    @else
                                        <form action="{{ URL::to('/open-account/' . $user->id) }}" method="POST">
                                            @csrf <input type="submit" value="Mở tài khoản" class="btn btn-sm btn-default">
                                        </form>
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
                            {!! $admin->links() !!}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
