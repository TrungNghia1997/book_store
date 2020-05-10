@extends('users.master')
{{--  --}}
@section('title', 'Liên hệ')
@section('content')
    <div class="breadcrumbs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li><a href="{{url('/')}}lien_he" class="active">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <!-- googleMap-area-start -->
    <div class="map-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="googleMap">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6888436891145!2d105.84344031440693!3d21.005106393962464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad5569f4fbf1%3A0x5bf30cadcd91e2c3!2zxJDhuqBJIEjhu4xDIELDgUNIIEtIT0EgQ-G7lE5HIFRS4bqmTiDEkOG6oEkgTkdIxKhB!5e0!3m2!1svi!2s!4v1578584219974!5m2!1svi!2s" width="1170" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- googleMap-end -->
    <!-- contact-area-start -->
    <div class="contact-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-info">
                        <h3>Thông tin liên hệ</h3>
                        @foreach($option as $item)
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Địa chỉ: </span>
                                    {{$item->address}}
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <span>Số điện thoại: </span>
                                    0{{$item->phone}}
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i>
                                    <span>Email: </span>
                                    <a href="#">{{$item->email}} </a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <h3><i class="fa fa-envelope-o"></i>Ý kiến phản hồi</h3>
                        <form id="contact-form" action="{{url('/')}}email" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form-3">
                                        <input name="name" type="text" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form-3">
                                        <input name="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-form-3">
                                        <input name="subject" type="text" placeholder="Tiêu đề">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                     <div class="single-form-3">
                                        <textarea name="message" placeholder="Nội dung"></textarea>
                                        <button class="submit" type="submit">Gửi</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
