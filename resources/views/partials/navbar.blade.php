<header>
    <div class="navbar">
        <div class="container">
            <div class="box-navbar">
                <div class="logo">
                    <h1>SRC SYAFIRA</h1>

                </div>
                <ul class="menu">
                    <li><a href="#profile">PROFIL</a></li>
                    <li><a href="#produk">PRODUK</a></li>
                    <li><a href="#contact">KONTAK</a></li>
                    @auth
                        <li class="navbar-nav nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown"> SISTEM SYAFIRA
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/cashier"><i class="fa-solid fa-computer"></i>
                                        Kasir</a></li>
                                <li><a class="dropdown-item" href="/admin"><i class="fa-solid fa-user-gear"></i>
                                        Admin</a></li>
                            </ul>
                        </li>
                    @endauth
                </ul>
                <i class="fa-solid fa-bars menu-bar"></i>
                <center class=" menu navbar-nav ms-auto ">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('MASUK ‎') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="navbar-nav nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </center>
            </div>
        </div>
    </div>
</header>

{{-- 
<nav class="navbar navbar-expand-lg navbar-dark bg-danger p-3 shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand " href="/"><i class="fa-solid fa-shop me-2"></i> <strong>SRC SYAFIRA</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="#profile">PROFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="#contact">Kontak</a>
                </li>
                @auth
                    <li class="navbar-nav nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown"> SISTEM SYAFIRA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/cashier"><i class="fa-solid fa-computer"></i>
                                    Kasir</a></li>
                            <li><a class="dropdown-item" href="/admin"><i class="fa-solid fa-user-gear"></i>
                                    Admin</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            <center class="navbar-nav ms-auto ">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN ‎') }}</a>
                        </li>
                    @endif
                @else
                    <li class="navbar-nav nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </center>
        </div>
    </div>
    </div>
</nav> --}}
{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'SRC SYAFIRA') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto" id="navbarNavDropdown">
                <div class="collapse navbar-collapse">
                    <!-- Authentication Links -->
                    @guest
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
                        <li class="navbar-nav nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </div>
            </ul>
        </div>
    </div>
</nav> --}}
