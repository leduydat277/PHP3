@extends('layouts.admin')

@section('title', 'Trang thêm sách')


@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
  <form action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Tên sản phẩm</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="thumbnail">Ảnh mô tả</label>
            <input type="file" class="form-control" id="image" name="image" onchange="previewImage(this)">
            <img id="image-preview" src="#" alt="Image Preview" style="display:none; max-width: 200px; margin-top: 10px;">
        </div>
        <div class="form-group">
            <label for="thumbnail">Màu sắc</label>
            <input type="text" name="color" id="color" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="publisher">Size</label>
            <input type="text" name="size" id="size" class="form-control" required>

        <div class="form-group">
            <label for="price">Giá bán</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Mô tả</label>
            <input type="number" name="content" id="content" class="form-control" required>
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
