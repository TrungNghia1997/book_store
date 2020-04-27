@extends('users.master')
{{--  --}}
@section('title', 'Giới thiệu')
@section('content')
    <div class="breadcrumbs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li><a href="#" class="active">Sản phẩm chi tiết</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- product-main-area-start -->
    <div class="product-main-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <!-- product-main-area-start -->
                    <div class="product-main-area">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="flexslider">
                                    <ul class="slides">
                                        @foreach($imgs as $img)
                                        <li data-thumb="{{$img}}">
                                            <img src="{{$img}}" alt="woman" />
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                <div class="product-info-main">
                                    <div class="page-title">
                                        <h1>{{$productRepository->name}}</h1>
                                    </div>
                                    <div class="product-info-stock-sku">
                                        <span>
                                            @if($productRepository->status)
                                                Còn hàng
                                            @else
                                                Hết hàng
                                            @endif
                                        </span>
                                        <div class="product-attribute">
                                            <span>Mã sản phẩm</span>
                                            <span class="value">{{$productRepository->id_product}}</span>
                                        </div>
                                    </div>
                                    <div class="product-reviews-summary">
                                        <div class="rating-summary">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="reviews-actions">
                                            <a href="#">3 Đánh giá</a>
                                            <a href="#" class="view">Thêm đánh giá</a>
                                        </div>
                                    </div>
                                    <div class="product-info-price">
                                        <div class="price-final">
                                            @if($productRepository->sale > 0)
                                                <span>${{$productRepository->price}}</span>
                                                <span class="old-price">${{($productRepository->sale)*($productRepository->price)/100}}</span>
                                            @else
                                                <span>${{$productRepository->price}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-add-form">
                                        <form action="#">
                                            <div class="quality-button">
                                                <input class="qty" type="number" value="1">
                                            </div>
                                            <a href="{{url('/')}}/cart/add/{{$productRepository->id}}">Thêm vào giỏ hàng</a>
                                        </form>
                                    </div>
                                    <div class="product-social-links">
                                        <div class="product-addto-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-pie-chart"></i></a>
                                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                                        </div>
                                        <div class="product-addto-links-text">
                                            <p>{{$productRepository->short_description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-main-area-end -->
                    <!-- product-info-area-start -->
                    <div class="product-info-area mt-80">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#Details" data-toggle="tab">Details</a></li>
                            <li><a href="#Reviews" data-toggle="tab">Reviews 3</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="Details">
                                <div class="valu">
                                    {!!$productRepository->description!!}
                                </div>
                            </div>
                            <div class="tab-pane" id="Reviews">
                                <div class="valu valu-2">
                                    <div class="section-title mb-60 mt-60">
                                        <h2>Customer Reviews</h2>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="review-title">
                                                <h3>themes</h3>
                                            </div>
                                            <div class="review-left">
                                                <div class="review-rating">
                                                    <span>Price</span>
                                                    <div class="rating-result">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="review-rating">
                                                    <span>Value</span>
                                                    <div class="rating-result">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="review-rating">
                                                    <span>Quality</span>
                                                    <div class="rating-result">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-right">
                                                <div class="review-content">
                                                    <h4>themes </h4>
                                                </div>
                                                <div class="review-details">
                                                    <p class="review-author">Review by<a href="#">plaza</a></p>
                                                    <p class="review-date">Posted on <span>12/9/16</span></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="review-add">
                                        <h3>You're reviewing:</h3>
                                        <h4>Joust Duffle Bag</h4>
                                    </div>
                                    <div class="review-field-ratings">
                                        <span>Your Rating <sup>*</sup></span>
                                        <div class="control">
                                            <div class="single-control">
                                                <span>Value</span>
                                                <div class="review-control-vote">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="single-control">
                                                <span>Quality</span>
                                                <div class="review-control-vote">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="single-control">
                                                <span>Price</span>
                                                <div class="review-control-vote">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-form">
                                        <div class="single-form">
                                            <label>Nickname <sup>*</sup></label>
                                            <form action="#">
                                                <input type="text" />
                                            </form>
                                        </div>
                                        <div class="single-form single-form-2">
                                            <label>Summary <sup>*</sup></label>
                                            <form action="#">
                                                <input type="text" />
                                            </form>
                                        </div>
                                        <div class="single-form">
                                            <label>Review <sup>*</sup></label>
                                            <form action="#">
                                                <textarea name="massage" cols="10" rows="4"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="review-form-button">
                                        <a href="#">Submit Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-info-area-end -->
                    <!-- new-book-area-start -->
                    <div class="new-book-area mt-60">
                        <div class="section-title text-center mb-30">
                            <h3>Sản phẩm cùng loại</h3>
                        </div>
                        <div class="tab-active-2 owl-carousel">
                            <!-- single-product-start -->
                            @foreach($productCategory as $product)
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                        <img src="{{$product->avatar}}" alt="book" class="primary" style="width: 212px; height: 272px; padding: 0px 10px" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-target="#product_{{$product->id}}" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                @if($product->sale > 0)
                                                    <li><span class="sale">new</span> <br></li>
                                                    <li><span class="discount-percentage">-{{$product->sale}}%</span></li>
                                                @else
                                                    <li><span class="sale">new</span> <br></li>
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
                                                <li>${{$product->price}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="{{url('/')}}/cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="{{url('/')}}/san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- new-book-area-start -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="shop-left">
                        <div class="left-title mb-20">
                            <h4>Sản phẩm ngẫu nhiên</h4>
                        </div>
                        <div class="random-area mb-30">
                            <div class="product-active-2 owl-carousel">
                                <div class="product-total-2">
                                    <?php $i=0; ?>
                                    @foreach($productRandom as $random)
                                    @if($i < 3)
                                    <?php $i++; ?>
                                        <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                <a href="#"><img src="{{$random->avatar}}" alt="book" /></a>
                                            </div>
                                            <div class="most-product-content">
                                                <div class="product-rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4><a href="{{url('/')}}/san_pham/{{$random->id}}">{{$random->name}}</a></h4>
                                                <div class="product-price">
                                                    <ul>
                                                        @if($random->sale > 0)
                                                            <li>${{$random->price}}</li>
                                                            <li class="old-price">${{($random->sale)*($random->price)/100}}</li>
                                                        @else
                                                            <li>${{$random->price}}</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @endforeach
                                </div>
                                <div class="product-total-2">
                                    <?php $i=0; ?>
                                    @foreach($productRandom as $random)
                                    @if($i > 2)
                                        <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                <a href="#"><img src="{{$random->avatar}}" alt="book" /></a>
                                            </div>
                                            <div class="most-product-content">
                                                <div class="product-rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4><a href="{{url('/')}}/san_pham/{{$random->id}}">{{$random->name}}</a></h4>
                                                <div class="product-price">
                                                    <ul>
                                                        @if($random->sale > 0)
                                                            <li>${{$random->price}}</li>
                                                            <li class="old-price">${{($random->sale)*($random->price)/100}}</li>
                                                        @else
                                                            <li>${{$random->price}}</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $i++; ?>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="banner-area mb-30">
                            <div class="banner-img-2">
                                <a href="#"><img src="{{asset('/frontend/img/banner/33.jpg')}}" alt="banner" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @foreach($productCategory as $product)
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
                                            <span>${{$product->price}}</span>
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
