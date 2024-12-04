@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê hạng
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-11">
                </div>
                <div class="col-sm-1">
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
                            <th>Tên hạng</th>
                            <th>Màu</th>
                            <th>Điểm uy tín cần để lên rank</th>
                            <th>Giới hạn cao nhất</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($ranks as $key => $rank)
                            <tr>
                                <form action="{{ URL::to('/rank-edit/' . $rank->id) }}" method="post" class="update_mony">
                                    @php
                                        $i++;
                                    @endphp
                                    @csrf
                                    <td><i>{{ $i }}</i></td>
                                    <td>{{ $rank->name }}</td>
                                    <td>{{ $rank->color }}</td>
                                    <td>
                                        {{ $rank->gioi_han_min }}
                                    </td>
                                    <td>
                                        <input type="text" name="rank" min="0"
                                            value="{{ $rank->gioi_han_max }}">
                                    </td>
                                    <td>

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
                                                            Bạn có chắc chắn
                                                            xác
                                                            mức giới hạn cần để lên hạng không</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Đóng">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Đóng</button>
                                                        <button type="submit" class="btn btn-primary">
                                                            Xác nhận
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
