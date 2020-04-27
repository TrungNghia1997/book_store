{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'List data')
@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Trang chủ</li>
                <li class="breadcrumb-item">
                    <a href="#">Quản lý</a>
                </li>
                <li class="breadcrumb-item active">Khách Hàng</li>
            </ol>
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Số điện thoại</th>
                    <th>trạng thái</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($basket as $baskets)
                <tr>
                    <td>{{$baskets->id}}</td>
                    <td>{{$baskets->name}}</td>
                    <td>{{$baskets->email}}</td>
                    <td >{{$baskets->phone}}</td>
                    <td>
                        @if($baskets->status == 2)
                        Chưa gọi xác nhận
                        @elseif($baskets->status == 1)
                        <span style="color: red;"> Đã gọi xác nhận</span>
                        @endif
                    </td>
                    <td></td>
                    <td>
                        <a href="{{url('/edit')}}" title="">
                        <span class="badge bg-red" style="padding: 10px;"><a class="badge bg-red" href="/admin/updatelist/{{$baskets->id}}" title="">Xem chi tiết</a></span>
                        </a>
                        <button type="button" class="btn btn-warning"style="font-size: 14px; padding: 3px 5px;" data-toggle="modal" data-target="#exampleModal">
                        Xóa
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xóa khách hàng</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('/')}}/admin/deletelist/{{$baskets->id}}" method="POST" accept-charset="utf-8">
                                        <div class="modal-body">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <h4>Bạn có chắc chắn muốn xóa hình ảnh này</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Quay lại</button>
                                            <button type="submit" class="btn btn-danger">Đồng ý</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</main>
@endsection
