{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'Add Product')
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Trang chủ</li>
        <li class="breadcrumb-item">
            <a href="#">Quản lý</a>
        </li>
        <li class="breadcrumb-item active">Thêm sản phẩm</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="{{url('/')}}/admin/product" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" required="" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input type="text" class="form-control" name="id_product" required="" value="{{old('id_product')}}">
                        </div>
                        <div class="form-group">
                            <label>Tên tác giả</label>
                            <select name="author_id" class="form-control">
                                @foreach($authorRepository as $author)
                                    <option value="{{$author->id}}">{{$author->author}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Loại sản phẩm</label>
                            <select name="category_id" class="form-control">

                                <option value="0">----ROOT----</option>
                                {{ getCategoryEdit($categoryRepository, 0, '----|', 0) }}

                            </select>
                        </div>
                        <div class="form-group">
                            <label style="padding-right: 10px">Sản phẩm nổi bật:</label>
                            <input type="checkbox" name="is_feature" value="1">
                        </div>
                        <div class="form-group">
                            <label for="input-select-images" class="btn btn-danger">Ảnh đại diện sản phẩm</label>
                            <input id="input-select-images" class="hidden" type="file" name="avatar" required="">
                            <div class="avatar-commic-preview">
                                <img src="" id="profile-img-tag" width="200px"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh sản phẩm chi tiết</label>
                            <input type="file" class="form-control" multiple="multiple" name="images[]" required="" value="">
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="number" class="form-control" name="price" required="" value="{{old('price')}}">
                        </div>
                        <div class="form-group">
                            <label>Giảm giá</label>
                            <input type="number" class="form-control" name="sale" value="{{old('sale')}}">
                        </div>
                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <input type="text" class="form-control" name="short_description" value="{{old('short_description')}}">
                        </div>
                         <div class="form-group">
                            <label>Mô tả chi tiết</label>
                            <textarea type="text" class="form-control" name="description" value="{{old('description')}}"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái sản phẩm:</label>
                            <br>
                            <span>Còn hàng : <input type="radio" name="status" value="1"></span>
                            <span style="padding-left:10px">Hết hàng : <input type="radio" name="status" value="0"></span>
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
