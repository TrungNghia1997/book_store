{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'Tùy chỉnh')
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Trang chủ</li>
        <li class="breadcrumb-item">
            <a href="#">Quản lý</a>
        </li>
        <li class="breadcrumb-item active">Tác giả</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-3">
                </div>
                 <div class="col-md-6">
                    <form action="{{url('/')}}/admin/author" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên tác giả</label>
                            <input type="text" class="form-control" name="author" required="">
                        </div>
                       <div class="form-group">
                            <label for="input-select-images" class="btn btn-danger">Ảnh tác giả</label>
                            <input id="input-select-images" class="hidden" type="file" name="image_author" required="">
                            <div class="avatar-commic-preview">
                                <img src="" id="profile-img-tag" width="200px"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea class="form-control" name= "des_author"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success" name="submit">Thêm</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
{{-- @section('content')
<p>This is my body content.</p>
@endsection --}}
