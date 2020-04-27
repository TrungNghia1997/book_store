{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'tùy chỉnh')
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <
        <li class="breadcrumb-item">Trang chủ</li>
        <li class="breadcrumb-item">
            <a href="#">Quản lý</a>
        </li>
        <li class="breadcrumb-item active">Chi tiết tùy chỉnh</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="content-news-detail">
                        <div class="newsdetail">
                            <p>
                                Email: <span>{{$optionRepository->email}}</span>
                            </p>
                            <p>
                                Logo: 
                            <p><img src="{{$optionRepository->logo}}" alt="" width="200px"></p>
                            </p>                  
                            <p>
                                Địa chỉ: <span>{{$optionRepository->address}}</span>
                            </p>
                            <p>
                                Số điện thoại liên hệ: <span>{{$optionRepository->phone}}</span>
                            </p>                          
                            <p>
                                Ảnh slide: 
                            <ul class="fix-show-images">
                                @if(isset($slides))
                                @foreach($slides as $images)
                                <li><img src="{{$images}}" alt="" width="100px"></li>
                                @endforeach
                                @endif
                            </ul>
                            <div class="clearfix"> 
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