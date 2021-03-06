<!DOCTYPE html>
<html>
  <head>
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	      <script src="{{ asset('js/library/jquery.min.js') }}"></script>
		  
	  	   <script src="{{ asset('js/jquery.stateLga.js')}}"></script>
	   <script src="{{ asset('js/jquery.ucfirst.js')}}"></script>		  
   <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
	 <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="36x21" href="{{ asset('favicons/favicon2.png')}}">

    <style>
        .brand-logo img {
            width: 200px;
        }

        .banner-slider-2 h2 {
            font-size: 70px;
        }

        .banner-slider-2 .tp-caption p {
            font-size: 20px;
        }

        p.about {
            font-size: 20px;
        }

        .logo-footer {
            width: 250px;
        }

        @media (max-width: 500px){
          .product-filter-home-2-inner .filter-title {
            float: none;
            width: 100%;
          }
        }

        .product-style-2 .desc {
          background: rgba(0, 0, 0, 0.5);
        }

        .product h3 a, .product .price {
         color: #FFF;
        }

    </style>
  </head>
  <body class="animsition">
    <div class="home-2" id="page">
      @include('layouts.navnew')

  @yield('content')

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

 @include('layouts.footer')
    </div>
  </body>
</html>
