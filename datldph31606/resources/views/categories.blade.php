@extends('app')

@section('title', 'Trang danh sách loại sách')

@section('content')
<h1 class="mt-5 mb-4">Danh sách loại sách</h1>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Mã loại</th>
            <th>Tên</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $cate)
        <tr>
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->name }}</td>
            <td>
                <a href="{{ url('categories/' . $cate->id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
