@extends('master.master')
@section('content')

<main>
    <!-- breadcam-area-start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-content">
                <h2 class="tp-breadcrumb-title mb-15 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">Blog Details</h2>
                <div class="tp-breadcrumb-list wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".4s">
                    <span><a href="index.html">Home</a></span>
                    <span class="tp-breadcrumb-dvdr">-</span>
                    <span class="tp-breadcrumb-title-pre">Blog Details</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- breadcam-area-end -->

<!-- tp-postbox-area-start -->
    <div class="tp-postbox-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 mb-50">
                <div class="tp-postbox-wrapper">
                <article class="tp-postbox-item ">
                    <div class="tp-postbox-thumb mb-20">
                        <img class="w-100" src="{{ asset('frontend') }}/img/blog/sidebar/07.jpg" alt="thumb">
                    </div>
                    <div class="tp-postbox-meta mb-15">
                        <span><a href="#"><i class="fa-regular fa-user"></i> Md Harun</a></span>
                        <span><i class="fa-regular fa-comment"></i>02 Comments</span>
                    </div>
                    <div class="tp-postbox-content-2 mb-50">
                        <h2 class="tp-postbox-title mb-20">Insurance Transforming Challenges Into</h2>
                        <p class="mb-30 tp-postbox-para">Curabitur luctus euismod metus, eu pellentesque mauris tempus sit amet. Proin ante odio, posuere id lacus auctor, elementum tempor tellus. Integer mattis justo eu enim tempus lacinia. Fusce vitae enim diam. Ut commodo viverra magna non egestas. Integer sodales massa at odio tristique volutpat. Proin posuere odio maximus, eleifend felis sed, ultrices turpis. Proin ultricies sodales nisl vel euismod. Praesent vestibulum sem lorem, eget fermentum justo iaculis et</p>
                        <p class="tp-postbox-para">vitae lobortis eros purus non augue. Nullam molestie augue diam, scelerisque porta dolor mollis a. Cras condimentum elementum eros at finibus. pharetra condimentum sagittis. Donec consequat velit et nisi scelerisque, quis iaculis felis tincidunt. In faucibus sapien ut elit hendrerit, et tristique mauris lacinia. Phasellus tincidunt scelerisque lectus sed scelerisque. Donec at enim facilisis, tempus nisi quis, pharetra enim</p>
                    </div>
                    <div class="tp-postbox-details-qoute mb-55">
                        <blockquote class="tp-postbox-blockquote d-flex">
                            <div class="tp-postbox-details-qoute-icon">
                            <span><i class="flaticon-right"></i></span>
                            </div>
                            <div class="tp-postbox-details-qoute-text">
                            <p>The new common language will be more simple than the existing European languages. It will be as </p>
                            <a  class="tp-postbox-details-qoute-link" href="#">Nelson Adam</a>
                            </div>
                        </blockquote>
                    </div>
                    <div class="tp-postbox-list">
                        <h3 class="tp-postbox-list-title">The Desire to Make a Difference</h3>
                        <div class="row">
                            <div class="col-xl-5 mb-35">
                            <div class="tp-postbox-list-img">
                                <img class="w-100" src="{{ asset('frontend') }}/img/blog/sidebar/08.jpg" alt="blog">
                            </div>
                            </div>
                            <div class="col-xl-7 mb-35">
                            <div class="tp-postbox-list-inner">
                                <span><i class="fa-solid fa-check"> </i>Sed ut perspiciatis unde iste natus</span>
                                <span><i class="fa-solid fa-check"> </i>Maecenas tempor velit sit amet euismod</span>
                                <span><i class="fa-solid fa-check"> </i>Nulla egestas iaculis metus, id tempor massa</span>
                                <span><i class="fa-solid fa-check"> </i>Sed ut perspiciatis unde iste natus</span>
                                <span><i class="fa-solid fa-check"> </i>Maecenas tempor velit sit amet euismod</span>
                            </div>
                            </div>
                        </div>
                        <p class="mb-50 tp-postbox-para">vitae lobortis eros purus non augue. Nullam molestie augue diam, scelerisque porta dolor mollis a. Cras condimentum elementum eros at finibus. pharetra condimentum sagittis. Donec</p>
                    </div>
                    <div class="tp-postbox-social-wrapper">
                        <div class="row">
                            <div class="col-xl-6">
                            <div class="tp-postbox-social-inner">
                                <h4 class="tp-postbox-social-title">Tag:</h4>
                                <span class="tp-postbox-tag"><a href="#">Insurance</a></span>
                                <span class="tp-postbox-tag"><a href="#">Idea</a></span>
                            </div>
                            </div>
                            <div class="col-xl-6">
                            <div class="tp-postbox-social-inner text-right">
                                <div class="tp-postbox-social-icon">
                                    <h4  class="tp-postbox-social-title">Share:</h4>
                                    <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
                                    <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                                    <span><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></span>
                                    <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-postbox-comment">
                        <h3 class="tp-postbox-title mb-55">03 Comments</h3>
                        <ul>
                            <li>
                            <div class="tp-postbox-comment-box tp-postbox-border pb-45 mb-30">
                                <div class="tp-postbox-comment-avater">
                                    <img src="{{ asset('frontend') }}/img/blog/sidebar/01.png" alt="user">
                                </div>
                                <div class="tp-postbox-text">
                                    <h5 class="tp-postbox-comment-name">Mithcel Adnan</h5>
                                    <p class="tp-postbox-para">Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae congue consectetur. Aliquam et quam non metus </p>
                                    <div class="tp-postbox-comment-reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li class="children">
                            <div class="tp-postbox-comment-box tp-postbox-border pb-45 mb-30">
                                <div class="tp-postbox-comment-avater">
                                    <img src="{{ asset('frontend') }}/img/blog/sidebar/02.png" alt="user">
                                </div>
                                <div class="tp-postbox-text">
                                    <h5 class="tp-postbox-comment-name">Mithcel Adnan</h5>
                                    <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae congue consectetur. Aliquam et quam non metus </p>
                                    <div class="tp-postbox-comment-reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tp-postbox-comment-box tp-postbox-border pb-45 mb-55">
                                <div class="tp-postbox-comment-avater">
                                    <img src="{{ asset('frontend') }}/img/blog/sidebar/03.png" alt="user">
                                </div>
                                <div class="tp-postbox-text">
                                    <h5 class="tp-postbox-comment-name">Mithcel Adnan</h5>
                                    <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae congue consectetur. Aliquam et quam non metus </p>
                                    <div class="tp-postbox-comment-reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tp-postbox-comment-form">
                        <h3 class="tp-postbox-comment-input-title">Leave Your Comment</h3>
                        <p class="mb-35">Your email address will not be published. Required fields are marked *</p>
                        <form action="#">
                            <div class="row">
                            <div class="col-lg-6 mb-30">
                                <div class="tp-postbox-comment-input">
                                    <input type="text" placeholder="Your Name*">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="tp-postbox-comment-input">
                                    <input type="text" placeholder="Email Address*">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-20">
                                <div class="tp-postbox-comment-textarea">
                                    <textarea placeholder="Write Your Comment*"></textarea>
                                </div>
                            </div>
                            <div class="tp-postbox-comment-btn">
                                <button class="tp-btn tp-btn-green" type="submit">Post Comment</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </article>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-postbox-area-end -->


</main>

@endsection
