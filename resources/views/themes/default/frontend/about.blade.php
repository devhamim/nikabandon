@extends('master.master')
@section('content')
<main>
<!-- breadcam-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="tp-breadcrumb-content">
                <h2 class="tp-breadcrumb-title mb-15  wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">About Us</h2>
                <div class="tp-breadcrumb-list  wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                    <span><a href="{{ url('/') }}">Home</a></span>
                    <span class="tp-breadcrumb-dvdr">-</span>
                    <span class="tp-breadcrumb-title-pre">About Us</span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcam-area-end -->

<!-- tp-about-area-start -->
<div class="tp-about-area fix pb-60 pt-135">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5 mb-70 wow fadeInLeft"  data-wow-duration=".9s" data-wow-delay=".3s">
            <div class="tp-about-wrapper">
                <div class="tp-about-shape-2 tptranslateX2">
                    <img src="{{ asset('frontend') }}/img/about/main/shape-1.png" alt="shape">
                    <span>Helth Insurance</span>
                </div>
                <img  class="tp-about-shape-4 d-none d-xl-block p-absolute" src="{{ asset('frontend') }}/img/about/main/shape-2.png" alt="shape">
                <div class="tp-about-shape-9 d-none d-xl-block p-absolute"></div>
                <div class="tp-about-shape p-relative">
                    <img class="tp-about-shape-10" src="{{ asset('frontend') }}/img/about/main/man.jpg" alt="man">
                    <img class="tp-about-shape-3 upslide d-none d-xl-block p-absolute" src="{{ asset('frontend') }}/img/about/main/shape-7.png" alt="shape">
                    <img class="tp-about-shape-5 d-none d-xl-block upslide p-absolute" src="{{ asset('frontend') }}/img/about/main/man-round.png" alt="round">
                </div>
                <img class="tp-about-shape-6 d-none d-xl-block" src="{{ asset('frontend') }}/img/about/main/shape-3.png" alt="shape">
                <div class="tp-about-shape-7 tptranslateX2 d-none d-sm-block p-absolute">
                    <img src="{{ asset('frontend') }}/img/about/main/shape-5.png" alt="shape">
                    <span>Pure Life <br> Insurance</span>
                </div>
                <img class="tp-about-shape-8 d-none d-xl-block p-absolute" src="{{ asset('frontend') }}/img/about/main/shape-6.png" alt="shape">
            </div>
            </div>
            <div class="col-xl-6 col-lg-7 mb-70 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">
            <div class="tp-about-content-wrapper">
                <div class="tp-about-section-title-wrapper mb-40">
                    <span class="tp-section-title-pre-about section-title tp-split-in-right mb-15">Know About Insurai</span>
                    <h2 class="tp-section-title mb-25 tp-split-in-left">We Provide the Best Insurance Policy</h2>
                    <p class="tp-section-title-para">Our insurance platform is protected with the latest encrypt technolog and multi-factor authentication giving</p>
                </div>
                <div class="tp-about-info mb-55">
                    <div class="tp-about-info-item d-flex mb-20">
                        <div class="tp-about-info-icon">
                        <span><i class="flaticon-refund"></i></span>
                        </div>
                        <div class="tp-about-info-content">
                        <h4 class="tp-about-info-title">Moneyback Gurantee</h4>
                        <p class="tp-about-info-para">Duis aute irue dolor in reprehenderit<br> esse cillum dolore er nulla</p>
                        </div>
                    </div>
                    <div class="tp-about-info-item d-flex">
                        <div class="tp-about-info-icon">
                        <span><i class="flaticon-customer-care"></i></span>
                        </div>
                        <div class="tp-about-info-content">
                        <h4 class="tp-about-info-title">Technical Support</h4>
                        <p class="tp-about-info-para">Duis aute irue dolor in reprehenderit<br> esse cillum dolore er nulla</p>
                        </div>
                    </div>
                </div>
                <div class="tp-about-details d-flex">
                    <div class="tp-about-btn mr-30 lineheight-1">
                        <a class="tp-btn tp-btn-green" href="contact.html">Let’s Get Started</a>
                    </div>
                    <div class="tp-about-avatar d-flex align-items-center">
                        <div class="tp-about-avatar-thumb">
                        <img src="{{ asset('frontend') }}/img/about/main/dymond.png" alt="dymond">
                        </div>
                        <div class="tp-about-avatar-content">
                        <h5>1.80m</h5>
                        <p>Total Active User</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-about-area-end -->

<!-- brands-area-start -->
<div class="tp-brand-area">
    <div class="container">
        <div class="row tp-brand-about-border pb-100">
            <div class="col-lg-12 mb-35">
            <div class="tp-brand-about-title-wrapper text-center">
                <h2 class="tp-brand-about-title mb-15 section-title tp-split-in-left">Trusted by Worlwide Business</h2>
                <p class="tp-brand-about-para">More than 90,000+ teams are using Alizo</p>
            </div>
            </div>
            <div class="col-lg-12">
            <div class="tp-brand-about-inner">
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about2.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about3.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about4.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about5.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about6.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about7.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about8.png" alt="brands">
                </a>
                <a class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s" href="#">
                    <img src="{{ asset('frontend') }}/img/brand/about/about9.png" alt="brands">
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- brands-area-end -->

