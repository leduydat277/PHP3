@extends('app')
@section('title', 'Trang danh sách sách')
@section('content')
<h1 class="mt-5 mb-4">Danh sách sách</h1>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Tiêu đề</th>
            <th>Ảnh</th>
            <th>Tác giả</th>
            <th>Nhà xuất bản</th>
            <th>Thời gian xuất bản</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Loại sách</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td><img src="{{ $book->thumbnail }}" alt="Thumbnail" class="img-fluid" style="max-width: 100px;"></td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->publication }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->quantity }}</td>
            <td>{{ $book->name }}</td>
            <td>
                <a href="{{ url('books/' . $book->id) }}" class="btn btn-primary">Xem chi tiết</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
