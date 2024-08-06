<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <title>@yield('title','Danh sách sách')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/shoes"><img style="max-width:60px" src="https://drake.vn/image/catalog/H%C3%ACnh%20content/converse-chuck-taylor-all-star-logo-play/Converse-chuck-taylor-all-star-logo-play-7.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                        
                        <!-- Authentication Links -->
                        @guest
                    <ul class="navbar-nav ms-auto">

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/shoes">Trang chủ</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      
                                @foreach ($cate as $cate)
                                <li><a class="dropdown-item" href="{{route('shoes.prdcate',$cate->id)}}">{{$cate->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('shoes.listprd')}}">Sản phẩm</a>
                          </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <form action="{{route('products.search')}}" method="get" class="d-flex" >
                            <input class="form-control" type="text" name="search" placeholder="Tìm kiếm sản phẩm...">
                            <button type="submit" class="btn  btn-primary">Tìm kiếm</button>
                        </form>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @if (Auth::user()->role == 'admin')
                                    <a class="dropdown-item" href="{{ route('shoes.index1') }}">
                                        Vào trang admin
                                     </a>
                                    @endif
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
