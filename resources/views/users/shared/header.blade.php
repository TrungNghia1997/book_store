<header>
            <div class="header-mid-area ptb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                            <div class="header-search">
                                <form action="{{url('/search')}}" class="search-form" method="GET">
                                    @csrf
                                    <div class="form-elemet has-icon">
                                        <input type="text" id="search" name="search" placeholder="Tìm kiếm tại đây..." />
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <button type="submit" class="hidden"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                            <div class="logo-area text-center logo-xs-mrg">
                                @foreach($option as $item)
                                    <a href="{{url('/')}}"><img src="{{$item->logo}}" alt="logo" /></a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="my-cart">
                                <ul>
                                    <li><a href="{{url('/cart/show')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
                                        <span>{{Cart::count()}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-mid-area-end -->
            <!-- main-menu-area-start -->
            <div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-area">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="{{ asset('/') }}">Trang chủ</a>
                                        </li>

                                        @foreach($categories as $item)
                                            @if($item->parent == 0)
                                                <li><a href="{{url('/')}}/danh_muc/{{$item->id}}">{{$item->name}}<i class="fa fa-angle-down"></i></a>
                                                    <div class="mega-menu">
                                                        @foreach($categories as $item1)
                                                            @if($item1->parent == $item->id)
                                                                <span>
                                                                    <a href="{{url('/')}}/danh_muc/{{$item1->id}}" class="title">{{$item1->name}}</a>
                                                                    @foreach($categories as $item2)
                                                                        @if($item2->parent == $item1->id)
                                                                            <a href="{{url('/')}}/danh_muc/{{$item1->id}}">{{$item2->name}}</a>
                                                                        @endif
                                                                    @endforeach
                                                                </span>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach

                                        <li><a href="#">Trang<i class="fa fa-angle-down"></i></a>
                                            <div class="sub-menu sub-menu-2">
                                                <ul>
                                                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                                                    <li><a href="{{ url('/san_pham') }}">Sản phẩm</a></li>
                                                    <li><a href="{{ url('/lien_he') }}">Liên hệ</a></li>
                                                    <li><a href="{{ url('/gioi_thieu') }}">Giới thiệu chúng tôi</a></li>
                                                    <li><a href="{{ url('/dang_nhap') }}">Đăng nhập</a></li>
                                                    <li><a href="{{ url('/dang_ky') }}">Đăng ký</a></li>
                                                    <li><a href="{{ url('/dang_xuat') }}">Đăng xuất</a></li>
                                                    <li><a href="{{ url('/cart/show') }}">Giỏ hàng</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="safe-area">
                                <a href="{{url('/sale')}}">sales off</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-menu-area-end -->
            <!-- mobile-menu-area-start -->
            <div class="mobile-menu-area hidden-md hidden-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul id="nav">
                                        <li><a href="{{url('/')}}">Trang chủ</a>
                                        </li>
                                        @foreach($categories as $item)
                                            @if($item->parent == 0)
                                                <li><a href="{{url('/')}}/danh_muc/{{$item->id}}">{{$item->name}}</a>
                                                    <ul>
                                                         @foreach($categories as $item1)
                                                            @if($item1->parent == $item->id)
                                                                <li><a href="{{url('/')}}/danh_muc/{{$item1->id}}">{{$item1->name}}</a></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endforeach
                                        <li><a href="product-details.html">Page</a>
                                            <ul>
                                                <li><a href="{{url('/')}}">Trang chủ</a></li>
                                                <li><a href="{{url('/san_pham')}}">Sản phẩm</a></li>
                                                <li><a href="{{url('/lien_he')}}">Liên hệ</a></li>
                                                <li><a href="{{url('/gioi_thieu')}}">Giới thiệu chúng tôi</a></li>
                                                <li><a href="{{url('/dang_nhap')}}">Đăng nhập</a></li>
                                                <li><a href="{{url('/dang_ky')}}">Đăng ký</a></li>
                                                <li><a href="{{url('/dang_xuat')}}">Đăng xuát</a></li>
                                                <li><a href="{{url('/cart/show')}}">Giỏ hàng</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-end -->
        </header>
