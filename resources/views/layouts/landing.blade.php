<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('landing/css/rtl-style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        support@domain.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        <a href="tel:9821188888" dir="ltr" class="text-dark">+98.21.188.888</a>
                    </div>
                </div>
                <div class="ht-right">
                    <a href="{{route('home')}}" class="login-panel"><i class="fa fa-user"></i>@lang('account area')</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries">
                            <option value='ir' data-image="{{asset('landing/img/flag-2.jpg')}}" data-imagecss="flag ir"
                                data-title="Persian"> Persian </option>
                            <option value='en' data-image="{{asset('landing/img/flag-1.jpg')}}" data-imagecss="flag yu"
                                data-title="English"> English </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">@lang('home')</a></li>
                        <li><a href="./shop.html">@lang('shop')</a></li>
                        <li><a href="#">@lang('collection')</a>
                            <ul class="dropdown">
                                <li><a href="#">@lang('handcraft')</a></li>
                                <li><a href="#">@lang('souvenirs')</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">@lang('blog')</a></li>
                        <li><a href="./contact.html">@lang('contant')</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Js Plugins -->
    <script src="{{asset('landing/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('landing/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('landing/js/main.js')}}"></script>
</body>

</html>
