{{-- extends Kế thừa từ file --}}
@extends('admin.master')
{{--  --}}
@section('title', 'List product')
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
                <li class="breadcrumb-item active">Danh sách sản phẩm</li>
            </ol>
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Sản phẩm nổi bật</th>
                    <th>Giá</th>
                    <th>Sale</th>
                    <th>Trạng thái sản phẩm</th>
                    <td class="text-center" style="width: 200px;">Lựa chọn</td>
                </tr>
                @foreach($productRepository as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        @foreach($categoryRepository as $category)
                            @if($category->id == $item->category_id)
                                {{$category->name}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @if($item->is_feature == 1) Có @endif
                        @if($item->is_feature != 1) Không @endif
                    </td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->sale}}</td>
                    <td>
                        @if($item->status ==1) Còn hàng @endif
                        @if($item->status ==0) Hết hàng @endif
                    </td>
                    <td class="text-center">
                        <a href="{{url('/')}}/admin/product/{{$item->id}}" title="Detail" style=" display: inline-block;"><span class="btn btn-primary">Xem</span></a>
                        <a href="{{url('/')}}/admin/product/{{$item->id}}/edit" title="Edit" style=" display: inline-block;"><span class="btn btn-warning">Sửa</span></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{$item->id}}">
                        Xóa
                        </button>
                        <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modal{{$item->id}}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('/')}}/admin/product/{{$item->id}}" method="POST" accept-charset="utf-8">
                                        <div class="modal-body">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <h4>Are you sure</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach()
            </table>
            <div class="text-center">
                {{$productRepository->links('vendor.pagination.default')}}
            </div>
        </div>
    </div>
</main>
@endsection
