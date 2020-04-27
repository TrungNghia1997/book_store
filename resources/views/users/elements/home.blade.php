@extends('users.master')
{{--  --}}
@section('title', 'Trang chủ')
@section('content')
    <div class="banner-area banner-res-large ptb-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-banner">
                            <div class="banner-img">
                                <a href="#"><img src="{{asset('/frontend/img/banner/1.png')}}" alt="banner" /></a>
                            </div>
                            <div class="banner-text">
                                <h4>Miễn phí giao hàng</h4>
                                <p>Cho đơn hàng trên 200.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-banner">
                            <div class="banner-img">
                                <a href="#"><img src="{{asset('/frontend/img/banner/2.png')}}" alt="banner" /></a>
                            </div>
                            <div class="banner-text">
                                <h4>Hoàn tiền trong 3 ngày</h4>
                                <p>Hoàn 100% tiền mua hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                        <div class="single-banner">
                            <div class="banner-img">
                                <a href="#"><img src="{{asset('/frontend/img/banner/3.png')}}" alt="banner" /></a>
                            </div>
                            <div class="banner-text">
                                <h4>Thanh toán khi nhận hàng</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-banner mrg-none-xs">
                            <div class="banner-img">
                                <a href="#"><img src="{{asset('/frontend/img/banner/4.png')}}" alt="banner" /></a>
                            </div>
                            <div class="banner-text">
                                <h4>Tư vấn và hỗ trợ</h4>
                                @foreach($option as $item)
                                <p>Liên hệ : + {{$item->phone}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->
        <!-- slider-area-start -->
        <div class="slider-area">
            <div class="slider-active owl-carousel">
                @foreach($option as $item)
                <?php $imgs = explode('+img+', $item->slides) ?>
                @foreach($imgs as $img)
                <div class="single-slider pt-125 pb-130 bg-img" style="background-image:url({{$img}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="slider-content slider-animated-1 text-center">
                                    <h1>Huge Sale</h1>
                                    <h2>koparion</h2>
                                    <h3>Now starting at £99.00</h3>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
        <!-- slider-area-end -->
        <!-- product-area-start -->
        <div class="product-area pt-95 xs-mb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50">
                            <h2>Sản phẩm nổi bật</h2>
                            <p>Tổng hợp các sản phẩm nổi bật và bán chạy nhất <br /> Chắc chắn bạn sẽ tìm được chính xác những gì bạn muốn</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- tab-menu-start -->
                        <div class="tab-menu mb-40 text-center">
                            <ul>
                                <li class="active"><a href="#Audiobooks" data-toggle="tab">Mới  </a></li>
                                <li><a href="#books"  data-toggle="tab">Đang bán</a></li>
                                <li><a href="#bussiness" data-toggle="tab">Sản phẩm nổi bật</a></li>
                            </ul>
                        </div>
                        <!-- tab-menu-end -->
                    </div>
                </div>
                <!-- tab-area-start -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Audiobooks">
                        <div class="tab-active owl-carousel">
                            <!-- single-product-start -->
                            @foreach($productRepository as $product)
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{$product->avatar}}" alt="book" style="height: 350px" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-target="#product_{{$product->id}}" data-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <li><span class="discount-percentage">-{{$product->sale}}%</span></li>
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
                                            <a href="{{url('/')}}/cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
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
                    <div class="tab-pane fade" id="books">
                        <div class="tab-active owl-carousel">
                            <!-- single-product-start -->
                             @foreach($productRepository as $product)
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{$product->avatar}}" style="height: 350px" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-target="#product_{{$product->id}}" data-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
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
                                                    <li>${{$product->price}}</li>
                                                    <li class="old-price">${{($product->sale)*($product->price)/100}}</li>
                                                @else
                                                    <li>${{$product->price}}</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="{{url('/')}}/cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="{{url('/')}}san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bussiness">
                        <div class="tab-active owl-carousel">
                            <!-- single-product-start -->
                            @foreach($productRepository as $product)
                                @if($product->is_feature == 1)
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{$product->avatar}}" style="height: 350px" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="#" data-target="#product_{{$product->id}}" data-toggle="modal" title="Quick View">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </div>
                                            <div class="product-flag">
                                                <ul>
                                                    <li><span class="sale">new</span> <br></li>
                                                    <li><span class="discount-percentage">-{{$product->sale}}%</span></li>
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
                                            <h4><a href="{{url('/')}}san_pham/{{$product->id}}">{{$product->name}}</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    @if($product->sale > 0)
                                                        <li>${{$product->price}}</li>
                                                        <li class="old-price">${{($product->sale)*($product->price)/100}}</li>
                                                    @else
                                                        <li>${{$product->price}}</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-link">
                                            <div class="product-button">
                                                <a href="{{url('/')}}cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li><a href="{{url('/')}}san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- tab-area-end -->
            </div>
        </div>
        <!-- product-area-end -->
        <!-- banner-area-start -->
        <div class="banner-area-5 mtb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-img-2">
                            <a href="#"><img src="{{asset('/frontend/img/banner/5.jpg')}}" alt="banner" /></a>
                            <div class="banner-text">
                                <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                                <h2>Sale up to 30% off</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->
        <!-- bestseller-area-start -->
        <div class="new-book-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                            <h2>Sản phẩm giảm giá nhiều nhất</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-active owl-carousel">
                    <?php $i=1 ?>
                    @foreach($productSale as $product)
                    <div class="tab-total">
                        <!-- single-product-start -->
                        @if($i == 1)
                            <?php $i++ ?>
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{$product->avatar}}" style="height: 350px" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#product_{{$product->id}}" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> </li>
                                            <li><span class="discount-percentage">-{{$product->sale}}%</span></li>
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
                                    <h4><a href="{{url('/')}}san_pham/{{$product->id}}">{{$product->name}}</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            @if($product->sale > 0)
                                                <li>${{$product->price}}</li>
                                                <li class="old-price">${{($product->sale)*($product->price)/100}}</li>
                                            @else
                                                <li>${{$product->price}}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="{{url('/')}}cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="{{url('/')}}san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- single-product-end -->
                        <!-- single-product-start -->
                        @if($i == 2)
                            <?php $i=1 ?>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{$product->avatar}}" style="height: 350px" alt="book" class="primary" />
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
                                    <h4><a href="{{url('/')}}san_pham/{{$product->id}}">{{$product->name}}</a></h4>
                                    <div class="product-price">
                                        <ul>
                                             @if($product->sale > 0)
                                                <li>${{$product->price}}</li>
                                                <li class="old-price">${{($product->sale)*($product->price)/100}}</li>
                                            @else
                                                <li>${{$product->price}}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="{{url('/')}}cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="{{url('/')}}san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- single-product-end -->
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- bestseller-area-end -->
        <!-- new-book-area-start -->
        <div class="new-book-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                            <h2>Sản phẩm nổi bật</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-active owl-carousel">
                    <?php $i=1 ?>
                    @foreach($productRepository as $product)
                    <div class="tab-total">
                        <!-- single-product-start -->
                        @if($i == 1)
                            <?php $i++ ?>
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{$product->avatar}}" style="height: 350px" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#product_{{$product->id}}" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> </li>
                                            <li><span class="discount-percentage">-{{$product->sale}}%</span></li>
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
                                    <h4><a href="{{url('/')}}san_pham/{{$product->id}}">{{$product->name}}</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            @if($product->sale > 0)
                                                <li>${{$product->price}}</li>
                                                <li class="old-price">${{($product->sale)*($product->price)/100}}</li>
                                            @else
                                                <li>${{$product->price}}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="{{url('/')}}cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="{{url('/')}}san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- single-product-end -->
                        <!-- single-product-start -->
                        @if($i == 2)
                            <?php $i=1 ?>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{$product->avatar}}" style="height: 350px" alt="book" class="primary" />
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
                                    <h4><a href="{{url('/')}}san_pham/{{$product->id}}">{{$product->name}}</a></h4>
                                    <div class="product-price">
                                        <ul>
                                             @if($product->sale > 0)
                                                <li>${{$product->price}}</li>
                                                <li class="old-price">${{($product->sale)*($product->price)/100}}</li>
                                            @else
                                                <li>${{$product->price}}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="{{url('/')}}cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="{{url('/')}}san_pham/{{$product->id}}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- single-product-end -->
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- new-book-area-start -->
        <!-- banner-static-area-start -->

<!-- END section -->

    {{-- show detail --}}
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
                                            <span>${{$product->price}}</span>
                                        </div>
                                        <p>{{$product->short_description}} ...</p>
                                        <br>
                                        <form action="#">
                                            <input type="number" value="1" />
                                            <a type="button" href="{{url('/')}}cart/add/{{$product->id}}" title="Add to cart"></i>Thêm vào giỏ hàng</a>
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
