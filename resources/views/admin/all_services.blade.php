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
                    @if (empty($edit))
                        <a href="/all-service-edit" type="submit" class="active styling-edit">
                            <i class="fa fa-edit"></i>
                        </a>
                    @endif
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
                            <th>Tên dịch vụ</th>
                            <th>Giá tiền</th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($services as $key => $service)
                            <tr>
                                <form action="{{ URL::to('/service-edit/' . $service->id) }}" method="post"
                                    class="update_mony">
                                    @php
                                        $i++;
                                    @endphp
                                    @csrf
                                    <td><i>{{ $i }}</i></td>
                                    <td>{{ $service->ten_dich_vu }}</td>
                                    <td>
                                        @if (empty($edit))
                                            {{ number_format($service->gia, 0, ',', '.') . 'đ' }}
                                        @else
                                            <input type="text" value="{{ $service->gia }}" name="gia">
                                        @endif
                                    </td>
                                    <td>

                                        @if (empty($edit))
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
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel{{ $i }}">Bạn có chắc chắn
                                                                xác
                                                                sửa giá dịch vụ không</h5>
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
                                                            <button type="submit" class="btn btn-primary"
                                                                data-href="{{ URL::to('/service-edit/' . $service->id) }}">
                                                                Xác nhận
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
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
