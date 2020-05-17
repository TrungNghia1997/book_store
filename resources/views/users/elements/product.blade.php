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
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="{{url('/')}}/san_pham" class="active">Sản phẩm</a></li>
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
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="shop-left">
                        <div class="section-title-5 mb-30">
                            <h2>Sản phẩm</h2>
                        </div>
                        <div class="left-title mb-20">
                            <h4>Danh mục sản phẩm</h4>
                        </div>
                        <div class="left-menu mb-30">
                            <ul>
                                @foreach($categories as $item)
                                    @if($item->parent == 0)
                                        <li>
                                            <a href="{{url('/')}}/danh_muc/{{$item->id}}">{{$item->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="left-title mb-20">
                            <h4>Ngẫu nhiên</h4>
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
                                                            <li>{{number_format($random->price - ($random->sale)*($random->price)/100)}} đ</li>
                                                            <li class="old-price">
                                                                {{number_format($random->price)}} đ
                                                            </li>
                                                        @else
                                                            <li>{{number_format($random->price)}} đ</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @endforeach
                                   {{--  <div class="single-most-product">
                                        <div class="most-product-img">
                                            <a href="#"><img src="/frontend/img/product/22.jpg" alt="book" /></a>
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
                                            <h4><a href="#">Compete Track Tote</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>$35.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> --}}
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
                                                            <li>{{number_format($random->price - ($random->sale)*($random->price)/100)}} đ</li>
                                                            <li class="old-price">
                                                                {{number_format($random->price)}} đ
                                                            </li>
                                                        @else
                                                            <li>{{number_format($random->price)}} đ</li>
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
                                <a href="#"><img src="{{asset('/frontend/img/banner/31.jpg')}}" alt="banner" /></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="category-image mb-30">
                        <a href="#"><img src="{{asset('/frontend/img/banner/32.jpg')}}" alt="banner" /></a>
                    </div>
                    <div class="section-title-5 mb-30">
                        <h2>Sách</h2>
                    </div>
                    <div class="toolbar mb-30">
                        <div class="shop-tab">
                            <div class="tab-3">
                                <ul>
                                    <li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
                                    <li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="toolbar-sorter">
                            <form action="" accept-charset="utf-8">
                                <span>Sắp xếp</span>
                                <select name="" id="sorter" class="sorter-options" data-role="sorter" onchange="window.location.href='/'+jQuery(this).find('option:selected').val();">
                                    <option value="">Sắp xếp theo</option>
                                    <option value="san_pham_gia_tang" @if( Request::is('san_pham_gia_tang')) selected='selected' @endif>Giá tăng dần</option>
                                    <option value="san_pham_gia_giam" @if( Request::is('san_pham_gia_giam')) selected='selected' @endif>Giá giảm dần</option>
                                    <option value="san_pham_new" @if( Request::is('san_pham_new')) selected='selected' @endif>Mới -> Cũ</option>
                                    <option value="san_pham_cu" @if( Request::is('san_pham_cu')) selected='selected' @endif>Cũ -> Mới</option>
                                    {{--
                                    <option value="">Tên sản phẩm A-Z</option>
                                    --}}
                                    {{--
                                    <option value="">Tên sản phẩm Z-A</option>
                                    --}}
                                </select>
                            </form>
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
                                                        <li>{{number_format($product->price - ($product->sale)*($product->price)/100)}} đ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-link">
                                                <div class="product-button">
                                                    <a href="{{url('/')}}/cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
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
                                                            <li>{{number_format($product->price - ($product->sale)*($product->price)/100)}} đ</li>
                                                        </ul>
                                                    </div>
                                                    <p>{{$product->short_description}}</p>
                                                </div>
                                                <div class="product-link">
                                                    <div class="product-button">
                                                        <a href="{{url('/')}}/cart/add/{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
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
                    <!-- tab-area-end -->
                    <!-- pagination-area-start -->
                    <div class="pagination-area mt-50">
                        <div class="page-number">
                            {{$productRepository->links()}}
                        </div>
                    </div>
                    <!-- pagination-area-end -->
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
                                            <a type="button" href="{{url('/')}}/cart/add/{{$product->id}}" title="Add to cart">Thêm vào giỏ</a>
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
