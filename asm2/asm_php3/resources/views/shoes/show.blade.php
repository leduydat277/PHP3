@extends('layouts.app')


@section('title','Chi tiết sản phẩm')

@section('content')

<h4 class="d-flex mt-4">
    <a href="" class="nav-link">Trang chủ</a>><a href="" class="nav-link">Sản phẩm</a>><p>{{$shoe->name}}</p>
</h4>
<div class="row">
    <div class="col">
        <img src="{{$shoe->image}}" alt="" class="img-thumbnail">
    </div>
    <div class="col">
        Tên giày: <p class="fw-bold">{{$shoe->name}}</p>
        <p>Size giày: {{$shoe->size}}</p>
        <p>Mã giày: {{$shoe->id}}</p>
        Giá giày: <h4>{{number_format($shoe->price)}} $</h4>
        Mô tả: <p>{{$shoe->content}}</p>
        <div class="row">
            <button class="btn btn-warning m-2">Thêm vào giỏ hàng</button>
            <button class="btn btn-danger m-2">Mua ngay</button>
        </div>
        Còn lại: <p>{{$shoe->quantity}} sản phẩm</p>
    </div>
</div>
@endsection