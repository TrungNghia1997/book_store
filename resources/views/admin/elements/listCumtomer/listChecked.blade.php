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
                <li class="breadcrumb-item active">Khách Hàng</li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                @csrf                                    
                                <div class="form-group">
                                    <label for="">Tên khách hàng</label>
                                    <input style="background: #87bdf5bf;" type="text" name="name" value="{{$data->name}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input style="background: #87bdf5bf;" type="email" name="email"  value="{{$data->email}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input style="background: #87bdf5bf;" type="text" name="phone" value="{{$data->phone}}" class="form-control"  readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input  type="" name="address" value="{{$data->address}}" class="form-control" >
                                </div>                               
                                <div class="form-group">
                                    <label for="">Đơn hàng </label><br>
                                    @for($i= 0; $i< count($data['nameproduct']) ; $i++)
                                    <label for="">
                                    Tên sản phẩm {{$i+1}}
                                    </label><br>
                                    <input name="nameproduct[]" type="" value="{{$data->nameproduct[$i]}}" class="form-control">
                                    <label for="">
                                    Số lượng sản phẩm thứ {{$i+1}}
                                    </label><br>
                                    <input name="qty[]" type="" value="{{$data->qty[$i]}}" class="form-control">
                                    @endfor
                                </div>
                                {{-- <input type="hidden" value="{{$data->initial}}" name="initial"> --}}
                                <input type="hidden" name="sum" value="{{$data->sum}}">
                                <p>Tổng đơn hàng: {{$data->sum}}</p>
                                <div class="form-group">
                                    <label for="">Trạng thái đơn hàng</label>
                                    <select name="status" class="form-control">
                                    <option @if($data->status == 1) selected @endif value="1">chưa gọi cho khách</option>
                                    <option @if($data->status == 2) selected @endif value="2">Đã gọi cho khách</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="" class="btn btn-primary">submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection