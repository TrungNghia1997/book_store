{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'List Category')
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
                <li class="breadcrumb-item active">Tùy chỉnh</li>
            </ol>
            <table class="table table-striped">
                <tr>
                    <th width="20px">#</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <td class="text-center" width="200px">Lựa chọn</td>
                </tr>
                @foreach($optionRepository as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <img src="{{$item->logo}}" width="100" alt="">
                    </td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                        <a href="{{url('/')}}/admin/option/{{$item->id}}" title="Detail" style="display: inline-block;"><span class="btn btn-primary">Xem</span></a>
                        <a href="{{url('/')}}/admin/option/{{$item->id}}/edit" title="Edit" style="padding-right: 10px; display: inline-block;"><span class="btn btn-warning">Sửa</span></a>
                        </td>
                </tr>
                @endforeach()
            </table>
        </div>
    </div>
</main>
@endsection
