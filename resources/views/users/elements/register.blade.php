@extends('users.master')
{{--  --}}
@section('title', 'Đăng ký')
@section('content')
    <div class="breadcrumbs-area mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-menu">
                            <ul>
                                <li><a href="{{url('/')}}">Trang chủ</a></li>
                                <li><a href="{{url('/dang_ky')}}" class="active">Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area-end -->
        <!-- user-login-area-start -->
        @if(session('thongbao'))
               <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>

            @endif
        {{ ShowErrors($errors, 'email')}}
        <div class="user-login-area mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-title text-center mb-30">
                            <h2>Đăng ký</h2>
                            <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et quasi architecto beat</p>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="billing-fields">
                            <form action="{{url('/dang_ky')}}" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-register">
                                            <label>Họ và tên<span>*</span></label>
                                            <input type="text" name="name" required="" class= "form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-register">
                                            <label>Email<span>*</span></label>
                                            <input type="text" name="email" required="" class= "form-control" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-register">
                                            <label>Số điện thoại<span>*</span></label>
                                            <input type="text" name="phone_number" required="" class= "form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-register">
                                    <label>Địa chỉ<span>*</span></label>
                                    <input type="text" placeholder="Street address" name="address" required="" class= "form-control"/>
                                </div>
                                <div class="single-register">
                                    <label>Mật khẩu<span>*</span></label>
                                    <input type="password" placeholder="Mật khẩu" name="password" required="" class= "form-control"/>
                                </div>
                                <div class="single-register">
                                    <label>Xác nhận mật khẩu<span>*</span></label>
                                    <input type="password" placeholder="Xác nhận mật khẩu" name="password_confirm" required="" class= "form-control"/>
                                </div>
                                <div class="single-register single-register-3">
                                    <input id="rememberme" type="checkbox" name="rememberme" value="forever">
                                    <label class="inline">Tôi đồng ý <a href="#">Điều khoản và quyền lời</a></label>
                                </div>
                                <div class="single-register">
                                    <button type="submit">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
