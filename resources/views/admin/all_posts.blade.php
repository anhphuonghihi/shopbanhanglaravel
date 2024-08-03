@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê sản phẩm
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <form action="{{ url('export-csv') }}" method="POST">
                        @csrf
                        <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">
                    </form>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <form action="/all-post" method="get">
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

                            <th>Tên sản phẩm</th>
                            <th>Slug</th>

                            <th>Hình sản phẩm</th>
                            <th>Danh mục</th>


                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($all_post as $key => $pro)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td><i>{{ $i }}</i></td>

                                <td>{{ $pro->ten_bai_viet }}</td>
                                <td>{{ $pro->post_slug }}</td>

                                <td> <img src="/public/uploads/product/{{ $pro->anh_dai_dien }}"
                                        data-url="/public/uploads/product/{{ $pro->anh_dai_dien }}" class="bbImage"
                                        data-zoom-target="1" style="" alt="KX7A5715-copy-2575030029cac193e.jpg"
                                        title="" width="" height="" loading="lazy">
                                </td>
                                <td>{{ $pro->ten_danh_muc }}</td>

                                <td>

                                    <a class="active styling-edit" data-toggle="modal"
                                        data-target="#exampleModal{{ $i }}">
                                        <i class="fa fa-times text-danger text"></i>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel{{ $i }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel{{ $i }}">Bạn
                                                        có
                                                        chắc chắn xóa bài
                                                        viết không</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Đóng">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <form action={{ URL::to('/delete-post/' . $pro->id) }} method="get">
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
                            {!! $all_post->links() !!}
                        </ul>
                    </div>
                </div>
            </footer>

        </div>
    </div>
@endsection
