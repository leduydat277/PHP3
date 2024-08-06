@extends('layout')

@section('title', 'Trang sửa sách')

@section('content')
    <h1 class="mb-4">Sửa sách</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
        </div>

        <div class="form-group">
            <label for="thumbnail">Ảnh mô tả</label>
            <input type="text" name="thumbnail" id="thumbnail" class="form-control" value="{{ $book->thumbnail }}" required>
        </div>

        <div class="form-group">
            <label for="author">Tác giả</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
        </div>

        <div class="form-group">
            <label for="publisher">Nhà xuất bản</label>
            <input type="text" name="publisher" id="publisher" class="form-control" value="{{ $book->publisher }}" required>
        </div>

        <div class="form-group">
            <label for="publication">Ngày xuất bản</label>
            <input type="date" name="publication" id="publication" class="form-control" value="{{ $book->publication }}" required>
        </div>

        <div class="form-group">
            <label for="price">Giá bán</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $book->price }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Số lượng</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $book->quantity }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Loại</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $book->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật sách</button>
    </form>
@endsection
