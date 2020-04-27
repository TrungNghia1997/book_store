{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'Danh sách tác giả')
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
                <li class="breadcrumb-item active">Danh sách tác giả</li>
            </ol>
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Tên tác giả</th>
                    <th>Ảnh tác giả</th>
                    <th>Mô tả</th>
                    <td>Lựa chọn</td>
                </tr>
                @foreach($authorRepository as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->author}}</td>
                    <td>
                        <img src="{{$item->image_author}}" width="200" alt="">
                    </td>
                    <td>{!!$item->des_author!!}</td>
                    <td>
                        <a href="{{url('/')}}/admin/author/{{$item->id}}/edit" title="Edit" style=" display: inline-block;"><span class="btn btn-danger" style="font-size: 14px; padding: 3px 5px;">Sửa</span></a>
                        <button type="button" class="btn btn-warning"style="font-size: 14px; padding: 3px 5px;" data-toggle="modal" data-target="#modal{{$item->id}}">
                        Xóa
                        </button>
                        <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modal{{$item->id}}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('/')}}/admin/author/{{$item->id}}" method="POST" accept-charset="utf-8">
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
                @endforeach()
            </table>
        </div>
    </div>
</main>
@endsection
