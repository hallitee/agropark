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
      <div class="modal fade" id="quick-view-product" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-quickview woocommerce" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="woocommerce-product-gallery">
                    <div class="main-carousel-product-quick-view">
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/01.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/02.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/03.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/04.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/05.jpg')}}" alt="product thumbnail" />
                      </div>
                    </div>
                    <div class="thumbnail-carousel-product-quickview">
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/01.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/02.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/03.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/04.jpg')}}" alt="product thumbnail" />
                      </div>
                      <div class="item">
                        <img class="img-responsive" src="{{ asset('images/product/05.jpg')}}" alt="product thumbnail" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="summary">
                    <div class="desc">
                      <div class="header-desc">
                        <h2 class="product-title">Sald</h2>
                        <p class="price">$2.00</p>
                      </div>
                      <div class="body-desc">
                        <div class="woocommerce-product-details-short-description">
                          <p>Duis vestibulum ante velit. Pellentesque orci felis, pharetra ut pharetra ut, interdum at mauris. Aenean efficitur aliquet libero sit amet scelerisque. Suspendisse efficitur mollis eleifend. Aliquam tortor nibh, venenatis quis
                            sem dapibus, varius egestas lorem a sollicitudin. </p>
                        </div>
                      </div>
                      <div class="footer-desc">
                        <form class="cart">
                          <div class="quantity buttons-added">
                            <input class="minus" value="-" type="button" />
                            <input class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" type="number" />
                            <input class="plus" value="+" type="button" />
                          </div>
                          <div class="group-btn-control-wrapper">
                            <button class="btn btn-brand no-radius">ADD TO CART</button>
                            <button class="btn btn-wishlist btn-brand-ghost no-radius">
                              <i class="fa fa-heart"></i>
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="product-meta">
                      <p class="posted-in">Categories:
                        <a href="#" rel="tag">Food</a>
                      </p>
                      <p class="tagged-as">Tags:
                        <a href="#" rel="tag">Natural</a>,
                        <a href="#" rel="tag">Organic</a>,
                        <a href="#" rel="tag">Health</a>,
                        <a href="#" rel="tag">Green</a>,
                        <a href="#" rel="tag">Vegetable</a>
                      </p>
                      <p class="id">ID:
                        <a href="#">A203</a>
                      </p>
                    </div>
                    <div class="widget-social align-left">
                      <ul>
                        <li>
                          <a class="facebook" data-toggle="tooltip" title="Facebook" href="http://www.facebook.com/authemes">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li>
                          <a class="pinterest" data-toggle="tooltip" title="Pinterest" href="http://www.pinterest.com/authemes">
                            <i class="fa fa-pinterest"></i>
                          </a>
                        </li>
                        <li>
                          <a class="twitter" data-toggle="tooltip" title="Twitter" href="http://www.twitter.com/authemes">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a class="google-plus" data-toggle="tooltip" title="Google Plus" href="https://plus.google.com/authemes">
                            <i class="fa fa-google-plus"></i>
                          </a>
                        </li>
                        <li>
                          <a class="instagram" data-toggle="tooltip" title="Instagram" href="https://instagram.com/authemes">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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
