<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicons -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth


    <!-- Vendor CSS (Icon Font) -->

    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/ionicons.min.css') }}">
    


    <!-- Plugins CSS (All Plugins Files) -->


    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/aos.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/fancybox.min.css') }}" />


    <!-- Main Style CSS -->

<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->



    <!-- 
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">  
    -->
</head>

<body>
    <!-- Header Section Start -->
    <div class="header header-transparent-bg section-fluid">

        <!-- Header Wrapper Start -->
        <div class="header-wrapper">
            <div class="header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="{{ route('home') }}">
                                    <img class="fit-image" src="{{ asset('uploads/images/logos/header_logo.png') }}" alt="Header Logo">
                                </a>
                            </div>
                            <!-- Header Logo End -->

                        </div>

                        <div class="col-lg-8 col-md-7 d-none d-md-block">

                            <!-- Main Menu Language Wrapper Start -->
                            <div class="main-menu-language-wrapper">

                                <!-- Main Menu Start -->
                                <nav class="main-menu main-menu-white">
                                    <ul>
                                        @include('particles.header-menu')
                                    </ul>
                                </nav>
                                <!-- Main Menu End -->

                                <!-- Language Start -->
                                <div class="language language-white d-md-none d-lg-flex">
                                    <a href="#">Eng</a>
                                    <a href="#"> <span>Fra</span></a>
                                </div>
                                <!-- Language End -->

                            </div>
                            <!-- Main Menu Language Wrapper End -->

                        </div>

                        <div class="col-lg-2 col-md-2 col-6">

                            <!-- Mobile Menu Hamburger Start -->
                            <div class="mobile-menu-hamburger mobile-menu-hamburger-white">
                                <a href="javascript:void(0)">
                                    <span>Menu</span>
                                    <i class="icon ion-android-menu"></i>
                                </a>
                            </div>
                            <!-- Mobile Menu Hamburger End -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">
                <!-- Mobile Menu Inner Top Start -->
                <div class="mobile-menu-inner-top">

                    <!-- Mobile Menu Logo Start  -->
                    <div class="logo-mobile">
                        <img src="assets/images/logo/logo-black.png" alt="Logo">
                    </div>
                    <!-- Mobile Menu Logo End -->

                    <!-- Button Close Start -->
                    <div class="offcanvas-btn-close">
                        <i class="icofont-close-line"></i>
                    </div>
                    <!-- Button Close End -->

                </div>
                <!-- Mobile Menu Inner Top End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            @include('particles.header-mobile-menu')
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Header Section End -->

