<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Trang chủ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Trang chủ</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/categories') }}">Loại sách</span></a>
                    </li><li class="nav-item active">
                        <a class="nav-link" href="{{ url('/books') }}">Danh sách sách</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">

