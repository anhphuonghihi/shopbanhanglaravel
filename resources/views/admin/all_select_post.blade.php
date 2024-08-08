@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê danh mục bài viết
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <form action="/all-select-post" method="get">
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
                            <th>Tên lựa chon</th>
                            <th>Màu nền</th>
                            <th>Loại</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($all_select_post as $key => $cate_post)
                            <tr>
                                @php
                                    $i++;
                                @endphp
                                <td><i>{{ $i }}</i></td>
                                </td>
                                <td>{{ $cate_post->name }}</td>
                                <td>{{ $cate_post->color }}</td>
                                <td>{{ $cate_post->loai }}</td>
                                <td>

                                    <a href="{{ URL::to('/edit-select-post/' . $cate_post->id) }}"
                                        class="active styling-edit" ui-toggle-class="">
                                        <i class="fa fa-pencil-square-o text-success text-active"></i></a>

                                    <form action="{{ URL::to('/delete-select-post/' . $cate_post->id) }}" method="get">
                                        @csrf
                                        <a class="active styling-edit" data-toggle="modal" data-target="#exampleModal{{ $i }}">
                                            <i class="fa fa-times text-danger text"></i>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel{{ $i }}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $i }}">Bạn có chắc chắn
                                                            xóa lựa chon này không</h5>
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
                                    </form>
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
                            {!! $all_select_post->links() !!}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
