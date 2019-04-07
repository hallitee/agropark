      <footer class="footer-style-2">
        <div class="footer-style-2-inner">
          <div class="container">
            <div class="row">
              <div class="widget-footer widget-text col-first col-small">
                <a href="{{route('home') }}">
                  <img class="logo-footer" src="{{ asset('images/logo.png')}}" alt="Agro-Park" />
                </a>
                <p>Mission: To be a dynamic and responsive organization providing healthier meals for people.</p>
				<p>Core values: Dependability Integrity Reliability Excellence Creativity Tenacity </p>
              </div>
              <div class="widget-footer widget-link col-second col-small">
                <div class="list-link">
                  <h4 class="h4 heading">Useful Links</h4>
                  <ul>
                    <li>
                      <a href="{{ route('about')}}">About Us</a>
                    </li>
                    <li>
                      <a href="{{ route('shop')}}">Shop</a>
                    </li>
						 @if(auth()->check())
                    <li>
                      <a href="{{ route('accounts', ['tab' => 'profile']) }}">My Account</a>
                    </li>
                    <li>
                      <a href="{{ route('logout') }}">Logout</a>
                    </li>							 
						 @else
                    <li>
                      <a href="{{route('register')}}">Register</a>
                    </li>
                    <li>
                      <a href="{{route('login')}}">Login</a>
                    </li>
					@endif
                  </ul>
                </div>
                <div class="list-link">
                  <h4 class="h4 heading">SUPPORT</h4>
                  <ul>
                    <li>
                      <a href="{{ route('contact')}}">Contact Us</a>
                    </li>
                    <li>
                      <a href="#">Blog</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget-footer widget-newsletter-footer col-last col-medium">
                <h4 class="h4 heading">NEWSLETTER</h4>
                <p>Subscribe now to get daily updates</p>
                <form class="organic-form form-inline btn-add-on circle border">
                  <div class="form-group">
                    <input class="form-control pill transparent" placeholder="Your Email..." type="email" />
                    <button class="btn btn-brand circle" type="submit">
                      <i class="fa fa-envelope-o"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="copy-right style-2">
          <div class="container">
            <div class="row">
              <div class="copy-right-inner">
                <p>Copyright © 2018</p>
                <div class="widget widget-footer widget-footer-link-inline">
                  <ul class="list-unstyle">
                    <li>
                      <a href="#">Term of Uses</a>
                    </li>
                    <li>
                      <a href="#">Privacy</a>
                    </li>
                    <li>
                      <a href="#">Shipping</a>
                    </li>
                    <li>
                      <a href="#">Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
@yield('js')
  <!--    <script src="{{ asset('js/library/bootstrap.min.js')}} "></script> -->
      <script src="{{ asset('js/function-check-viewport.js')}}"></script>
      <script src="{{ asset('js/library/slick.min.js')}}"></script>
      <script src="{{ asset('js/library/select2.full.min.js')}}"></script>
      <script src="{{ asset('js/library/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{ asset('js/library/jquery.mmenu.all.min.js')}}"></script>
      <script src="{{ asset('js/library/rellax.min.js')}}"></script>
      <script src="{{ asset('js/library/isotope.pkgd.min.js')}}"></script>
      <script src="{{ asset('js/library/bootstrap-notify.min.js')}}"></script>
      <script src="{{ asset('js/library/bootstrap-slider.js')}}"></script>
      <script src="{{ asset('js/library/in-view.min.js')}}"></script>
      <script src="{{ asset('js/library/countUp.js')}}"></script>
      <script src="{{ asset('js/library/animsition.min.js')}}"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css')}}" />
      <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
      <script src="{{ asset('js/global.js')}}"></script>
	   <script src="{{ asset('js/front.min.js')}}"></script>

	    <script src="{{ asset('js/custom.js')}}"></script>

      <script src="{{ asset('js/config-banner-slider-2.js')}}"></script>
      <script src="{{ asset('js/config-mm-menu.js')}}"></script>
      <script src="{{ asset('js/config-set-bg-blog-thumb.js')}}"></script>
      <script src="{{ asset('js/config-isotope-product-home-1.js')}}"></script>
      <script type="text/javascript" src="{{ asset('js/config-youtube-post.js')}}"></script>
      <script src="{{ asset('js/config-isotope-product-home-2.js')}}"></script>
      <script src="{{ asset('js/config-carousel-product-quickview.js')}}"></script>
       <script src="{{ asset('js/config-inview-counter-up.js')}}"></script> 
      <script src="{{ asset('js/config-carousel.js')}}"></script>      
      <script src="{{ asset('js/config-accrodion.js')}}"></script>
      <!-- Demo Only-->
      <script src="{{ asset('js/demo-add-to-cart.js')}}"></script>
