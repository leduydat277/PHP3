@extends('layout')

@section('title', 'Trang thêm sách')


@section('content')
<h4 class="d-flex mt-4">
    <a href="/shoes" class="nav-link">Trang chủ</a>><p>Admin</p>><p>Thêm sản phẩm</p>
</h4>  
  <form action="{{ route('shoes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Tên sản phẩm</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="thumbnail">Ảnh mô tả</label>
            <input type="text" name="image" id="image" class="form-control" required>
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
@endsection
