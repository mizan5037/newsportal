<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Title -->
        <title>@yield('title')</title>
    
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('front/img/core-img/favicon.ico') }} ">
    
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/style.css') }} ">
    
    </head>
    
    <body>
        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
    
            <!-- Top Header Area -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('front/img/core-img/logo.png') }}" alt=""></a>
                                </div>
    
                                <!-- Login Search Area -->
                                <div class="login-search-area d-flex align-items-center">
                                    <!-- Login -->
                                    <div class="login d-flex">
                                    
                                        <a href="{{ route('login') }}">Login</a>
                                        <a href="{{ route('register') }}">Register</a>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="search-form">
                                        <form action="#" method="post">
                                            <input type="search" name="search" class="form-control" placeholder="Search">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('front/img/core-img/logo.png') }} " alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="/{{ strtolower($category->name) }}">{{ $category->name }}</a></li>
                            @endforeach


                            <li><a href="#">Mega Menu</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Catagories</li>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="single-post.html">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Catagories</li>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="single-post.html">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Catagories</li>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="single-post.html">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <!-- Single Featured Post -->
                                        <div class="single-blog-post small-featured-post d-flex">
                                            <div class="post-thumb">
                                                <a href="#"><img src="{{ asset('front/img/bg-img/23.jpg') }} "
                                                        alt=""></a>
                                            </div>
                                            <div class="post-data">
                                                <a href="#" class="post-catagory">Travel</a>
                                                <div class="post-meta">
                                                    <a href="#" class="post-title">
                                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis
                                                            eleifend id.</h6>
                                                    </a>
                                                    <p class="post-date"><span>7:00 AM</span> | <span>April
                                                            14</span></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Featured Post -->
                                        <div class="single-blog-post small-featured-post d-flex">
                                            <div class="post-thumb">
                                                <a href="#"><img src="{{ asset('front/img/bg-img/24.jpg') }} "
                                                        alt=""></a>
                                            </div>
                                            <div class="post-data">
                                                <a href="#" class="post-catagory">Politics</a>
                                                <div class="post-meta">
                                                    <a href="#" class="post-title">
                                                        <h6>Augue semper congue sit amet ac sapien. Fusce
                                                            consequat.</h6>
                                                    </a>
                                                    <p class="post-date"><span>7:00 AM</span> | <span>April
                                                            14</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- ##### Header Area End ##### -->