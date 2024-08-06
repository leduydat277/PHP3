@extends('layouts.app')

@section('title' , 'Danh sách sản phẩm')
@section('content')
<h4 class="d-flex mt-4">
    <a href="/shoes" class="nav-link">Trang chủ</a>><p>Danh sách sản phẩm</p>
</h4>

<div class="row">

    @foreach ($prdcate as $shoe)
    <div class="col-4 mt-2 mb-2">
        <img src="{{$shoe->image}}" alt="" class="img-thumbnail">
        <p>{{$shoe->name}}</p>
        <p>{{number_format($shoe->price)}} $</p>
        <a href="{{ route('shoes.show', $shoe->id) }}" class="btn btn-primary">Xem chi tiết</a>
    </div>
    @endforeach
</div>
{{ $prdcate->links('pagination::bootstrap-4') }}

@endsection