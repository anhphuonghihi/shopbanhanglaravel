@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Đổi mật khẩu
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


                <div class="panel-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="/change-rose">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Hoa hồng cũ là :</label>
                            <label class="col-md-1 control-label"> {{ $rose[0]->hoa_hong }}%</label>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Hoa hồng mới:</label>

                            <div class="col-md-6">
                                <input id="number_rose" class="form-control" max="50" min="1"
                                    name="number_rose" required value="{{ $rose[0]->hoa_hong }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
               

                                <a class="active styling-edit btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Thay đổi
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
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
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
