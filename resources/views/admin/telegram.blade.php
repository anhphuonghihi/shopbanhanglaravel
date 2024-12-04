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
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:100px;">Thứ tự</th>
                            <th>Link dẫn cũ</th>
                            <th>Link dẫn mới</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($telegrams as $key => $telegram)
                            <tr>
                                <form action="{{ URL::to('/change-telegram/' . $telegram->id) }}" method="post"
                                    class="update_mony">
                                    @php
                                        $i++;
                                    @endphp
                                    @csrf
                                    <td><i>{{ $i }}</i></td>
                                    <td>{{ $telegram->link }}</td>
                                    <td>
                                        <input type="text" name="number_telegram" min="0"
                                            value="{{ $telegram->link }}" required>
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
