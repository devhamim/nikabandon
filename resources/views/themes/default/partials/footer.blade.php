<footer class="tp-mrg-bg-5 ">
    <div class="tp-footer-area pt-145 pb-80 p-relative z-index-1">
       <div class="container">
          <div class="row">
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50">
                <div class="tp-footer-widget">
                   <div class="tp-footer-logo mb-40">
                      <a href="index.html"><img src="{{ asset('images/logo.png') }}" style="border-radius: 5%; width: 100px;" alt="logo"></a>
                   </div>
                   <div class="tp-footer-widget-family">
                      <p class="tp-footer-mrg-para mb-30">There are many variations of passages of Lorem
                         Ipsum available, but the majority have suffered
                         alteration in some.</p>
                         {{-- @if(!Auth::check())
                              <a href="{{ url('/register') }}" class="tp-btn tp-btn-mrg-2">Registration</a>
                        @endif --}}
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50">
                <div class="tp-footer-widget-family tp-footer-mrg-col-2">
                   <h4 class="tp-footer-widget-title-family mb-35">Information</h4>
                   <div class="tp-footer-widget-link-family tp-footer-mrg-widget-link">
                      <ul>
                        {{-- @foreach($menupages as $page)
                            <li><a class="m-2 text-color-light" href="{{ route('page',$page->route_name) }}"> {{$page->page_title}}</a></li>
                        @endforeach --}}
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
                   </div>
                </div>
             </div>
             <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 mb-50">
                <div class="tp-footer-widget-family">
                   <h4 class="tp-footer-widget-title-family mb-35">Follow Us</h4>
                   <div class="tp-footer-mrg-social-link">
                      <ul>
                         <li>
                            <a href="{{$websiteParameter->fb_page_link}}">
                               <i class="flaticon-facebook-circular-logo"></i>
                               <span>Facebook</span>
                            </a>
                         </li>
                         <li>
                            <a href="{{$websiteParameter->instagram_url}}">
                               <i class="flaticon-instagram"></i>
                               <span>Instagram</span>
                            </a>
                         </li>
                         <li>
                            <a href="{{$websiteParameter->twitter_url}}">
                               <i class="flaticon-twitter"></i>
                               <span>Twitter</span>
                            </a>
                         </li>
                         <li>
                            <a href="{{$websiteParameter->pinterest_url}}">
                               <i class="flaticon-social"></i>
                               <span>Linkedin</span>
                            </a>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50">
                <div class="tp-footer-widget">
                   <h4 class="tp-footer-widget-title-family mb-35">Get in Touch</h4>
                   <span class="tp-footer-mrg-subtitle">Address</span>
                   <p class="tp-footer-mrg-para tp-footer-mrg-para-2">Nikunja 2 # Road 20,Plot 14,Dhaka-1229 Bangladesh</p>
                   <a class="tp-footer-mrg-phone" href="tel:+8801767-506668">+8801767-506668</a>
                   <a class="tp-footer-mrg-mail" href="mailto:vipmarriage.ceo@gmail.com">vipmarriage.ceo@gmail.com</a>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="tp-footer-mrg-copyright">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tp-footer-copyright-text tp-footer-mrg-copyright-text text-center">
                   <p>© Copyright {{ date('Y') }}. All Rights Reserved.</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
