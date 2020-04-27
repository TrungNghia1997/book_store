{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'Edit Product')
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Trang chủ</li>
        <li class="breadcrumb-item">
            <a href="#">Quản lý</a>
        </li>
        <li class="breadcrumb-item active">Sửa sản phẩm</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <form action="{{url('/')}}/admin/product/{{$productRepository->id}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{$productRepository->id}}">
                       <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" required="" value="{{$productRepository->name}}">
                        </div>
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input type="text" class="form-control" name="id_product" required="" value="{{$productRepository->id_product}}">
                        </div>
                        <div class="form-group">
                            <label>Tên tác giả</label>
                            <select name="author_id" class="form-control">
                                @foreach($authorRepository as $author)
                                    <option value="{{$author->id}}" @if($author->id ==  $productRepository->author_id) selected @endif>{{$author->author}}</option>
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
                            <input type="checkbox" name="is_feature" @if($productRepository->is_feature ==1) checked="checked" @endif value="1">
                        </div>
                        <div class="form-group">
                            <label for="input-select-images" class="btn btn-danger">Ảnh đại diện sản phẩm</label>
                            <input id="input-select-images" class="hidden" type="file" name="avatar">
                            <div class="avatar-commic-preview">
                                <img src="{{$productRepository->avatar}}" id="profile-img-tag" with="300" height="150" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file">Ảnh sản phẩm</label>
                            <input type="file" id="file" class="form-control" multiple="multiple" name="images[]">
                            <br>
                            <ul class="fix-show-images">
                                @if(isset($imgs))
                                @foreach($imgs as $images)
                                <li><img src="{{$images}}" alt="" width="100px"></li>
                                @endforeach
                                @endif
                            </ul>
                            <div class="clearfix">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="number" class="form-control" value="{{$productRepository->price}}" name="price">
                        </div>
                        <div class="form-group">
                            <label>Giảm giá</label>
                            <input type="number" class="form-control" value="{{$productRepository->sale}}" name="sale">
                        </div>
                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <input type="text" class="form-control" name="short_description" value="{{$productRepository->short_description}}">
                        </div>
                         <div class="form-group">
                            <label>Mô tả chi tiết</label>
                            <textarea type="text" class="form-control" name="description">{{$productRepository->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái sản phẩm:</label>
                            <br>
                            <span>Còn hàng : <input type="radio" name="status" @if($productRepository->status ==1) checked="checked" @endif value="1"></span>
                            <span style="padding-left:10px">Hết hàng : <input type="radio" @if($productRepository->status ==0) checked="checked" @endif name="status" value="0"></span>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success" name="submit">Sửa</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
{{-- @section('content')
<p>This is my body content.</p>
@endsection --}}
