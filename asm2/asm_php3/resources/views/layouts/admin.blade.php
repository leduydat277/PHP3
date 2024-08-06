<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Best Bootstrap Admin Dashboards">
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg">

		<!-- Title -->
		<title>@yield('title','Admin')</title>


		<!-- *************
			************ Common Css Files *************
		************ -->

		<!-- Animated css -->
		<link rel="stylesheet" href="{{asset('build/assets/css/animate.css')}}">


		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="{{asset('build/assets/fonts/bootstrap/bootstrap-icons.css')}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{asset('build/assets/css/main.min.css')}}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

	</head>
    <body>
        
        <nav class="sidebar-wrapper">

            <!-- Sidebar brand starts -->
            <div class="sidebar-brand">
                <a href="{{route('admin1')}}" class="logo">
                    <img src="{{asset('build/assets/images/logo.svg')}}" alt="Admin Dashboards" />
                </a>
            </div>
            <!-- Sidebar brand starts -->

            <!-- Sidebar menu starts -->
            <div class="sidebar-menu">
                <div class="sidebarMenuScroll">
                    <ul>
                        <li class="sidebar-dropdown active">
                            <a href="{{route('admin1')}}">
                                <i class="bi bi-house"></i>
                                <span class="menu-text">Dasboard</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('shoes.index1')}}">Quản lý giày</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin')}}">Quản lý user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- Sidebar menu ends -->
        </nav>

			<div class="main-container">
                <div class="page-header">

					<div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

					<!-- Breadcrumb start -->
					<ol class="breadcrumb d-md-flex d-none">
						<li class="breadcrumb-item">
							<i class="bi bi-house"></i>
							<a href="{{route('admin1')}}">Home</a>
						</li>
					</ol>
					<!-- Breadcrumb end -->

					<!-- Header actions ccontainer start -->
					<div class="header-actions-container">

						<!-- Search container start -->
						<div class="search-container">

							<!-- Search input group start -->
                            
							<!-- Search input group end -->

						</div>
						<ul class="header-actions">
                            <li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name d-none d-md-block">{{Auth::user()->username}}</span>
									<span class="avatar">
										<img src="{{asset('storage/'.Auth::user()->avatar)}}" alt="Admin Templates">
										<span class="status online"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
                <div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
                    @yield('content')
                    </div>

	<script src="{{asset('build/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('build/assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('build/assets/js/modernizr.js')}}"></script>
		<script src="{{asset('build/assets/js/moment.js')}}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="{{asset('build/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
		<script src="{{asset('build/assets/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>

		<!-- Apex Charts -->
		<script src="{{asset('build/assets/vendor/apex/apexcharts.min.js')}}"></script>
		<script src="{{asset('build/assets/vendor/apex/custom/sales/salesGraph.js')}}"></script>
		<script src="{{asset('build/assets/vendor/apex/custom/sales/revenueGraph.js')}}"></script>
		<script src="{{asset('build/assets/vendor/apex/custom/sales/taskGraph.js')}}"></script>

		<!-- Main Js Required -->
		<script src="{{asset('build/assets/js/main.js')}}"></script>

	</body>

</html>