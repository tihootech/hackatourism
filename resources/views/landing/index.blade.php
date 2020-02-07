@extends('layouts.landing')
@section('title')
    <title>@lang('main page')</title>
@endsection
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{asset('landing/img/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 hero-content">
                            <h1>@lang('carousel title')</h1>
                            <p> @lang('DESCRIPTION...') </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{asset('landing/img/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 hero-content">
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
                            <h4> @lang('handcraft') </h4>
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
                    <div class="product-large set-bg" data-setbg="{{asset('landing/img/products/handcraft-large.jpg')}}">
                        <h2>@lang('handcraft')</h2>
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
                    @if ($products->count())
                        <div class="product-slider owl-carousel">

                            @foreach ($products as $product)
                                <div class="product-item">
                                    <div class="pi-pic">
                                        @if ($product->main_image)
                                            <img src="{{asset($product->main_image->path)}}" alt="{{$product->title}}">
                                        @endif
                                        @if ($product->discount)
                                            <div class="sale">{{$product->discount}}% @lang('discount')</div>
                                        @endif
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
                                        <a href="#">
                                            <h5>{{$product->title}}</h5>
                                        </a>
                                        <div class="product-price">
                                            @if ($product->discount)
                                                <span>{{nf($product->price)}}</span>
                                            @endif
                                            {{nf($product->cost)}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @else
                        <div class="alert alert-warning">
                            محصولی در سیستم ثبت نشده است
                        </div>
                    @endif
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
@endsection
