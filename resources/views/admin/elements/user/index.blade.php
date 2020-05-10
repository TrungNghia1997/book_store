{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'List data')
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <div class="animated fadeIn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Trang chủ</li>
                <li class="breadcrumb-item">
                    <a href="#">Quản lý</a>
                </li>
                <li class="breadcrumb-item active">Danh sách thành viên</li>
            </ol>
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Số điện thoại</th>
                    <th>avatar</th>
                    <th>Phân quyền</th>
                    <th></th>
                </tr>
                @foreach($user as $users)
                <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->name}}</td>
                    <td >{{$users->email}}</td>
                    <td >{{$users->phone_number}}</td>
                    <td><img src="{{$users->avatar}}" style="width:80px;" alt=""></td>
                    <td>{{$users->role}}</td>
                    <td>
                        <a href="{{url('/')}}/admin/user/{{$users->id}}/edit" title="">
                        <span class="badge bg-red" style="padding: 10px;">Edit</span>
                        </a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{$users->id}}">
                        Xóa
                        </button>
                        <div class="modal fade" id="modal{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="modal{{$users->id}}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xóa danh người dùng</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('/')}}/admin/user/{{$users->id}}" method="POST" accept-charset="utf-8">
                                        <div class="modal-body">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <h4>Are you sure</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Confirm</button>
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
