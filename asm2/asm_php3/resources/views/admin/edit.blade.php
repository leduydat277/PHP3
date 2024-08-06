@extends('layouts.admin')


@section('title', 'Trang sửa thông tin user')

@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<form action="{{route('admin.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Họ và tên</label>
        <input type="text" name="fullname" id="name" class="form-control" value="{{ $user->fullname }}" required>
    </div>

    <div class="form-group">
        <label for="author">Username</label>
        <input type="text" name="username" id="color" class="form-control" value="{{ $user->username }}" required>
    </div>
    <div class="form-group">
        <label for="avatar">Avatar</label>
        <input type="file" class="form-control" id="avatar" name="avatar" onchange="previewImage(this)">
        <img id="image-preview" width="100" src="{{ $user->avatar ? asset('storage/'.$user->avatar) : '#' }}" alt="Image Preview" style="{{ $user->avatar ? 'display:block;' : 'display:none;' }}" alt="Image Preview" style="display:none; max-width: 200px; margin-top: 10px;">
    </div>

    <div class="form-group">
        <label for="category_id">Role</label>
        <select name="role" id="category_id" class="form-control" required>
            @if ($user->role == 'admin')
                <option value="admin" selected>admin</option>
                <option value="user" >user</option>
            @else
            <option value="admin">admin</option>
                <option value="user" selected>user</option>
            @endif
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{route('change-pass')}}" class="btn btn-danger">Đổi mật khẩu</a>
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