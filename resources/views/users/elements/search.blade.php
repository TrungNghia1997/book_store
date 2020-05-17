@extends('users.master')
{{--  --}}
@section('title', 'Sản phẩm')
@section('content')
    <div class="breadcrumbs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li><a href="{{url('/san_pham')}}">Sản phẩm</a></li>
                            <li><a href="#" class="active">{{$search}}</a></li>
                            <li><a href="#" title="">Tìm được {{count($productRepository)}} sản phẩm phù hợp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- shop-main-area-start -->
    <div class="shop-main-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="toolbar mb-30">
                        <div class="shop-tab">
                            <div class="tab-3">
                                <ul>
                                    <li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
                                    <li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- tab-area-start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="th">
                            <div class="row">
                                @foreach($productRepository as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <!-- single-product-start -->
                                        <div class="product-wrapper mb-40">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="{{$product->avatar}}" style="height: 250px; width: 90%" alt="book" class="primary" />
                                                </a>
                                                <div class="quick-view">
                                                    <a class="action-view" href="#" data-target="#product_{{$product->id}}" data-toggle="modal" title="Quick View">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="product-flag">
                                                    <ul>
                                                        <li><span class="sale">new</span></li>
                                                        @if($product->sale > 0)
                                                            <li><span class="discount-percentage">-{{$product->sale}}%</span></li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="product-rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4><a href="{{url('/')}}/san_pham/{{$product->id}}">{{$product->name}}</a></h4>
                                                <div class="product-price">
                                                    <ul>
                                                        @if($product->sale > 0)
                                                            <li>{{number_format($product->price - ($product->sale)*($product->price)/100)}} đ</li>
                                                            <li class="old-price">
                                                                {{number_format($product->price)}} đ
                                                            </li>
                                                        @else
                                                            <li>{{number_format($product->price)}} đ</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-link">
                                                <div class="product-button">
                                                    <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li><a href="{{url('/')}}/san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list">
                            <!-- single-shop-start -->
                            @foreach($productRepository as $product)
                                <div class="single-shop mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="product-wrapper-2">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="{{$product->avatar}}" style="height: 250px; width: 90%"  alt="book" class="primary" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="product-wrapper-content">
                                                <div class="product-details">
                                                    <div class="product-rating">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a href="{{url('/')}}/san_pham/{{$product->id}}">{{$product->name}}</a></h4>
                                                    <div class="product-price">
                                                        <ul>
                                                            @if($product->sale > 0)
                                                                <li>{{number_format($product->price - ($product->sale)*($product->price)/100)}} đ</li>
                                                                <li class="old-price">
                                                                    {{number_format($product->price)}} đ
                                                                </li>
                                                            @else
                                                                <li>{{number_format($product->price)}} đ</li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <p>{{$product->short_description}}</p>
                                                </div>
                                                <div class="product-link">
                                                    <div class="product-button">
                                                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li><a href="{{url('/')}}/san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($productRepository as $product)
        <div class="modal fade productModal" id="product_{{$product->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="modal-tab">
                                       <?php $imgs = explode('+img+', $product->images); ?>
                                        <div class="product-details-large tab-content text-center">
                                            <?php $j =1; ?>
                                            @foreach($imgs as $img)
                                                @if($j == 1)
                                                    <div class="tab-pane active" id="image-{{$j}}">
                                                        <img src="{{$img}}" alt="" style="width: 300px; height: 380px"/>
                                                    </div>
                                                @else
                                                    <div class="tab-pane" id="image-{{$j}}">
                                                        <img src="{{$img}}" alt="" style="width: 300px; height: 380px" />
                                                    </div>
                                                @endif
                                               <?php $j++; ?>
                                            @endforeach
                                        </div>
                                        <br>
                                        <div class="product-details-small quickview-active owl-carousel text-center">
                                            <?php $j =1; ?>
                                            @foreach($imgs as $img)
                                                @if($j == 1)
                                                    <a class="active" href="#image-{{$j}}"><img src="{{$img}}" alt="" style="width: 80px; height: 100px" /></a>
                                                @else
                                                    <a href="#image-{{$j}}"><img src="{{$img}}" alt="" style="width: 80px; height: 100px" /></a>
                                                @endif
                                               <?php $j++; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="modal-pro-content">
                                        <h3>{{$product->name}}</h3>
                                        <div class="price">
                                            <span>{{number_format($product->price - ($product->sale)*($product->price)/100)}} đ</span>
                                        </div>
                                        <p>{{$product->short_description}} ...</p>
                                        <br>
                                        <form action="#">
                                            <input type="number" value="1" />
                                            <a type="button" href="{{url('/')}}/cart/add/{{$product->id}}" title="Add to cart"></i>Thêm vào giỏ hàng</a>
                                        </form>
                                        <span><i class="fa fa-check"></i>
                                            @if($product->status)
                                                Còn hàng
                                            @else
                                                Hết hàng
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endsection
