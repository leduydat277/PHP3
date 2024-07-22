@extends('layout')

@section('title', 'Trang sửa sách')

@section('content')
<h4 class="d-flex mt-4">
    <a href="/shoes" class="nav-link">Trang chủ</a>><p>Admin</p>><p>Sửa sản phẩm</p>
</h4>  

    <form action="{{ route('shoes.update', $shoe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tên sản phẩm</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $shoe->name }}" required>
        </div>

        <div class="form-group">
            <label for="thumbnail">Ảnh mô tả</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ $shoe->image }}" required>
        </div>

        <div class="form-group">
            <label for="author">Màu</label>
            <input type="text" name="color" id="color" class="form-control" value="{{ $shoe->color }}" required>
        </div>

        <div class="form-group">
            <label for="publisher">Size</label>
            <input type="text" name="size" id="size" class="form-control" value="{{ $shoe->size }}" required>
        </div>

        <div class="form-group">
            <label for="publication">Mô tả</label>
            <input type="text" name="Content" id="Content" class="form-control" value="{{ $shoe->Content }}" required>
        </div>

        <div class="form-group">
            <label for="price">Giá bán</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $shoe->price }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Số lượng</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $shoe->quantity }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Loại</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $shoe->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật giày</button>
    </form>
@endsection
