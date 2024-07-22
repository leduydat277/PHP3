@extends('layout')

@section('content')
    <h1 class="mb-4">Danh sách sách</h1>
    <a href="{{ route('shoes.create') }}" class="btn btn-primary mb-3">Thêm sách</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Tên</th>
                <th>Ảnh mô tả</th>
                <th>Size</th>
                <th>Màu</th>
                <th>Giá bán</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Loại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shoes as $shoe)
                <tr>
                    <td>{{ $shoe->name }}</td>
                    <td><img src="{{ $shoe->image }}" alt="Thumbnail" width="100"></td>
                    <td>{{ $shoe->size }}</td>
                    <td>{{ $shoe->color }}</td>
                    <td>{{ $shoe->price }}</td>
                    <td>{{ $shoe->content }}</td>
                    <td>{{ $shoe->quantity }}</td>
                    <td>{{ $shoe->category->name }}</td>
                    <td>
                        <a href="{{ route('shoes.edit', $shoe->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('shoes.destroy', $shoe->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{{ $shoes->links() }}
@endsection