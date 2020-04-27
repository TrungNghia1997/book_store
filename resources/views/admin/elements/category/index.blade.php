{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'List Category')
@section('link')
    <link rel="stylesheet" href="{{asset('/assets_admin/css/category.css')}}">
@endsection
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <div class="animated fadeIn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Trang chủ</li>
                <li class="breadcrumb-item">
                    <a href="#">Quản lý</a>
                </li>
                <li class="breadcrumb-item active">Danh mục sản phẩm cấp</li>
            </ol>
            @if(session('thongbao'))
               <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>

            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <form action="{{url('/admin/category')}}" method="post" accept-charset="utf-8">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Danh mục cha:</label>
                                            <select class="form-control" name="idParent" id="">
                                                <option value="0">----ROOT----</option>
                                                {{ getCategory($categories, 0, '', 0) }}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tên Danh mục</label>
                                            <input type="text" class="form-control" name="name" id="" placeholder="Tên danh mục mới" value="{{old('name')}}">
                                            {{ ShowErrors($errors, 'name')}}

                                        </div>
                                        <button type="submit" class="btn btn-primary">Thêm danh mục</button>


                                    </form>


                                </div>



                                <div class="col-md-7" >

                                    <h3 style="margin: 0;"><strong>Phân cấp Danh mục</strong></h3>
                                    <div class="vertical-menu">
                                        <div class="item-menu active">Danh mục </div>

                                        {{ showCategory($categories, 0, '') }}


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->

            </div>
        </div>
    </div>
</main>
@endsection
