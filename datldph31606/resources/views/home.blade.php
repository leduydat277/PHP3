@extends('app')

@section('title', 'Trang chủ')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1 class="mb-4">8 Sản phẩm có giá cao nhất</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highPriceBooks as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <a href="{{ url('books/' . $book->id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h1 class="mb-4">8 Sản phẩm có giá thấp nhất</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lowPriceBooks as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <a href="{{ url('books/' . $book->id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
