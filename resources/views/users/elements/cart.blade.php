@extends('users.master')
{{--  --}}
@section('title', 'Giỏ hàng')
@section('content')
    <div class="breadcrumbs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li><a href="{{url('/cart/show')}}" class="active">Giỏ hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- entry-header-area-start -->
    <div class="entry-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="entry-header-title">
                        <h2>Giỏ hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- entry-header-area-end -->
    <!-- cart-main-area-start -->
    <div class="cart-main-area mb-70">
        <form action="{{url('/cart/show')}}" method="post" accept-charset="utf-8">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Hình ảnh</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng tiền</th>
                                        <th class="product-remove">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sum =0; @endphp
                                    @if(count($items) > 0)
                                        @foreach($items as $item)
                                            @php
                                                $price_sale = $item->price - ($item->options->price_sale)*($item->price)/100;
                                            @endphp
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="{{$item->options->img}}" alt="man" /></a></td>
                                                <td class="product-name"><a href="#">{{$item->name}} </a></td>
                                                <input type="hidden" name="nameproduct[]" value="{{$item->name}}">
                                                <td class="product-price"><span class="amount">{{ number_format($price_sale) }} đ</span></td>
                                                <td class="product-quantity">

                                                    <input type="number" value="{{$item->qty}}" name="qty[]" min="1" onchange="updateCart(this.value,'{{$item->rowId}}')" step="1">
                                                </td>
                                                <td class="product-subtotal">{{ number_format($price_sale * $item->qty) }} đ</td>
                                                <td class="product-remove"><a href="{{url('/')}}/cart/delete/{{$item->rowId}}"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                            @php $sum +=  $price_sale * $item->qty; @endphp
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="text-center"><i>Chưa có sản phẩm nào</i></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <div class="buttons-cart mb-30">
                            <ul>
                                <li><a href="{{url('/cart/show')}}">Cập nhật giỏ hàng</a></li>
                                <li><a href="{{url('/')}}">Tiếp tục mua sắm</a></li>
                            </ul>
                        </div>
                       {{--  <div class="coupon">
                            <h3>Coupon</h3>
                            <p>Enter your coupon code if you have one.</p>
                            <form action="#">
                                <input type="text" placeholder="Coupon code">
                                <a href="#">Apply Coupon</a>
                            </form>
                        </div> --}}
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <div class="cart_totals">
                            <h2>Tổng giỏ hàng</h2>
                            <table>
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Tổng chưa giảm</th>
                                        <td>
                                            <span class="amount">{{ str_replace('.00', '', $initial) }} đ</span>
                                        </td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Tổng</th>
                                        <td>
                                            <strong>
                                                <span class="amount">{{ number_format($sum,0,',','.') }} đ
                                                    <input type="hidden" name="sum" value="{{ number_format($sum,0,',','.') }}">
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="wc-proceed-to-checkout">
                                    <button type="submut"> Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
