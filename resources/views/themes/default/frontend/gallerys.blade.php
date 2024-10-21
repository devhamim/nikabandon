@extends('master.master')
@section('content')
<main>
    <!-- breadcam-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-content">
                <h2 class="tp-breadcrumb-title mb-15 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">Our Portfolio</h2>
                <div class="tp-breadcrumb-list wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".4s">
                    <span><a href="index.html">Home</a></span>
                    <span class="tp-breadcrumb-dvdr">-</span>
                    <span class="tp-breadcrumb-title-pre">Our Portfolio</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- breadcam-area-end -->

    <!-- tp-portfolio-area-start -->
    <div class="tp-portfolio-wrapper pt-140 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-portfolio-item tp-portfolio-item-hover p-relative fix">
                <div class="tp-portfolio-thumb">
                    <div class="tp-portfolio-image-hover">
                        <div class="tp-portfolio-image-hover-2"></div>
                    </div>
                    <a href="portfolio-details.html"><img class="w-100" src="{{ asset('frontend') }}/img/portfolio/portfolio-2.jpg" alt="portfolio"></a>
                </div>
                <div class="tp-portfolio-position">
                    <div class="tp-portfolio-content p-relative">
                        <img class="tp-portfolio-shape p-absolute" src="{{ asset('frontend') }}/img/portfolio/shape.png" alt="shape">
                        <span class="tp-portfolio-pre">Strategy</span>
                        <h3 class="tp-portfolio-title"><a href="portfolio-details.html">Protector Insurance</a></h3>
                        <a class="tp-portfolio-icon" href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="tp-portfolio-item tp-portfolio-item-hover p-relative fix">
                <div class="tp-portfolio-thumb">
                    <div class="tp-portfolio-image-hover">
                        <div class="tp-portfolio-image-hover-2"></div>
                    </div>
                    <a href="portfolio-details.html"><img class="w-100" src="{{ asset('frontend') }}/img/portfolio/portfolio-3.jpg" alt="portfolio"></a>
                </div>
                <div class="tp-portfolio-position">
                    <div class="tp-portfolio-content p-relative">
                        <img class="tp-portfolio-shape p-absolute" src="{{ asset('frontend') }}/img/portfolio/shape.png" alt="shape">
                        <span class="tp-portfolio-pre">Strategy</span>
                        <h3 class="tp-portfolio-title"><a href="portfolio-details.html">Secure Coverage</a></h3>
                        <a class="tp-portfolio-icon" href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="tp-portfolio-item tp-portfolio-item-hover p-relative fix">
                <div class="tp-portfolio-thumb">
                    <div class="tp-portfolio-image-hover">
                        <div class="tp-portfolio-image-hover-2"></div>
                    </div>
                    <a href="portfolio-details.html"><img class="w-100" src="{{ asset('frontend') }}/img/portfolio/portfolio-4.jpg" alt="portfolio"></a>
                </div>
                <div class="tp-portfolio-position">
                    <div class="tp-portfolio-content p-relative">
                        <img class="tp-portfolio-shape p-absolute" src="{{ asset('frontend') }}/img/portfolio/shape.png" alt="shape">
                        <span class="tp-portfolio-pre">Strategy</span>
                        <h3 class="tp-portfolio-title"><a href="portfolio-details.html">Health Protection</a></h3>
                        <a class="tp-portfolio-icon" href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-portfolio-item tp-portfolio-item-hover p-relative fix">
                <div class="tp-portfolio-thumb">
                    <div class="tp-portfolio-image-hover">
                        <div class="tp-portfolio-image-hover-2"></div>
                    </div>
                    <a href="portfolio-details.html"><img class="w-100" src="{{ asset('frontend') }}/img/portfolio/portfolio-1.jpg" alt="portfolio"></a>
                </div>
                <div class="tp-portfolio-position">
                    <div class="tp-portfolio-content p-relative">
                        <img class="tp-portfolio-shape p-absolute" src="{{ asset('frontend') }}/img/portfolio/shape.png" alt="shape">
                        <span class="tp-portfolio-pre">Strategy</span>
                        <h3 class="tp-portfolio-title"><a href="portfolio-details.html">Pet Insurance</a></h3>
                        <a class="tp-portfolio-icon" href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="tp-portfolio-item tp-portfolio-item-hover p-relative fix">
                <div class="tp-portfolio-thumb">
                    <div class="tp-portfolio-image-hover">
                        <div class="tp-portfolio-image-hover-2"></div>
                    </div>
                    <a href="portfolio-details.html"><img class="w-100" src="{{ asset('frontend') }}/img/portfolio/home/01.jpg" alt="portfolio"></a>
                </div>
                <div class="tp-portfolio-position">
                    <div class="tp-portfolio-content p-relative">
                        <img class="tp-portfolio-shape p-absolute" src="{{ asset('frontend') }}/img/portfolio/shape.png" alt="shape">
                        <span class="tp-portfolio-pre">Strategy</span>
                        <h3 class="tp-portfolio-title"><a href="portfolio-details.html">Marrige Insurance</a></h3>
                        <a class="tp-portfolio-icon" href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="tp-portfolio-item tp-portfolio-item-hover p-relative fix">
                <div class="tp-portfolio-thumb">
                    <div class="tp-portfolio-image-hover">
                        <div class="tp-portfolio-image-hover-2"></div>
                    </div>
                    <a href="portfolio-details.html"><img class="w-100" src="{{ asset('frontend') }}/img/portfolio/home/02.jpg" alt="portfolio"></a>
                </div>
                <div class="tp-portfolio-position">
                    <div class="tp-portfolio-content p-relative">
                        <img class="tp-portfolio-shape p-absolute" src="{{ asset('frontend') }}/img/portfolio/shape.png" alt="shape">
                        <span class="tp-portfolio-pre">Strategy</span>
                        <h3 class="tp-portfolio-title"><a href="portfolio-details.html">Planning & Analisis Insurance</a></h3>
                        <a class="tp-portfolio-icon" href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-portfolio-area-end -->

</main>

@endsection
