@extends('layouts.index')

@section('content')
  
<!-- Breadcrumb Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- breadcrumb Wrapper Start -->
                <div class="breadcrumb-wrapper">
                    <!-- Bread Title Start -->
                    <div class="bread-title">
                        <h1 class="title">Our Blog</h1>
                    </div>
                    <!-- Bread Title End -->

                    <!-- Post Meta Start -->
                    <ul class="post-meta">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                    <!-- Post Meta End -->
                </div>
                <!-- breadcrumb Wrapper End -->

            </div>
        </div>

    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Blog Section Start Here -->
<div class="section blog-tab-section">
    <div class="container">
        <div class="row mt-n2">

            <!-- blog Menu Start -->
            <div class="messonry-button text-center mb-10" data-aos="fade-up" data-aos-delay="100">
                <button data-filter="*" class="is-checked port-filter">All</button>
                <button data-filter=".cat-1" class="port-filter">Residentials</button>
                <button data-filter=".cat-2" class="port-filter">Commercials</button>
                <button data-filter=".cat-3" class="port-filter">Architecture</button>
                <button data-filter=".cat-4" class="port-filter">Interior</button>
            </div>
            <!-- blog Menu End -->

        </div>

        <div class="row row-cols-1 mesonry-list mb-n10">

            <div class="resizer col"></div>

            <!-- Single blog Start -->
            <div class="col cat-3 mb-10">
                <div class="single-blog-wrap">
                    <div class="blog-thumb">
                        <a class="image" href="blog-details.html">
                            <img class="fit-image" src="assets/images/news/blog/1.jpg" alt="blog Image">
                        </a>
                    </div>
                    <div class="inner-content">
                        <ul class="info-list">
                            <li>Dec 23, 2021</li>
                            <li>news</li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">The Way Of Building</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</p>
                        <a href="blog-details.html" class="article">full article <span class="arrow icofont-rounded-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Single blog End -->

            <!-- Single blog Start -->
            <div class="col cat-1 cat-3 cat-4 mb-10">
                <div class="single-blog-wrap">
                    <div class="blog-thumb">
                        <a class="image" href="blog-details.html">
                            <img class="fit-image" src="assets/images/news/blog/2.jpg" alt="blog Image">
                        </a>
                    </div>
                    <div class="inner-content">
                        <ul class="info-list">
                            <li>June 10, 2021</li>
                            <li>Inspiration</li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">The Arch In Modern Architecture, Art and Aesthetic More</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</p>
                        <a href="blog-details.html" class="article">full article <span class="arrow icofont-rounded-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Single blog End -->

            <!-- Single blog Start -->
            <div class="col cat-1 cat-2 cat-3 cat-4 mb-10">
                <div class="single-blog-wrap">
                    <div class="blog-thumb">
                        <a class="image" href="blog-details.html">
                            <img class="fit-image" src="assets/images/news/blog/3.jpg" alt="blog Image">
                        </a>
                    </div>
                    <div class="inner-content">
                        <ul class="info-list">
                            <li>Aug 22, 2021</li>
                            <li>Top & Tricks</li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">Spiral Stair, New Interior Design Trends 2021</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</p>
                        <a href="blog-details.html" class="article">full article <span class="arrow icofont-rounded-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Single blog End -->

            <!-- Single blog Start -->
            <div class="col cat-1 cat-2 cat-3 cat-4 mb-10">
                <div class="single-blog-wrap">
                    <div class="blog-thumb">
                        <a class="image" href="blog-details.html">
                            <img class="fit-image" src="assets/images/news/blog/4.jpg" alt="blog Image">
                        </a>
                    </div>
                    <div class="inner-content">
                        <ul class="info-list">
                            <li>Sep 12, 2021</li>
                            <li>news</li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">Nordic Interior Style</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</p>
                        <a href="blog-details.html" class="article">full article <span class="arrow icofont-rounded-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Single blog End -->

        </div>

        <div class="row section-padding">
            <div class="col-12">

                <!-- Load More Start -->
                <div class="load-more text-center" data-aos="fade-up" data-aos-delay="300">
                    <a href="#">...Load more...</a>
                </div>
                <!-- Load More End -->

            </div>
        </div>

    </div>
</div>
<!-- Blog Section End Here -->

@endsection