<!-- about-author-area-start -->
<div class="tp-author p-overflow pt-100 pb-70 fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-50 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
            <div class="tp-author-img">
                <img class="w-100" src="{{ asset('frontend') }}/img/author/01.jpg" alt="author">
            </div>
            </div>
            <div class="col-lg-7 mb-50 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">
            <div class="tp-author-content">
                <div class="tp-author-para mb-30">
                    <p>A Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie placerat nulla eu imperdiet. Nulla et tellus orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas. Nullam id odio commodo, rutrum felis id, porttitor mauris
                        Suspendisse a metus fringilla, porta erat sit amet, vulputate leo</p>
                </div>
                <p class="tp-author-para-2 pb-65">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                <div class="tp-author-signature">
                    <img src="{{ asset('frontend') }}/img/author/02.png" alt="signature">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- about-author-area-end -->

<!-- value-ara-start -->
<div class="tp-value-area bg-position-default pt-130 pb-110" data-background="{{ asset('frontend') }}/img/value/about-valu.jpg">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="tp-about-section-title-wrapper text-center mb-60">
            <span class="tp-section-title-pre-about section-title tp-split-in-right mb-20">Our Insurai Values</span>
            <h2 class="tp-section-title tp-split-in-left mb-25">They Values that<br> Drive Everything We Do</h2>
            </div>
        </div>
        <div class="col-lg-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
            <div class="tp-value-wrapper tp-feature-anim">
            <div class="tp-value-icon tp-feature-anim-icon">
                <i class="flaticon-support"></i>
            </div>
            <div class="tp-value-content">
                <h3 class="tp-value-title">Trust & Security</h3>
                <p class="tp-value-para">Lorem ipsum dolor sit amet,  adipiscing eli sed do eiusmod temp incididunt ut labor dolore magna aliqua. Ut enim ad</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
            <div class="tp-value-wrapper tp-feature-anim">
            <div class="tp-value-icon tp-feature-anim-icon">
                <i class="flaticon-customer-service"></i>
            </div>
            <div class="tp-value-content">
                <h3 class="tp-value-title">Commitment</h3>
                <p class="tp-value-para">Lorem ipsum dolor sit amet,  adipiscing eli sed do eiusmod temp incididunt ut labor dolore magna aliqua. Ut enim ad</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
            <div class="tp-value-wrapper tp-feature-anim">
            <div class="tp-value-icon tp-feature-anim-icon">
                <i class="flaticon-management"></i>
            </div>
            <div class="tp-value-content">
                <h3 class="tp-value-title">Accesibility</h3>
                <p class="tp-value-para">Lorem ipsum dolor sit amet,  adipiscing eli sed do eiusmod temp incididunt ut labor dolore magna aliqua. Ut enim ad</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
            <div class="tp-value-wrapper tp-feature-anim">
            <div class="tp-value-icon tp-feature-anim-icon">
                <i class="flaticon-money-withdrawal"></i>
            </div>
            <div class="tp-value-content">
                <h3 class="tp-value-title">Customer First</h3>
                <p class="tp-value-para">Lorem ipsum dolor sit amet,  adipiscing eli sed do eiusmod temp incididunt ut labor dolore magna aliqua. Ut enim ad</p>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- value-ara-end -->

<!-- team-area-start -->
<div class="tp-team-area pt-130 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="tp-about-section-title-wrapper text-center mb-50">
                <span class="tp-section-title-pre-about section-title mb-15 tp-split-in-right">Meet With Our Speacilist</span>
                <h2 class="tp-section-title mb-25 tp-split-in-left">Qualified Team Members</h2>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
            <div class="tp-team-agen-wrapper p-relative">
                <div class="tp-thumb fix mb-15">
                    <img class="tp-team-agen-img w-100" src="{{ asset('frontend') }}/img/team/about/01.jpg" alt="agen">
                </div>
                <div class="tp-team-agen-social p-absolute">
                    <a href="#"><i class="flaticon-facebook-circular-logo"></i></a>
                </div>
                <div class="tp-team-agen-content text-center">
                    <h3 class="tp-team-agen-name mb-0"><a href="team-details.html">James C. Lehmann</a></h3>
                    <span class="tp-team-agen-position">Insurance Manager</span>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
            <div class="tp-team-agen-wrapper p-relative">
                <div class="tp-thumb fix mb-15">
                    <img class="tp-team-agen-img w-100" src="{{ asset('frontend') }}/img/team/about/02.jpg" alt="agen">
                </div>
                <div class="tp-team-agen-social p-absolute">
                    <a href="#"><i class="flaticon-facebook-circular-logo"></i></a>
                </div>
                <div class="tp-team-agen-content text-center">
                    <h3 class="tp-team-agen-name mb-0"><a href="team-details.html">Dr Melissa Dosch</a></h3>
                    <span class="tp-team-agen-position">Senior Cardilogist</span>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
            <div class="tp-team-agen-wrapper p-relative">
                <div class="tp-thumb fix mb-15">
                    <img class="tp-team-agen-img w-100" src="{{ asset('frontend') }}/img/team/about/03.jpg" alt="agen">
                </div>
                <div class="tp-team-agen-social p-absolute">
                    <a href="#"><i class="flaticon-facebook-circular-logo"></i></a>
                </div>
                <div class="tp-team-agen-content text-center">
                    <h3 class="tp-team-agen-name mb-0"><a href="team-details.html">James C. Lehmann</a></h3>
                    <span class="tp-team-agen-position">Insurance Manager</span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- team-area-end -->

