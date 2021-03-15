@extends('layouts.index')


@section('content')
    <!-- Project Banner Section Start -->

    <div class="section about-banner-image" style="background-image: url({{ asset($page->pageBlockOne->picture) }});">
        <div class="container">
            <div class="row">
                <div class="content" data-aos="fade-up" data-aos-delay="300">
                    <h1 class="title">{{ $page->pageBlockOne->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Banner Section End -->

    <!-- History Section Start -->
    <div class="section section-padding-top overflow-hidden">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-lg-6 mb-10 col-md-12 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="500">
                    <div class="history-image">
                        <img class="fit-image" src="{{ asset($page->pageBlockTwo->picture) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mb-10 col-md-12 align-self-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="500">
                    <div class="history-wrapper">
                        <h1 class="title">{{ $page->pageBlockTwo->title }}</h1>
                        <div class="history-content">
                            <p>{{ $page->pageBlockTwo->description }} </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Section End -->

    <!-- Services Section Start -->
    <div class="section section-padding-top bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Why Choose Us</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-12">
                    <div class="service-inner-container">

                      @foreach($page->pageBlockThreeCards as $cardItem)
                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="300">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="#">{{ $cardItem->title }}</a>
                                </h5>
                                <p>{{ $cardItem->subtitle }}</p>
                                <div class="icon-link-bottom">
                                    <img height="50px" src="{{ asset($cardItem->picture) }}" alt="">
                                    <a href="#" class="more">more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->
                      @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Funfact Section Start -->
    <div class="section section-padding-bottom bg-light">
        <div class="container">
            <div class="funfact-inner-container">
                <div class="row mb-n8">
                    <div class="col-sm-4 col-6 mb-8">
                        <!-- Single Funfact Start -->
                        <div class="single-funfact" data-aos="fade-up" data-aos-delay="300">
                            <span class="odometer" data-count-to="8000"></span>
                            <h6 class="title">Partner <br> worldwide</h6>
                        </div>
                        <!-- Single Funfact End -->
                    </div>
                    <div class="col-sm-4 col-6 mb-8">
                        <!-- Single Funfact Start -->
                        <div class="single-funfact" data-aos="fade-up" data-aos-delay="400">
                            <span class="odometer" data-count-to="1250"></span>
                            <h4 class="title">employees and <br> staffs</h4>
                        </div>
                        <!-- Single Funfact End -->
                    </div>
                    <div class="col-sm-4 col-6 mb-8">
                        <!-- Single Funfact Start -->
                        <div class="single-funfact" data-aos="fade-up" data-aos-delay="500">
                            <span class="odometer" data-count-to="904"></span>
                            <h5 class="title">project completed <br> on 60 countries</h5>
                        </div>
                        <!-- Single Funfact End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Funfact Section End -->

    <!-- Work Section Start -->
    <div class="section work-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h4 class="subtitle" data-aos="fade-up" data-aos-delay="300">how we work</h4>
                        <h2 class="title" data-aos="fade-up" data-aos-delay="300">Easy &amp; Trusted <br> Progress</h2>
                        <p data-aos="fade-up" data-aos-delay="300">We understand that you’re hiring us to actually listen, and more <br> importantly, understand your vision, so that your home reflects your spirit and <br> personality, not ours. Above all else, when the project is finished, <br> we want you to  LOVE WHERE YOU LIVE</p>
                        <a href="#" class="pdf-file" data-aos="fade-up" data-aos-delay="300"><span class="icon icofont-file-pdf"></span>Download Offer [.PDF]</a>
                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box clearfix" data-aos="fade-up" data-aos-delay="300">See How we work<br><span class="fa-play ion ion-ios-play"><i class="ripple "></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Section End -->

    <!-- Team Section Start -->
    <div class="section section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Section Title Start -->
                    <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Our Team</h2>
                    </div>
                    <!-- Section Title End -->

                </div>
            </div>
            <div class="row mb-n6">
                <div class="col-lg-4 col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-delay="300">
                    <!-- Team Block Start -->
                    <div class="team-block">
                        <div class="inner-box">

                            <!-- Team Image Start  -->
                            <div class="image">
                                <a href="#"><img src="assets/images/team/team-1.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#" class="icofont-twitter"></a></li>
                                    <li><a href="#" class="icofont-facebook"></a></li>
                                    <li><a href="#" class="icofont-instagram"></a></li>
                                    <li><a href="#" class="icofont-linkedin"></a></li>
                                </ul>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Content Start  -->
                            <div class="team-content">
                                <h4 class="title"><a href="#">Edward Eric Jr</a></h4>
                                <h5 class="subtitle">CEO Founder</h5>
                            </div>
                            <!-- Team Content End -->

                        </div>
                    </div>
                    <!-- Team Block End -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-delay="400">

                    <!-- Team Block Start  -->
                    <div class="team-block">
                        <div class="inner-box">

                            <!-- Team Image Start  -->
                            <div class="image">
                                <a href="#"><img src="assets/images/team/team-2.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#" class="icofont-twitter"></a></li>
                                    <li><a href="#" class="icofont-facebook"></a></li>
                                    <li><a href="#" class="icofont-instagram"></a></li>
                                    <li><a href="#" class="icofont-linkedin"></a></li>
                                </ul>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Content Start  -->
                            <div class="team-content">
                                <h4 class="title"><a href="#">Tom Holland</a></h4>
                                <h5 class="subtitle">Architect & Project Management</h5>
                            </div>
                            <!-- Team Content End -->

                        </div>
                    </div>
                    <!-- Team Block End -->

                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-delay="500">

                    <!-- Team Block Start  -->
                    <div class="team-block">
                        <div class="inner-box">
                            <!-- Team Image Start -->
                            <div class="image">
                                <a href="#"><img src="assets/images/team/team-3.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#" class="icofont-twitter"></a></li>
                                    <li><a href="#" class="icofont-facebook"></a></li>
                                    <li><a href="#" class="icofont-instagram"></a></li>
                                    <li><a href="#" class="icofont-linkedin"></a></li>
                                </ul>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Content Start  -->
                            <div class="team-content">
                                <h4 class="title"><a href="#">Laura Erakovic</a></h4>
                                <h5 class="subtitle">Executive & Marketing Management</h5>
                            </div>
                            <!-- Team Content End -->

                        </div>
                    </div>
                    <!-- Team Block End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- Client Section Start -->
    <div class="section section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="section-title client-title">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="300">+2,500 clients love us</h2>
                    </div>
                    <div class="client-crousel" data-aos="fade-up" data-aos-delay="400">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Single Client Start -->
                                    <div class="single-client-wrapper">
                                        <!-- Client Thumb Icon Start -->
                                        <div class="client-thumb-icon">
                                            <div class="thumb">
                                                <img src="assets/images/client/1.png" alt="Client Image">
                                            </div>
                                            <div class="icon">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- Client Thumb Icon End -->

                                        <!-- Client Content Start -->
                                        <div class="client-content">
                                            <!-- Name Start -->
                                            <h6 class="name">
                                                <a href="#">Ryan Betthalyn</a> / <span> Director at Chobham Manor</span>
                                            </h6>
                                            <!-- Name End -->
                                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                                        </div>
                                        <!-- Client Content End -->
                                    </div>
                                    <!-- Single Client End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Client Start -->
                                    <div class="single-client-wrapper">
                                        <!-- Client Thumb Icon Start -->
                                        <div class="client-thumb-icon">
                                            <div class="thumb">
                                                <img src="assets/images/client/2.png" alt="Client Image">
                                            </div>
                                            <div class="icon">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- Client Thumb Icon End -->

                                        <!-- Client Content Start -->
                                        <div class="client-content">
                                            <!-- Name Start -->
                                            <h6 class="name">
                                                <a href="#">Bobs Hanely</a> / <span> Director at Spotify</span>
                                            </h6>
                                            <!-- Name End -->
                                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                                        </div>
                                        <!-- Client Content End -->
                                    </div>
                                    <!-- Single Client End -->
                                </div>

                            </div>

                        </div>

                        <!-- Swiper Pagination Start -->
                        <div class="swiper-pagination d-none"></div>
                        <!-- Swiper Pagination End -->

                        <!-- Swiper Navigation Start -->
                        <div class="client-crousel-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                        <div class="client-crousel-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                        <!-- Swiper Navigation End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Section End -->

    <!-- Brand Logo Start -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Brand Logo Wrapper Start -->
                    <div class="brand-logo-carousel" data-aos="fade-up" data-aos-delay="300">
                        <div class="swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="assets/images/brand-logo/1.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="assets/images/brand-logo/2.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href=""><img src="assets/images/brand-logo/3.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="assets/images/brand-logo/4.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="assets/images/brand-logo/5.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                            </div>
                        </div>
                    </div>
                    <!-- Brand Logo Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo End -->
@endsection