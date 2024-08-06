@extends('layouts.admin')


@section('title', 'Trang sửa sách')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <form action="{{ route('shoes.update', $shoe->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tên sản phẩm</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $shoe->name }}" required>
        </div>

        <div class="form-group">
            <label for="thumbnail">Ảnh mô tả</label>
            <label for="image">image</label>
            <input type="file" class="form-control" id="image" name="image" onchange="previewImage(this)">
            <img id="image-preview" src="{{ $shoe->image ? asset('storage/'.$shoe->image) : '#' }}" alt="Image Preview" style="{{ $shoe->image ? 'display:block;' : 'display:none;' }}" alt="Image Preview" style="display:none; max-width: 200px; margin-top: 10px;">
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
            <input type="text" name="content" id="content" class="form-control" value="{{ $shoe->content }}" required>
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
    <script>
    function previewImage(input) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const preview = document.getElementById('image-preview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
