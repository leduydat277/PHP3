@extends('layouts.admin')
@section('title','Thêm mới user')
@section('content')
<h1>Thêm mới user</h1>

<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Họ và tên</label>
        <input type="text" name="fullname" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" name="username" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="thumbnail">Ảnh đại diện</label>
        <input type="file" class="form-control" id="avatar" name="avatar" onchange="previewImage(this)">
        <img id="image-preview" src="#" alt="Image Preview" style="display:none; max-width: 200px; margin-top: 10px;">
    </div>


    <div class="form-group">
        <label for="publisher">Email</label>
        <input type="text" name="email" id="size" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="price">Password</label>
        <input type="password" name="password" id="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="price">Role</label>
        <select name="role" id="" class="form-select">
            <option value="admin">Admin</option>
            <option value="user">User</option>

        </select>
    </div>


    <button type="submit" class="btn btn-primary">Thêm user</button>
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