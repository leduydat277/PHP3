@extends('layout')

@section('title', 'Trang thêm sách')


@section('content')
    <h1 class="mb-4">Thêm sách</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="thumbnail">Ảnh mô tả</label>
            <input type="text" name="thumbnail" id="thumbnail" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="author">Tác giả</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="publisher">Nhà xuất bản</label>
            <input type="text" name="publisher" id="publisher" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="publication">Ngày xuất bản</label>
            <input type="date" name="publication" id="publication" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Giá bán</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantity">Số lượng</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category_id">Loại</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Thêm sách</button>
    </form>
@endsection