<!-- tp-testimonial-area-start -->
<div class="tp-testimonial-health-wrapper pb-80 fix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
            <div class="tp-testimonial-title-wrapper">
                <span class="tp-section-title-pre-about section-title tp-split-in-right mb-15">Client Feedback</span>
                <h2 class="tp-section-title tp-split-in-left mb-25">What are People Say about Insurai?</h2>
                <h5 class="tp-testimonial-health-review tp-testimonial-about-review mb-40"><span>See our 345 reviews on</span> <i class="fa-solid fa-star"></i> Insurai</h5>
                <div class="tp-testimonial-health-pagenation d-flex align-items-center">
                    <div class="tp-testimonial-health-pagenation-next mr-10"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                    <div class="tp-testimonial-health-pagenation-prev"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                </div>
            </div>
            </div>
            <div class="col-lg-7 mb-60 pt-50 p-relative z-index-1">
            <div class="swiper-container p-relative ml-70 tp-testimonial-health-slide">
                <img  class="tp-testimonial-health-shape p-absolute" src="{{ asset('frontend') }}/img/testimonial/health/02.png" alt="halth">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tp-testimonial-busi tp-testimonial-health p-relative">
                        <p class="tp-testimonial-busi-content mb-25">Our business experts come businesses of all shapes and sizes, but they share one thing in common - an commitment to promoting business and enabling others</p>
                        <div class="tp-testimonial-busi-thumb mb-30 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                    <img class="tp-testimonial-busi-thumb-img mr-20" src="{{ asset('frontend') }}/img/testimonial/health/01.png" alt="testimonial">
                                    <div class="tp-testimonial-busi-info tp-testimonial-health-info">
                                    <h6 class="tp-testimonial-busi-title m-0"> <a href="#">Belal Mahmud</a></h6>
                                    <span class="tp-testimonial-busi-pre">Designer</span>
                                    </div>
                            </div>
                            <span class="tp-testimonial-busi-rating"><i class="fa-sharp fa-solid fa-star"></i>5.0</span>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-testimonial-busi tp-testimonial-health p-relative">
                        <p class="tp-testimonial-busi-content mb-25">Our business experts come businesses of all shapes and sizes, but they share one thing in common - an commitment to promoting business and enabling others</p>
                        <div class="tp-testimonial-busi-thumb mb-30 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                    <img class="tp-testimonial-busi-thumb-img mr-20" src="{{ asset('frontend') }}/img/testimonial/health/03.png" alt="testimonial">
                                    <div class="tp-testimonial-busi-info tp-testimonial-health-info">
                                    <h6 class="tp-testimonial-busi-title m-0"> <a href="#">Md Harun</a></h6>
                                    <span class="tp-testimonial-busi-pre">Designer</span>
                                    </div>
                            </div>
                            <span class="tp-testimonial-busi-rating"><i class="fa-sharp fa-solid fa-star"></i>5.0</span>
                        </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-testimonial-busi tp-testimonial-health p-relative">
                        <p class="tp-testimonial-busi-content mb-25">Our business experts come businesses of all shapes and sizes, but they share one thing in common - an commitment to promoting business and enabling others</p>
                        <div class="tp-testimonial-busi-thumb mb-30 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                    <img class="tp-testimonial-busi-thumb-img mr-20" src="{{ asset('frontend') }}/img/testimonial/health/04.png" alt="testimonial">
                                    <div class="tp-testimonial-busi-info tp-testimonial-health-info">
                                    <h6 class="tp-testimonial-busi-title m-0"> <a href="#">Md Farhan</a></h6>
                                    <span class="tp-testimonial-busi-pre">Designer</span>
                                    </div>
                            </div>
                            <span class="tp-testimonial-busi-rating"><i class="fa-sharp fa-solid fa-star"></i>5.0</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-testimonial-area-end -->
</main>
@endsection
