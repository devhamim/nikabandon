@extends('master.master')
@section('content')

<main>
    <!-- breadcam-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-content">
                <h2 class="tp-breadcrumb-title mb-15 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">Our Blog</h2>
                <div class="tp-breadcrumb-list wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".4s">
                    <span><a href="{{ url('/') }}">Home</a></span>
                    <span class="tp-breadcrumb-dvdr">-</span>
                    <span class="tp-breadcrumb-title-pre">Our Blog</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- breadcam-area-end -->

    <!-- tp-blog-area-start -->
    <div class="tp-blog-area pt-140 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-blog-wrapper">
                <div class="tp-blog-thumb">
                    <a class="tp-blog-thumb-img" href="blog-details.html">
                        <img src="{{ asset('frontend') }}/img/blog/01.jpg" alt="blog">
                    </a>
                </div>
                <div class="tp-blog-content">
                    <div class="tp-blog-info">
                        <span class="tp-blog-info-left"><a href="#">health</a></span>
                        <span class="tp-blog-info-right">23 June, 2024</span>
                    </div>
                    <h3 class="tp-blog-title mb-35"><a href="blog-details.html">Wise Spending Habits, 13 Tips for Maximizing Your Money</a></h3>
                    <div class="tp-blog-btn">
                        <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="tp-blog-wrapper">
                <div class="tp-blog-thumb">
                    <a class="tp-blog-thumb-img" href="blog-details.html">
                        <img src="{{ asset('frontend') }}/img/blog/02.jpg" alt="blog">
                    </a>
                </div>
                <div class="tp-blog-content">
                    <div class="tp-blog-info">
                        <span class="tp-blog-info-left"><a href="#">insurance</a></span>
                        <span class="tp-blog-info-right">23 June, 2024</span>
                    </div>
                    <h3 class="tp-blog-title mb-35"><a href="blog-details.html">Everyday Accounts to Keep Track of Your Finances</a></h3>
                    <div class="tp-blog-btn">
                        <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="tp-blog-wrapper">
                <div class="tp-blog-thumb">
                    <a class="tp-blog-thumb-img" href="blog-details.html">
                        <img src="{{ asset('frontend') }}/img/blog/03.jpg" alt="blog">
                    </a>
                </div>
                <div class="tp-blog-content">
                    <div class="tp-blog-info">
                        <span class="tp-blog-info-left"><a href="#">Home</a></span>
                        <span class="tp-blog-info-right">23 June, 2024</span>
                    </div>
                    <h3 class="tp-blog-title mb-35"><a href="blog-details.html">Save With Our Lowest Ever Four Fixed Rate Home Loan</a></h3>
                    <div class="tp-blog-btn">
                        <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-blog-wrapper">
                <div class="tp-blog-thumb">
                    <a class="tp-blog-thumb-img" href="blog-details.html">
                        <img src="{{ asset('frontend') }}/img/blog/04.jpg" alt="blog">
                    </a>
                </div>
                <div class="tp-blog-content">
                    <div class="tp-blog-info">
                        <span class="tp-blog-info-left"><a href="#">health</a></span>
                        <span class="tp-blog-info-right">23 June, 2024</span>
                    </div>
                    <h3 class="tp-blog-title mb-35"><a href="blog-details.html">13 Strategies for Maximizing Your Finances</a></h3>
                    <div class="tp-blog-btn">
                        <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="tp-blog-wrapper">
                <div class="tp-blog-thumb">
                    <a class="tp-blog-thumb-img" href="blog-details.html">
                        <img src="{{ asset('frontend') }}/img/blog/05.jpg" alt="blog">
                    </a>
                </div>
                <div class="tp-blog-content">
                    <div class="tp-blog-info">
                        <span class="tp-blog-info-left"><a href="#">insurance</a></span>
                        <span class="tp-blog-info-right">23 June, 2024</span>
                    </div>
                    <h3 class="tp-blog-title mb-35"><a href="blog-details.html">Managing Your Everyday Accounts Your Finances</a></h3>
                    <div class="tp-blog-btn">
                        <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="tp-blog-wrapper">
                <div class="tp-blog-thumb">
                    <a class="tp-blog-thumb-img" href="blog-details.html">
                        <img src="{{ asset('frontend') }}/img/blog/06.jpg" alt="blog">
                    </a>
                </div>
                <div class="tp-blog-content">
                    <div class="tp-blog-info">
                        <span class="tp-blog-info-left"><a href="#">Home</a></span>
                        <span class="tp-blog-info-right">23 June, 2024</span>
                    </div>
                    <h3 class="tp-blog-title mb-35"><a href="blog-details.html">Our Lowest-Ever Four Fixed Rate Home Loan Offer</a></h3>
                    <div class="tp-blog-btn">
                        <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-blog-area-end -->

    <!-- tp-cta-area-start -->
    <div class="tp-cta-area bg-position p-relative" data-background="{{ asset('frontend') }}/img/cta/home/03.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-cta-wrapper-2">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-20">
                        <div class="tp-cta-content-wrapper d-flex">
                            <span class="tp-cta-content-icon"><i class="flaticon-alert"></i></span>
                            <div class="tp-cta-content">
                            <h6 class="tp-cta-sub-title-white mb-15">It’s Time to Claim Now</h6>
                            <h2 class="tp-cta-title">Start Tracking Your Claims</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-20">
                        <div class="tp-cta-btn f-right">
                            <a class="tp-btn" href="contact.html">Track Your Claim</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-cta-area-start -->
</main>

@endsection
