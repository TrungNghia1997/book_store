{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'Edit category')
@section('link')
    <link rel="stylesheet" href="{{asset('/assets_admin/css/category.css')}}">

@endsection
@section('content')
<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Trang chủ</li>
        <li class="breadcrumb-item">
            <a href="#">Quản lý</a>
        </li>
        <li class="breadcrumb-item active">Sửa danh mục sản phẩm </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
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
                                    <form action="{{url('/')}}/admin/category/{{$cate->id}}" method="post" accept-charset="utf-8">
                                        @csrf

                                        <input type="hidden" name="_method" value="PUT">

                                        <div class="form-group">
                                            <label for="">Danh mục cha:</label>
                                            <select class="form-control" name="idParent" id="">
                                                <option value="0">----ROOT----</option>
                                                {{ getCategoryEdit($categories, 0, '', $cate->parent) }}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tên Danh mục</label>
                                            <input type="text" class="form-control" name="name"  placeholder="Tên danh mục mới" value="{{$cate->name}}">
                                            {{ ShowErrors($errors, 'name')}}

                                        </div>
                                        <button type="submit" class="btn btn-primary">Sửa danh mục</button>


                                    </form>


                                </div>
                                <div class="col-md-7">
                                    <h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
                                    <div class="vertical-menu">
                                        <div class="item-menu active">Danh mục </div>
                                        {{ showCategory($categories, 0, '') }}

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Xóa thành viên</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="" method="POST" accept-charset="utf-8">
                                                                        <div class="modal-body">
                                                                            @csrf
                                                                            <h4>Bạn có chắc chắn muốn xóa người dùng này</h4>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Quay lại</button>
                                                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

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
