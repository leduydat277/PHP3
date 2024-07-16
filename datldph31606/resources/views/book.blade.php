@extends('app')

@section('title', 'Trang chi tiết sách')

@section('content')
<div class="card" style="max-width: 600px; margin: auto;">
    <img src="{{$book->thumbnail}}" class="card-img-top" alt="Book Thumbnail">
    <div class="card-body">
        <h1 class="card-title">{{ $book->title }}</h1>
        <p class="card-text"><strong>Tác giả:</strong> {{ $book->author }}</p>
        <p class="card-text"><strong>Nhà xuất bản:</strong> {{ $book->publisher }}</p>
        <p class="card-text"><strong>Ngày xuất bản:</strong> {{ $book->publication }}</p>
        <p class="card-text"><strong>Giá:</strong> {{ $book->price }}</p>
        <p class="card-text"><strong>Số lượng:</strong> {{ $book->quantity }}</p>
        <p class="card-text"><strong>Loại sách:</strong> {{ $book->name }}</p>
    </div>
</div>
@endsection
