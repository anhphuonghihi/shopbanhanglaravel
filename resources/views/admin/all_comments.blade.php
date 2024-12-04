@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê dịch vụ
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
                            <th>Tên người dùng</th>
                            <th>Nội dung bình luận</th>
                            <th>
                                Đánh giá độ uy tín bình luận
                            </th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($comments as $key => $comment)
                            <form action="{{ URL::to('/comment/' . $comment->id) }}" method="post">
                                @csrf
                                <tr>
                                    @php
                                        $i++;
                                        $user_name = DB::table('users')
                                            ->where('id', $comment->user_id)
                                            ->get();
                                    @endphp
                                    <td><i>{{ $i }}</i></td>
                                    <td><a href="/users/{{ $user_name[0]->id }}">{{ $user_name[0]->username }}</a></td>
                                    <td>
                                        @php
                                            echo htmlspecialchars_decode($comment->noi_dung_danh_gia);
                                        @endphp
                                    </td>
                                    <td>
                                        <input type="number" name="number" id="" min="0" max="10"
                                            value="{{ $comment->diem_uy_tin }}">
                                    </td>
                                    <td>

                                        <a class="active styling-edit" data-toggle="modal"
                                            data-target="#exampleModal{{ $comment->id }}">
                                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $comment->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel{{ $comment->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $comment->id }}">
                                                            Bạn có chắc chắn
                                                            đánh giá bình luận này không không</h5>
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
                                </tr>
                            </form>
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
                            {!! $comments->links() !!}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
