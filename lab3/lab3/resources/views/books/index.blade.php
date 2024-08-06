@extends('layout')

@section('content')
    <h1 class="mb-4">Danh sách sách</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Thêm sách</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Tiêu đề</th>
                <th>Ảnh mô tả</th>
                <th>Tác giả</th>
                <th>Nhà xuất bản</th>
                <th>Ngày xuất bản</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Loại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td><img src="{{ $book->thumbnail }}" alt="Thumbnail" width="100"></td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->publication }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
