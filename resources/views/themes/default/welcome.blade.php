@extends('master.master')

@section('content')
    @include('alerts.alerts')

<main>
    <!-- slider-area-start -->
    <div class="tp-slider-mrg-area bg-position" data-background="{{ asset('frontend') }}/img/banner/marr/02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                <div class="tp-slider-mrg-title-wrapper">
                    <h6 class="tp-slider-mrg-title-pre mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">Bangladeshis</h6>
                    <h2 class="tp-slider-mrg-title mb-60 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">No.1 Marriage Media</h2>
                    <a class="tp-btn tp-btn-mrg-2 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s" href="{{ route('abouts') }}">Discover More</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <!-- tp-feature-area-start -->
    <div class="tp-feature-area tp-mrg-bg pt-75 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-feature-mrg tp-feature-anim p-relative d-flex ">
                    <div class="tp-feature-busi-icon tp-feature-mrg-icon mr-20">
                        <span class="tp-feature-anim-icon"><i class="flaticon-easy"></i></span>
                    </div>
                    <div class="tp-feature-busi-content tp-feature-mrg-content">
                        <h4 class="tp-feature-busi-title">100% Verified Profiles</h4>
                        <p>Find your soulmate by profession, community and location preferences.</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="tp-feature-mrg tp-feature-anim p-relative d-flex ">
                    <div class="tp-feature-busi-icon  tp-feature-mrg-icon mr-20">
                        <span class="tp-feature-anim-icon"><i class="flaticon-salary"></i></span>
                    </div>
                    <div class="tp-feature-busi-content tp-feature-mrg-content">
                        <h4 class="tp-feature-busi-title">Privacy Guaranteed</h4>
                        <p>Your privacy is secured with us Privacy Guaranteed.</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="tp-feature-mrg tp-feature-anim p-relative d-flex ">
                    <div class="tp-feature-busi-icon tp-feature-mrg-icon mr-20">
                        <span class="tp-feature-anim-icon"><i class="flaticon-communication"></i></span>
                    </div>
                    <div class="tp-feature-busi-content tp-feature-mrg-content">
                        <h4 class="tp-feature-busi-title">Most Reliable</h4>
                        <p>1000s of ID verified, high-quality Bangladeshi profiles.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-feature-area-end -->

    <!-- tp-about-mrg-area-start -->
    <div class="tp-about-mrg-area tp-mrg-bg p-relative z-index-1 pb-195">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-about-mrg-thumb">
                    <img class="tp-about-mrg-img" src="{{ asset('frontend') }}/img/about/mrg/03.jpg" alt="thumb">
                    <img class="tp-about-mrg-img-2" src="{{ asset('frontend') }}/img/about/mrg/01.jpg" alt="thumb">
                    <img class="tp-about-mrg-img-3" src="{{ asset('frontend') }}/img/about/mrg/02.jpg" alt="thumb">
                </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-20  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-about-content-health">
                    <div class="tp-about-family-title mb-25">
                        <h2 class="tp-section-title tp-section-title-dark-4 tp-split-in-left mb-25">Nikabandon</h2>
                        <p class="tp-section-title-para-mrg mb-35">provides matchmaking services for Bangladeshis, Nikabandon.com helping you find the perfect life partner. Our platform offers a variety of options to suit different communities and preferences. With our Assisted Service, a dedicated Relationship Manager will guide you through the process, identifying and contacting potential matches to make your search easier and more personalized.</p>
                    </div>
                    <div class="tp-about-list-wrapper mb-55">
                        <div class="tp-about-list tp-visitors-list tp-about-mrg">
                            <ul>
                            <li>
                                <span><i class="flaticon-checked-1"></i></span>
                                <span class="tp-about-list-title">Verification</span>
                            </li>
                            <li>
                                <span><i class="flaticon-checked-1"></i></span>
                                <span class="tp-about-list-title">Service Promise</span>
                            </li>
                            <li>
                                <span><i class="flaticon-checked-1"></i></span>
                                <span class="tp-about-list-title">Confidentiality</span>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tp-about-contact-wrapper">
                        <div class="tp-about-contact-btn-family  lineheight-1 d-flex flex-wrap">
                            <a class="tp-btn tp-btn-mrg-2 mb-20 mr-20" href="{{ route('abouts') }}">Discover More</a>
                            <div class="tp-about-tel-mrg mb-20 d-flex align-items-center">
                            <div class="tp-about-mrg-icon">
                                <span>
                                    <i class="flaticon-telephone"></i>
                                </span>
                            </div>
                            <div class="tp-about-mrg-tel-text">
                                <span>Call Us Free</span>
                                <a href="tel:+8801767506668">+8801767506668</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-about-mrg-area- -->

    <!-- tp-service-area-start -->
    <div class="tp-service-area pt-65 tp-mrg-bg-2 pb-135">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-service-section-title-wrapper text-center mb-60">
                <span class="tp-section-title-pre-health section-title tp-section-title-pre-mrg tp-split-in-right mb-15">What We Provide Our Customers</span>
                <h2 class="tp-section-title tp-section-title-dark-4 tp-split-in-left mb-25">Great Experience With Vip Marriage Media</h2>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-30  wow fadeInUp" data-wow-duration=".9s" data-wow-delay="2s">
                <div class="tp-service-mrg-item text-center">
                <div class="tp-service-mrg-icon p-relative mb-20">
                    <span class="p-absolute"><i class="flaticon-money-bag-1"></i></span>
                    <img class="tp-service-mrg-shape" src="{{ asset('frontend') }}/img/service/mrg/01.svg" alt="shape">
                    <img class="tp-service-mrg-shape-2" src="{{ asset('frontend') }}/img/service/mrg/02.svg" alt="shape">
                </div>
                <h5 class="tp-service-mrg-title mb-15"><a>100% Privacy</a></h5>
                <p class="tp-service-mrg-para">Our expert team of wedding<br>  assess your exact need</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-30  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="tp-service-mrg-item text-center">
                <div class="tp-service-mrg-icon p-relative mb-20">
                    <span class="p-absolute"><i class="flaticon-earrings"></i></span>
                    <img class="tp-service-mrg-shape" src="{{ asset('frontend') }}/img/service/mrg/01.svg" alt="shape">
                    <img class="tp-service-mrg-shape-2" src="{{ asset('frontend') }}/img/service/mrg/02.svg" alt="shape">
                </div>
                <h5 class="tp-service-mrg-title mb-15"><a>Verified Profiles</a></h5>
                <p class="tp-service-mrg-para">Our expert team of wedding<br>  assess your exact need</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-30  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="tp-service-mrg-item text-center">
                <div class="tp-service-mrg-icon p-relative mb-20">
                    <span class="p-absolute"><i class="flaticon-gift-box"></i></span>
                    <img class="tp-service-mrg-shape" src="{{ asset('frontend') }}/img/service/mrg/01.svg" alt="shape">
                    <img class="tp-service-mrg-shape-2" src="{{ asset('frontend') }}/img/service/mrg/02.svg" alt="shape">
                </div>
                <h5 class="tp-service-mrg-title mb-15"><a>Best Matches</a></h5>
                <p class="tp-service-mrg-para">Our expert team of wedding<br>  assess your exact need</p>
                </div>
            </div>

            <div class="col-lg-12 mt-30">
                <div class="tp-service-mrg-trust text-center">
                <h5 class="m-0"><span class="mr-10">Trust</span>We're dedicated to empowering men to look and feel fantastic.</h5>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-service-area-start -->

    <!-- tp-faq-area-start -->
    <div class="tp-faq-area p-relative tp-mrg-bg  pt-100 pb-140">
        <img class="tp-faq-mrg-shape  p-absolute" src="{{ asset('frontend') }}/img/body-shape/01.png" alt="shape">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                <div class="tp-faq-wrapper">
                    <div class="tp-faq-title-wrapper tp-faq-mrg-title-wrapper mb-20 d-flex justify-content-between align-items-end">
                        <h2 class="tp-faq-title tp-faq-mrg-title section-title tp-split-in-left mb-20">Have any Question ?</h2>
                        <h6 class="mb-20">👋 Say Hello!</h6>
                    </div>
                    <div class="accordion tp-faq-inner wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s" id="general_faqaccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="order_one">
                            <button class="accordion-button tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_one" aria-expanded="true" aria-controls="order__collapse_one">
                                <b>Am I covered if I serve alcohol at my wedding?</b>
                                <span class="accordion-btn"></span>
                            </button>
                            </h2>
                            <div id="order__collapse_one" class="accordion-collapse collapse show" aria-labelledby="order_one" data-bs-parent="#general_faqaccordion">
                            <div class="accordion-body tp-faq-para">
                                <p>For any inquiries relating to my Retail and Leadership Programs or Coaching and Mentoring services feel free to
                                    speak to me personally by call us during business hours</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="order_two">
                            <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_two" aria-expanded="false" aria-controls="order__collapse_two">
                                <b>Does liablity cover me for property damage?</b>
                                <span class="accordion-btn"></span>
                            </button>
                            </h2>
                            <div id="order__collapse_two" class="accordion-collapse collapse" aria-labelledby="order_two" data-bs-parent="#general_faqaccordion">
                            <div class="accordion-body tp-faq-para">
                                <p>For any inquiries relating to my Retail and Leadership Programs or Coaching and Mentoring services feel free to
                                    speak to me personally by call us during business hours</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="order_three">
                            <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_three" aria-expanded="false" aria-controls="order__collapse_three">
                                <b>Are medical payments included?</b>
                                <span class="accordion-btn"></span>
                            </button>
                            </h2>
                            <div id="order__collapse_three" class="accordion-collapse collapse" aria-labelledby="order_three" data-bs-parent="#general_faqaccordion">
                            <div class="accordion-body tp-faq-para">
                                <p>For any inquiries relating to my Retail and Leadership Programs or Coaching and Mentoring services feel free to
                                    speak to me personally by call us during business hours</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="order_four">
                            <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_four" aria-expanded="false" aria-controls="order__collapse_four">
                                Am I covered in case of bad weather?
                                <span class="accordion-btn"></span>
                            </button>
                            </h2>
                            <div id="order__collapse_four" class="accordion-collapse collapse" aria-labelledby="order_four" data-bs-parent="#general_faqaccordion">
                            <div class="accordion-body tp-faq-para">
                                <p>For any inquiries relating to my Retail and Leadership Programs or Coaching and Mentoring services feel free to
                                    speak to me personally by call us during business hours</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    <!-- tp-faq-area-end -->

    <!-- tp-cta-area-start -->
    <div class="tp-cta-mrg-area tp-mrg-bg">
        <div class="container">
            <div class="row gx-0 align-items-center tp-cta-mrg-bg tp-cta-mrg-spacing">
                <div class="col-lg-5">
                <div class="tp-cta-mrg-thumb p-relative">
                    <img class="w-100" src="{{ asset('frontend') }}/img/cta/mrg/01.jpg" alt="thumb">
                    <img class="tp-cta-mrg-shape p-absolute" src="{{ asset('frontend') }}/img/cta/mrg/01.png" alt="shape">
                    <div class="tp-cta-mrg-video p-absolute">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=go7QYaQR494"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
                </div>
                <div class="col-lg-7 h-100">
                <div class="tp-cta-mrg-content">
                    <h3 class="tp-cta-mrg-title section-title mb-35 tp-split-in-left">Discover Our Capability & Free Consultations</h3>
                    <p class="tp-cta-mrg-para mb-40">VIP Marriage Media is one of the best Bengali Matrimony sites in Bangladesh that assists people looking for the perfect & suitable life partner for their lives.</p>
                    {{-- <a class="tp-btn tp-btn-white" href="{{ url('register') }}">Register</a> --}}
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-cta-area-end -->

    <!-- tp-team-area-srart -->
    <div class="tp-team-area tp-mrg-bg-4 tp-team-mrg-space pt-130 pb-85 p-relative">
        <img class="tp-team-mrg-shape p-absolute" src="{{ asset('frontend') }}/img/about/mrg/06.png" alt="shape">
        <img class="tp-team-mrg-shape-3 p-absolute" src="{{ asset('frontend') }}/img/team/mrg/shape.png" alt="shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="tp-team-section-title-wrapper text-center mb-50">
                    <span class="tp-section-title-pre-health tp-section-title-pre-mrg mb-15 section-title tp-split-in-right">Meet With Our Speacilist</span>
                    <h2 class="tp-section-title tp-section-title-dark-4 tp-split-in-left mb-25">Qualified Team Members</h2>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="swiper-container tp-team-mrg-slider-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tp-team-mrg-content-wrapper mb-150 p-relative text-center">
                            <h4 class="tp-team-mrg-title"><a href="team-details.html">Melissa Dosch</a></h4>
                            <span class="tp-team-mrg-subtitle mb-20">Wed Speacilist</span>
                            <div class="tp-team-mrg-social p-relative mb-40">
                                <p class="tp-team-mrg-para">Our expert team of wedding and the assess your exact need for you</p>
                                <div class="tp-team-mrg-link p-absolute">
                                    <a href="#"><i class="flaticon-facebook-circular-logo"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                    <a href="#"><i class="flaticon-social"></i></a>
                                </div>
                            </div>
                            <div class="tp-team-mrg-thumb">
                                <a href="team-details.html"><img src="{{ asset('frontend') }}/img/team/mrg/01.jpg" alt="shape"></a>
                            </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-team-mrg-content-wrapper mb-150 p-relative text-center">
                            <h4 class="tp-team-mrg-title"><a href="team-details.html">James C. Lehmann</a></h4>
                            <span class="tp-team-mrg-subtitle mb-20">Insurance Manager</span>
                            <div class="tp-team-mrg-social p-relative mb-40">
                                <p class="tp-team-mrg-para">Our expert team of wedding and the assess your exact need for you</p>
                                <div class="tp-team-mrg-link p-absolute">
                                    <a href="#"><i class="flaticon-facebook-circular-logo"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                    <a href="#"><i class="flaticon-social"></i></a>
                                </div>
                            </div>
                            <div class="tp-team-mrg-thumb">
                                <a href="team-details.html"><img src="{{ asset('frontend') }}/img/team/mrg/02.jpg" alt="shape"></a>
                            </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-team-mrg-content-wrapper mb-150 p-relative text-center">
                            <h4 class="tp-team-mrg-title"><a href="team-details.html">Jimakson Havard</a></h4>
                            <span class="tp-team-mrg-subtitle mb-20"> Photographer</span>
                            <div class="tp-team-mrg-social p-relative mb-40">
                                <p class="tp-team-mrg-para">Our expert team of wedding and the assess your exact need for you</p>
                                <div class="tp-team-mrg-link p-absolute">
                                    <a href="#"><i class="flaticon-facebook-circular-logo"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                    <a href="#"><i class="flaticon-social"></i></a>
                                </div>
                            </div>
                            <div class="tp-team-mrg-thumb">
                                <a href="team-details.html"><img src="{{ asset('frontend') }}/img/team/mrg/03.jpg" alt="shape"></a>
                            </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-team-mrg-content-wrapper mb-150 p-relative text-center">
                            <h4 class="tp-team-mrg-title"><a href="team-details.html">Hr Harun</a></h4>
                            <span class="tp-team-mrg-subtitle mb-20">Web Developer</span>
                            <div class="tp-team-mrg-social p-relative mb-40">
                                <p class="tp-team-mrg-para">Our expert team of wedding and the assess your exact need for you</p>
                                <div class="tp-team-mrg-link p-absolute">
                                    <a href="#"><i class="flaticon-facebook-circular-logo"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                    <a href="#"><i class="flaticon-social"></i></a>
                                </div>
                            </div>
                            <div class="tp-team-mrg-thumb">
                                <a href="team-details.html"><img src="{{ asset('frontend') }}/img/team/mrg/02.jpg" alt="shape"></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-team-mrg-pagenation"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- chose-us-area-start -->
    <div class="chose-us-area pt-140 pb-110 tp-mrg-bg-3 p-relative z-index-1">
        <img class="tp-choseus-mrg-shape-2 d-none d-lg-block p-absolute" src="{{ asset('frontend') }}/img/chose/mrg/02.png" alt="shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 p-relative pb-80">
                <div class="tp-choseus-care-thumb h-100">
                    <img class="p-absolute" src="{{ asset('frontend') }}/img/chose/mrg/01.jpg" alt="chose">
                </div>
                <div class="tp-choseus-expreance text-center">
                    <div class="tp-choseus-expreance-wrap tp-choseus-mrg-expreance-wrap p-relative tptranslateY2 ">
                        <h2  class="tp-choseus-expreance-title tp-choseus-mrg-expreance-title">16</h2>
                        <h6 class="tp-choseus-expreance-content">Years of <br> Expereince</h6>
                    </div>
                </div>
                </div>
                <div class="col-lg-7 pb-80">
                <div class="tp-choseus-care-content">
                    <div class="tp-choseus-section-title-wrapper mb-40">
                        <span class="tp-section-title-pre-health tp-section-title-pre-mrg mb-20 section-title tp-split-in-right">Why You Choose</span>
                        <h2 class="tp-section-title tp-section-title-dark-4 tp-split-in-left mb-25">Few Reason for People Choose Insurai</h2>
                        <p class="tp-section-title-para-mrg-2">VIP Marriage Media is one of the best Bangladeshi matrimony sites, proudly serving clients for the past 16+ years. As a premium matchmaking platform we aim to help eligible singles find their Bangladeshi soulmates all across the world. We host a range of verified High-grade VIP profiles of the most eligible, successful, and exclusive Bangladeshi bachelors.</p>
                    </div>
                    <div class="tp-choseus-care-list">
                        <div class="row gx-4 gy-4">
                            <div class="col-lg-6 col-md-6  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                            <div class="tp-choseus-care-list-content tp-choseus-mrg-list-content d-flex align-items-center">
                                <span class="mr-15"><i class="flaticon-checkmark"></i></span>
                                <h6 class="tp-choseus-care-list-title">Instant Online Buying</h6>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-choseus-care-list-content tp-choseus-mrg-list-content d-flex align-items-center">
                                <span class="mr-15"><i class="flaticon-checkmark"></i></span>
                                <h6 class="tp-choseus-care-list-title">Save Time and Money</h6>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                            <div class="tp-choseus-care-list-content tp-choseus-mrg-list-content d-flex align-items-center">
                                <span class="mr-15"><i class="flaticon-checkmark"></i></span>
                                <h6 class="tp-choseus-care-list-title">Own Damage Cover</h6>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tp-choseus-care-list-content tp-choseus-mrg-list-content d-flex align-items-center">
                                <span class="mr-15"><i class="flaticon-checkmark"></i></span>
                                <h6 class="tp-choseus-care-list-title">Claim Ration & Settlement</h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chose-us-area-end -->

    <!-- tp-testimonial-area-start -->
    <div class="tp-testimonial-health-wrapper tp-mrg-bg-5 pt-105 pb-100 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                <div class="tp-testimonial-title-wrapper tp-testimonial-mrg-title-wrapper">
                    <span class="tp-section-title-pre-health mb-15 section-title tp-split-in-right">Client Feedback</span>
                    <h2 class="tp-section-title tp-section-title-health tp-split-in-left mb-25">What are People Say about Insurai?</h2>
                    <h5 class="tp-testimonial-health-review mb-40"><span>See our 345 reviews on</span> <i class="fa-solid fa-star"></i> Insurai</h5>
                    <div class="tp-testimonial-health-pagenation d-flex align-items-center">
                        <div class="tp-testimonial-health-pagenation-next mr-10"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        <div class="tp-testimonial-health-pagenation-prev"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-7 mb-60 pt-50 p-relative z-index-1">
                <div class="swiper-container p-relative ml-70 tp-testimonial-health-slide">
                    <img  class="tp-testimonial-health-shape p-absolute" src="{{ asset('frontend') }}/img/testimonial/health/shape.png" alt="halth">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tp-testimonial-busi tp-testimonial-health p-relative">
                            <p class="tp-testimonial-busi-content mb-25">Our business experts come businesses of all shapes and sizes, but they share one thing in common - an commitment to promoting business and enabling others</p>
                            <div class="tp-testimonial-busi-thumb mb-30 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img class="tp-testimonial-busi-thumb-img mr-20" src="{{ asset('frontend') }}/img/testimonial/health/01.png" alt="testimonial">
                                    <div class="tp-testimonial-busi-info tp-testimonial-health-info">
                                        <h6 class="tp-testimonial-busi-title m-0"> <a href="testimonial.html">Belal Mahmud</a></h6>
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
                                        <h6 class="tp-testimonial-busi-title m-0"> <a href="testimonial.html">Md Harun</a></h6>
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
                                        <h6 class="tp-testimonial-busi-title m-0"> <a href="testimonial.html">Salim Raba</a></h6>
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

    <!-- tp-blog-area-start -->
    <div class="tp-blog-area tp-mrg-bg-5 pt-115 p-relative z-index-1 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="tp-team-section-title-wrapper text-center mb-80">
                    <span class="tp-section-title-pre-health tp-section-title-pre-mrg section-title tp-split-in-right mb-15">Our Blog Post</span>
                    <h2 class="tp-section-title tp-section-title-dark-4 tp-split-in-left mb-25">Read Our Latest Blog</h2>
                </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                <div class="tp-blog-wrapper tp-blog-mrg-wrapper">
                    <div class="tp-blog-thumb">
                        <a class="tp-blog-thumb-img" href="blog-details.html">
                            <img src="{{ asset('frontend') }}/img/blog/mrg/01.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="tp-blog-content tp-blog-mrg-content">
                        <div class="tp-blog-info">
                            <span class="tp-blog-mrg-right"><i class="fa-regular fa-calendar"></i> December 22, 2024</span>
                        </div>
                        <h3 class="tp-blog-title tp-blog-mrg-title mb-15"><a href="blog-details.html">The wedding being postp oned for specific</a></h3>
                        <p class="tp-blog-mrg-para mb-30">Our insurance platform is protecte technolog and multi-factory and  quality insurance policy</p>
                        <div class="tp-blog-btn tp-blog-mrg-btn">
                            <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                <div class="tp-blog-wrapper tp-blog-mrg-wrapper">
                    <div class="tp-blog-thumb">
                        <a class="tp-blog-thumb-img" href="blog-details.html">
                            <img src="{{ asset('frontend') }}/img/blog/mrg/02.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="tp-blog-content tp-blog-mrg-content">
                        <div class="tp-blog-info">
                            <span class="tp-blog-mrg-right"><i class="fa-regular fa-calendar"></i> December 22, 2024</span>
                        </div>
                        <h3 class="tp-blog-title tp-blog-mrg-title mb-15"><a href="blog-details.html">Wise Spending Habits, 13 for Maximizing Your</a></h3>
                        <p class="tp-blog-mrg-para mb-30">Our insurance platform is protecte technolog and multi-factory and  quality insurance policy</p>
                        <div class="tp-blog-btn tp-blog-mrg-btn">
                            <a href="blog-details.html">Read More
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-40  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                <div class="tp-blog-wrapper tp-blog-mrg-wrapper">
                    <div class="tp-blog-thumb">
                        <a class="tp-blog-thumb-img" href="blog-details.html">
                            <img src="{{ asset('frontend') }}/img/blog/mrg/03.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="tp-blog-content tp-blog-mrg-content">
                        <div class="tp-blog-info">
                            <span class="tp-blog-mrg-right"><i class="fa-regular fa-calendar"></i> December 22, 2024</span>
                        </div>
                        <h3 class="tp-blog-title tp-blog-mrg-title mb-15"><a href="blog-details.html">The wedding being postp oned for specific</a></h3>
                        <p class="tp-blog-mrg-para mb-30">Our insurance platform is protecte technolog and multi-factory and  quality insurance policy</p>
                        <div class="tp-blog-btn tp-blog-mrg-btn">
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

    <!-- .tp-cta-area-start -->
    <div class="tp-cta-mrg2-area fix bg-position pb-50 pt-80" data-background="{{ asset('frontend') }}/img/cta/mrg/03.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 pb-30">
                <div class="tp-cta-mrg2-content d-flex align-items-center">
                    <span><i class="flaticon-handshake"></i></span>
                    <h2 class="tp-cta-mrg2-title section-title tp-split-in-left">Get Total Protection for Your Event and Save.</h2>
                </div>
                </div>
                <div class="col-lg-5 pb-30">
                <div class="tp-cta-mrg2-btn text-right">
                    {{-- <a class="tp-btn tp-btn-white" href="{{ url('register') }}">Register</a> --}}
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-cta-area-end -->

    </main>
@endsection
