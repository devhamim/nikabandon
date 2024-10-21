<header class="tp-header-height">
    <!-- header-area-start -->
    <div class="header-area-start">
       <!-- header-top-area-start -->
       <div class="tp-header-top-area d-none d-lg-block bg-position " data-background="{{ asset('frontend') }}/img/banner/marr/01.jpg">
          <div class="container-fluid">
             <div class="row">
                <div class="col-lg-12 text-center">
                   <div class="tp-header-top-mrg">
                      <h6 class="tp-header-mrg-title m-0">Welcome to our Nikabandon</h6>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- header-top-area-end -->

       <!-- header-bootom-start -->
       <div class="tp-header-mrg-spacing p-relative tp-white-bg" id="tp-header-sticky">
          <div class="container-fluid">
             <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-2 col-6">
                   <div class="tp-logo">
                      <a href="{{ url('/') }}">
                         <img src="{{ asset('images/logo.png') }}" style="border-radius: 5%; width: 100px;" alt="logo">
                      </a>
                   </div>
                </div>
                <div class="col-xxl-5 col-xl-6 d-none d-xl-block">
                   <div class="tp-main-menu tp-main-menu-mrg">
                      <nav class="tp-main-menu-content">
                         <ul>
                            <li>
                               <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                               <a href="{{ route('abouts') }}">About Us</a>
                            </li>
                            <li>
                               <a href="{{ route('pricings') }}">Pricing</a>
                            </li>
                            <li>
                               <a href="{{ route('our.gallerys') }}">Gallerys</a>
                            </li>
                            <li>
                               <a href="{{ route('our.blogs') }}">Blogs</a>
                            </li>
                            <li>
                               <a href="{{ route('contacts') }}">Contact</a>
                            </li>
                         </ul>
                      </nav>
                   </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-6">
                   <div class="tp-header-right-action tp-header-mrg-right d-none d-xl-block">
                      <ul class="d-flex align-items-center justify-content-end">
                         <li class="d-none d-xxl-block">
                            <div class="tp-header-tel-mrg d-flex align-items-center">
                               <div class="tp-header-mrg-icon">
                                  <span>
                                     <i class="flaticon-telephone"></i>
                                  </span>
                               </div>
                               <div class="tp-header-tel-text tp-header-mrg-text">
                                  <span>Call Us Free</span>
                                  <a href="tel:+8801767506668">+8801767506668</a>
                               </div>
                            </div>
                         </li>
                         {{-- <li>
                            <div class="tp-header-btn">
                               <a class="tp-btn tp-btn-mrg" href="#">Login</a>
                            </div>
                         </li> --}}

                      </ul>
                   </div>
                   <div class="tp-main-menu-bar tp-menu-bar tp-header-hamburger-toogle tp-header-hamburger d-block d-xl-none">
                      <span></span>
                      <span></span>
                      <span></span>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- header-bootom-end -->
    </div>
    <!-- header-area-end -->

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
       <div class="tpoffcanvas">
          <div class="tpoffcanvas__close-btn">
             <button class="close-btn"><i class="fal fa-times"></i></button>
          </div>
          <div class="tpoffcanvas__logo">
             <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
             </a>
          </div>
          <div class="tp-main-menu-mobile d-xl-none"></div>
             <div class="tpoffcanvas-btn-1 mb-50">
                <a class="tpoffcanvas-btn" href="#">Login</a>
             </div>
          <div class="tpoffcanvas__contact-info">
             <div class="tpoffcanvas__contact-title">
                <h5>Contact us</h5>
             </div>
             <ul>
                <li>
                   <i class="fa-light fa-location-dot"></i>
                   <a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z" target="_blank">Manchester 21, Zurich, CH</a>
                </li>
                <li>
                   <i class="fas fa-envelope"></i>
                   <a href="mailto:alizoinfo@gmail.com"><span>insuraiinfo@gmail.com</span></a>
                </li>
                <li>
                   <i class="flaticon-telephone"></i>
                   <a href="tel:+8801767506668">+8801767506668</a>
                </li>
             </ul>
          </div>
          <div class="tpoffcanvas__social">
             <div class="social-icon">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
             </div>
          </div>
       </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <!--search-form-start -->
    <div class="tp-search-body-overlay"></div>
    <div class="tp-search-form-toggle">
       <div class="tp-search-close">
          <i class="fa-solid fa-xmark"></i>
       </div>
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-lg-6">
                <div class="tp-search-form">
                   <form action="#">
                      <input type="text" placeholder="What Are You Looking Foor?" required>
                      <div class="tp-search-form-icon">
                         <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                         </button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- search-form-end -->
 </header>
