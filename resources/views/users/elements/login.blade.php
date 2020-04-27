@extends('users.master')
{{--  --}}
@section('title', 'Đăng nhập')
@section('content')
    <div class="breadcrumbs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li><a href="{{url('/dang_nhap')}}" class="active">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- user-login-area-start -->
    <div class="user-login-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-title text-center mb-30">
                        <h2>Đăng nhập</h2>
                    </div>
                </div>
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
                    <form action="{{url('/dang_nhap')}}" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="login-form">
                            <div class="single-login">
                                <label>Email<span>*</span></label>
                                <input type="text" name="email" required="" placeholder="Email" />
                            </div>
                            <div class="single-login">
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="password" required="" placeholder="Mật khẩu" />
                            </div>
                            <div class="single-login single-login-2">

                                <button type="submit">Đăng nhập</button>
                                <input id="rememberme" type="checkbox" name="rememberme" value="forever">
                                <span>Ghi nhớ</span>
                            </div>
                            <a href="#">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
