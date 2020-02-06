<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@lang('main page')</title>

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
                        <a href="tel:9821188888" class="text-dark">+98.21.188.888</a>
                    </div>
                </div>
                <div class="ht-right">
                    <a href="{{route('home')}}" class="login-panel"><i class="fa fa-user"></i>@lang('account area')</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries">
                            <option value='yt' data-image="{{asset('landing/img/flag-2.jpg')}}" data-imagecss="flag ir"
                                data-title="English">Persian</option>
                            <option value='yu' data-image="{{asset('landing/img/flag-1.jpg')}}" data-imagecss="flag yu"
                                data-title="Bangladesh">English </option>
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
                                <li><a href="#">@lang('handcroft')</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{asset('landing/img/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mx-auto text-center">
                            <h1>@lang('carousel title')</h1>
                            <p> @lang('DESCRIPTION...') </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{asset('landing/img/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mx-auto text-center">
                            <h1>@lang('carousel title')</h1>
                            <p> @lang('DESCRIPTION...') </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{asset('landing/img/banner-1.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4> @lang('handcroft') </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{asset('landing/img/banner-2.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4> @lang('souvenirs') </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="{{asset('landing/img/products/handcroft-large.jpg')}}">
                        <h2>@lang('handcroft')</h2>
                        <a href="#">@lang('discover more')</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">@lang('category') 1</li>
                            <li>@lang('category') 2</li>
                            <li>@lang('category') 3</li>
                            <li>@lang('category') 4</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('landing/img/products/women-1.jpg')}}" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ @lang('view')</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('landing/img/products/women-2.jpg')}}" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('landing/img/products/women-3.jpg')}}" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('landing/img/products/women-4.jpg')}}" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="{{asset('landing/img/time-bg.jpg')}}">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>@lang('Deal Of The Week')</h2>
                    <p>@lang('DESCRIPTION...')</p>
                    <div class="product-price">
                        45,500 تومان
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>3</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">@lang('Shop Now')</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo mt-5">
        <div class="insta-item set-bg" data-setbg="{{asset('landing/img/insta-1.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">@lang('visit on instagram')</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('landing/img/insta-2.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">@lang('visit on instagram')</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('landing/img/insta-3.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">@lang('visit on instagram')</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('landing/img/insta-4.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">@lang('visit on instagram')</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('landing/img/insta-5.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">@lang('visit on instagram')</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('landing/img/insta-6.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">@lang('visit on instagram')</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>@lang('latest blogs')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{asset('landing/img/latest-1.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    @lang('DATE')
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>@lang('blog title')</h4>
                            </a>
                            <p> @lang('DESCRIPTION...') </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{asset('landing/img/latest-2.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    @lang('DATE')
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>@lang('blog title')</h4>
                            </a>
                            <p> @lang('DESCRIPTION...') </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{asset('landing/img/latest-3.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    @lang('DATE')
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>@lang('blog title')</h4>
                            </a>
                            <p> @lang('DESCRIPTION...') </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

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
