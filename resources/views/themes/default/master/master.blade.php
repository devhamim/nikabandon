

<!doctype html>
<html class="no-js" lang="zxx">
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>
         @if ($websiteParameter->title)
             {!! $websiteParameter->title !!}
         @else
             {{ env('APP_NAME_BIG') }} | Best Marriage Media in Bangladesh
         @endif
     </title>

     <!-- Favicon -->
     @if ($websiteParameter->favicon)
         <link rel="shortcut icon" href="{{ asset('storage/favicon/' . $websiteParameter->favicon) }}" type="image/x-icon">
         <link rel="icon" href="{{ asset('storage/favicon/' . $websiteParameter->favicon) }}" type="image/x-icon">
     @else
         <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
         <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
     @endif
     <meta name="description"
     content="{{ $websiteParameter->meta_description ?:
         'Matrimony Service in Bangladesh
             Marriage Media Service provider in Bangladesh
             Matchmaker Service in Bangladesh Looing for Marriage Media In Bangladesh? Matchinglife is the trustworthy media in Dhaka, Bangladesh. We offer you the best matched life parner according to your profile. Create a free account and search your partner.' }}">

 <meta name="author" content="{{ $websiteParameter->meta_author ?: 'Matchinglife' }}">
 <meta name="keywords"
     content="{{ $websiteParameter->meta_keyword ?:
         'Matrimony Service in Bangladesh
             Marriage Media Service provider in Bangladesh
             Matchmaker Service in Bangladesh' }}">

 @if ($websiteParameter->google_analytics_code)
     {!! $websiteParameter->google_analytics_code !!}
 @endif

 @if ($websiteParameter->facebook_pixel_code)
     {!! $websiteParameter->facebook_pixel_code !!}
 @endif
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome-pro.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/ion.rangeSlider.min.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/flaticon.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/spacing.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
   </head>
   <body>

      <!-- back-to-top -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
      </div>



      @include('partials.header')

      @yield('content')

      <!-- footer-area-start -->
      @include('partials.footer')

      

        {{-- whatapp bar --}}
{{-- <div class="whatapps_btn">
    <a href="https://api.whatsapp.com/send?phone=8801767506668&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20service%20in%20details." target="_blank">
        <p class="my-3">
            <i class="fa-brands fa-whatsapp fa-lg" style="color: #28e925;font-size: 50px;"></i>
        </p>
    </a>
</div> --}}
{{-- whatapp bar --}}
    {{-- side bar --}}
    {{-- @if(!Auth::check())
        <div class="side_button">
            <a class="btn btn-success py-3 px-1 rounded fa-beat" style="background-color: #f05b62; border: none; z-index: 9999" href="{{ url('register') }}">
                <p>
                    <i class="fa-solid fa-user text-white"></i>
                </p> Register</a>
        </div>
    @endif --}}
    {{-- side bar --}}
      <!-- footer-area-end -->
      <!-- JS here -->
      <script src="{{ asset('frontend') }}/js/vendor/jquery.js"></script>
      <script src="{{ asset('frontend') }}/js/vendor/waypoints.js"></script>
      <script src="{{ asset('frontend') }}/js/bootstrap-bundle.js"></script>
      <script src="{{ asset('frontend') }}/js/swiper-bundle.js"></script>
      <script src="{{ asset('frontend') }}/js/ion.rangeSlider.min.js"></script>
      <script src="{{ asset('frontend') }}/js/magnific-popup.js"></script>
      <script src="{{ asset('frontend') }}/js/nice-select.js"></script>
      <script src="{{ asset('frontend') }}/js/jarallax.js"></script>
      <script src="{{ asset('frontend') }}/js/purecounter.js"></script>
      <script src="{{ asset('frontend') }}/js/wow.js"></script>
      <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
      <!-- gsap js -->
      <script src="{{ asset('frontend') }}/js/jsap/gsap.js"></script>
      <script src="{{ asset('frontend') }}/js/jsap/scrolltrigger.min.js"></script>
      <script src="{{ asset('frontend') }}/js/jsap/splittext.min.js"></script>
      <script src="{{ asset('frontend') }}/js/jsap/careox-split.js"></script>
       <!-- template js -->
      <script src="{{ asset('frontend') }}/js/slider-init.js"></script>
      <script src="{{ asset('frontend') }}/js/main.js"></script>
   </body>
</html>

