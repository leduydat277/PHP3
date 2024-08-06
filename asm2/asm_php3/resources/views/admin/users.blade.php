@extends('layouts.admin')

@section('content')
<div class="container">
    @if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <h1>Danh sách user</h1>
    
    <a href="{{route('addUser')}}" class="btn btn-primary">Thêm mới user</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Username</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Trạng thái</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->username }}</td>
                <td><img src="{{asset('storage/'. $user->avatar)}}" alt="" width="100" height="100"></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->active ? 'Kích hoạt' : 'Vô hiệu' }}</td>
                <td>
                    @if (Auth::user()->id == $user->id)
                    
                        <button type="submit" disabled class="btn btn-sm {{ $user->active ? 'btn-danger' : 'btn-success' }}">
                            {{ $user->active ? 'Vô hiệu' : 'Kích hoạt' }}
                        </button>
                    @else
                    <form action="/admin/users/{{ $user->id }}/toggle-active" method="POST">
                        @csrf
                    <button type="submit"  onclick="return confirm('Xác nhận đổi trạng thái từ {{ $user->active ? 'Vô hiệu' : 'Kích hoạt'}} -> {{ !$user->active ? 'Vô hiệu' : 'Kích hoạt'}}')" class="btn btn-sm {{ $user->active ? 'btn-danger' : 'btn-success' }}">
                        {{ $user->active ? 'Vô hiệu' : 'Kích hoạt' }}
                    </button>
                    </form>

                    @endif
    <br>
                    <a href="{{route('editUser',$user->id)}}" class="btn btn-primary">Sửa thông tin</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
