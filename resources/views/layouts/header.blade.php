<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slicknav.min.css') }}" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}" media="all" />
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="all" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page loader -->
<div id="preloader"></div>
<!-- header section start -->
<header class="header">
    <div class="container">
        <div class="header-area">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
            </div>
            <div class="header-right">
                <form action="#">
                    <select>
                        <option value="Movies">Movies</option>
                        <option value="Movies">Movies</option>
                        <option value="Movies">Movies</option>
                    </select>
                    <input type="text"/>
                    <button><i class="icofont icofont-search"></i></button>
                </form>
                <ul>
                    <li><a href="#">Welcome Guest!</a></li>
                    <li><a class="login-popup" href="#">Login</a></li>
                </ul>
            </div>
            <div class="menu-area">
                <div class="responsive-menu"></div>
                <div class="mainmenu">
                    <ul id="primary-menu">
                        @foreach ($menu->getMenu() as $item)
                            <li><a @if($menu->current() == \Route::current()->getName()) class="active" @endif href="{{ route($item['route']) }}">{{ $item['title'] }} @if(isset($item['submenu'])) <i class="icofont icofont-simple-down"></i>@endif</a></li>
                            @if(false)
                            <ul>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="movie-details.html">Movie Details</a></li>
                            </ul>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('overlay-area')

<div class="login-area">
    <div class="login-box">
        <a href="#"><i class="icofont icofont-close"></i></a>
        <h2>LOGIN</h2>
        <form action="#">
            <h6>USERNAME OR EMAIL ADDRESS</h6>
            <input type="text" />
            <h6>PASSWORD</h6>
            <input type="text" />
            <div class="login-remember">
                <input type="checkbox" />
                <span>Remember Me</span>
            </div>
            <div class="login-signup">
                <span>SIGNUP</span>
            </div>
            <a href="#" class="theme-btn">LOG IN</a>
            <span>Or Via Social</span>
            <div class="login-social">
                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                <a href="#"><i class="icofont icofont-camera"></i></a>
            </div>
        </form>
    </div>
</div>
