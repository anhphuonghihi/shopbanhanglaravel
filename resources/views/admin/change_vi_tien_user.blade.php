@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thay đổi ví tiền
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
        

                    <form class="form-horizontal" method="POST" action="/change-vi-tien-user/{{ $user_id}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="vi_tien" class="col-md-4 control-label">Ví tiền</label>

                            <div class="col-md-6">
                                <input id="vi_tien" type="text" class="form-control" name="vi_tien"
                                    required value="{{ $user[0]->vi_tien}}">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Thay đổi ví tiền
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
