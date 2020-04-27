{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'Sản phẩm')
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
            <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="content-news-detail">
                        <div class="newsdetail">
                            <h3>Tên sản phẩm: {{$productRepository->name}}</h3>
                            <br>
                            <h4>Tác giả: 
                                @foreach($authorRepository as $author)
                                    @if($author->id == $productRepository->author_id)
                                    {{$author->author}}
                                    @endif
                                @endforeach
                            </h4>
                            <br>
                            <p class="newstime">Loại sản phẩm: 
                                @foreach($categoryRepository as $item)
                                @if($item->id == $productRepository->category_id)
                                {{$item->name}}
                                @endif
                                @endforeach
                            </p>
                            <p>Ảnh sản phẩm nổi bật</p>
                            <img src="{{$productRepository->avatar}}" alt="" width="100px">
                            <p>Ảnh sản phẩm</p>
                            <ul class="fix-show-images">
                                @if(isset($imgs))
                                @foreach($imgs as $images)
                                <li><img src="{{$images}}" alt="" width="100px"></li>
                                @endforeach
                                @endif
                            </ul>
                            <div class="clearfix">
                            </div>
                            <p class="newstime">Giá: {{$productRepository->price}}</p>
                            <p class="newstime">Sale: {{$productRepository->sale}} %</p>
                            <p class="newstime">Mô tả ngắn: {{$productRepository->short_description}}</p>
                            <div class="newsdes">
                                <p>Nôi dung</p>
                                {!!$productRepository->description!!}
                            </div>
                            <div class="form-group">
                                <span>Trang thái sản phẩm :
                                @if($productRepository->status ==1) Còn hàng @endif 
                                @if($productRepository->status ==0) Hết hàng @endif 
                                </span>                   
                            </div>
                        </div>
                    </div>
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