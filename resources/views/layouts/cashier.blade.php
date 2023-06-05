<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <style>
        body {
            background-image: url('https://media.istockphoto.com/id/511661914/photo/white-marble-patterned-texture-background.webp?b=1&s=170667a&w=0&k=20&c=K77fw3FThWPhj3iuZRpl5ZOCzXfpT1HmwuGxCIOKt2w=');
        }
    </style>
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-white">

        <!-- Navbar Brand-->
        <a class="navbar-brand text-dark mx-2"><i class="fa-solid fa-shop me-2"></i> <strong>KASIR
                SYAFIRA</strong></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form action="/product/search" class="d-flex justify-content-end ms-auto me-0 me-md-3 my-2 my-md-0"
            method="GET">
            <input class="form-control btn-outline-light me-2" type="search" placeholder="Search by name"
                name="keyword" aria-label="Search">
            <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <!-- Navbar-->
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                    {{ Auth::user()->name }}</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();
            ">
{{ __('Logout') }} </a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf </form></ul></li></ul></nav><div id="layoutSidenav"><div id="layoutSidenav_nav">@include('partials.sidebar') </div><div id="layoutSidenav_content"><main><div class="container-fluid">@yield('content') </div></main><footer><div class="container text-dark"><div class=" align-items-center small"><div class="text-center fw-bold">Copyright &copy;
            THORNY DEVIL 2023 - All Rights Reserved</div></div></div></footer></div></div>@include('sweetalert::alert') <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
            </script><script src="{{ asset('assets/js/admin.js') }}"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>{{-- <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script> --}} <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script><script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script></body></html>
