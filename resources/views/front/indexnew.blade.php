@extends('layouts.master')
@section('title', 'Home')
@section('content')
      <div class="banner-slider-2 rev_slider " id="slider-2">
    <ul>
        <li data-transition="fade">
        <img src="images/slider/slider1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
            <div class="h2">Agro-Parks Food &amp; Spices</div>
        </div>
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['20','20','40','40']" data-width="['650','550','480','320']" data-whitespace="normal" data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:80px;opacity:0;s:300;"
            data-start="1400">
            <p>We are not just concerned about people having good food to eat, we are concerned about your health and how affordable this food is to your pockets. About all, we know that healthy eating would ensure a healthier nation.</p>
        </div>
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
            <a class="btn btn-brand pill" href="{{ route('shop')}}">SHOP NOW</a>
        </div>
        </li>
        <li data-transition="fade">
        <img src="images/slider/slider2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
            <div class="h2">Booku Chicken: Best in Town</div>
        </div>
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['20','20','40','40']" data-width="['650','550','480','320']" data-whitespace="normal" data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:80px;opacity:0;s:300;"
            data-start="1400">
            <p>Booku chicken is 100% naturally bred with focus on producing a healthier, tastier and affordable chicken for the nation. </p>
        </div>
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
            <a class="btn btn-brand pill" href="{{ route('shop')}}">SHOP NOW</a>
        </div>
        </li>
        <li data-transition="fade">
        <img src="images/slider/spices.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
          <div class="h2">Banow Spices</div>
        </div>
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['20','20','40','40']" data-width="['650','550','480','320']" data-whitespace="normal" data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:80px;opacity:0;s:300;"
            data-start="1400">
            <p>Banow spice brings the potency of Nigerian herbs and spices which has been underutilized over time, we bring the healthy advantages of using Nigerian herbs and spices as for medicine, cooking, and pleasure. </p>
        </div>
        <div class="tp-caption" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
            <a class="btn btn-brand pill" href="{{ route('shop')}}">SHOP NOW</a>
        </div>
        </li>
    </ul>
    
	 </div>
   
    <section class="boxed-sm">
    <div class="container">
        <div class="heading-wrapper text-center">
            <h3 class="heading-style-2">Welcome to Agro-Parks Foods &amp; Spices</h3>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center about">
                    We are all about good food and healthy living. Agro-Park Foods and Spices is not just concerned about people having good food to eat, we are concerned about your health and how affordable this food is to your pockets. About all, we know that healthy eating would ensure a healthier nation.
                </p>
            </div>
        </div>
    </div>
    </section>   
	    <section class="boxed-sm">
        <div class="container">
            <div class="heading-wrapper text-center">
                <h3 class="heading-style-2">Our Products</h3>
            </div>
            <div class="row">
            <div class="row js-product-masonry-layout-1 product-masonry-layout-1">
              <div class="grid-sizer"></div>
              <figure class="item">
                <div class="product product-style-2">
                  <div class="img-wrapper">
                    <a href="{{ route('shop')}}">
                      <img class="img-responsive" src="images/product/fish.jpg" alt="product thumbnail" />
                    </a>
                    <!-- <div class="product-control-wrapper bottom-right">
                      <div class="wrapper-control-item">
                        <a class="js-quick-view" href="#" type="button" data-toggle="modal" data-target="#quick-view-product">
                          <span class="lnr lnr-eye"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-wish-list">
                        <a class="js-wish-list js-notify-add-wish-list" href="#">
                          <span class="lnr lnr-heart"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-add-cart js-action-add-cart">
                        <a class="animate-icon-cart" href="#">
                          <span class="lnr lnr-cart"></span>
                        </a>
                        <svg x="0px" y="0px" width="36px" height="32px" viewbox="0 0 36 32">
                          <path stroke-dasharray="19.79 19.79" fill="none" ,="," stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </div>
                    </div> -->
                    <figcaption class="desc">
                      <h3>
                        <a class="product-name" href="product-detail.html">Booku Fish</a>
                      </h3>
                      <span class="price">From &#x20A6;800</span>
                    </figcaption>
                  </div>
                </div>
              </figure>
              <figure class="item item-size-2">
                <div class="product product-style-2">
                  <div class="img-wrapper">
                    <a href="{{ route('shop')}}">
                      <img class="img-responsive" src="images/product/chicken.jpg" alt="product thumbnail" />
                    </a>
                    <!-- <div class="product-control-wrapper bottom-right">
                      <div class="wrapper-control-item">
                        <a class="js-quick-view" href="#" type="button" data-toggle="modal" data-target="#quick-view-product">
                          <span class="lnr lnr-eye"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-wish-list">
                        <a class="js-wish-list js-notify-add-wish-list" href="#">
                          <span class="lnr lnr-heart"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-add-cart js-action-add-cart">
                        <a class="animate-icon-cart" href="#">
                          <span class="lnr lnr-cart"></span>
                        </a>
                        <svg x="0px" y="0px" width="36px" height="32px" viewbox="0 0 36 32">
                          <path stroke-dasharray="19.79 19.79" fill="none" ,="," stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </div>
                    </div> -->
                    <figcaption class="desc">
                      <h3>
                        <a class="product-name" href="{{ route('shop')}}">Booku Chicken</a>
                      </h3>
                      <span class="price">From &#x20A6;3000</span>
                    </figcaption>
                  </div>
                </div>
              </figure>
              <figure class="item">
                <div class="product product-style-2">
                  <div class="img-wrapper">
                    <a href="{{ route('shop')}}">
                      <img class="img-responsive" src="images/product/chili2.jpg" alt="product thumbnail" />
                    </a>
                    <!-- <div class="product-control-wrapper bottom-right">
                      <div class="wrapper-control-item">
                        <a class="js-quick-view" href="#" type="button" data-toggle="modal" data-target="#quick-view-product">
                          <span class="lnr lnr-eye"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-wish-list">
                        <a class="js-wish-list js-notify-add-wish-list" href="#">
                          <span class="lnr lnr-heart"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-add-cart js-action-add-cart">
                        <a class="animate-icon-cart" href="#">
                          <span class="lnr lnr-cart"></span>
                        </a>
                        <svg x="0px" y="0px" width="36px" height="32px" viewbox="0 0 36 32">
                          <path stroke-dasharray="19.79 19.79" fill="none" ,="," stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </div>
                    </div> -->
                    <figcaption class="desc">
                      <h3>
                        <a class="product-name" href="{{ route('shop')}}">Spices</a>
                      </h3>
                      <span class="price">From &#x20A6;200</span>
                    </figcaption>
                  </div>
                </div>
              </figure>
              <figure class="item">
                <div class="product product-style-2">
                  <div class="img-wrapper">
                    <a href="{{ route('shop')}}">
                      <img class="img-responsive" src="images/product/goat1.jpg" alt="product thumbnail" />
                    </a>
                    <!-- <div class="product-control-wrapper bottom-right">
                      <div class="wrapper-control-item">
                        <a class="js-quick-view" href="#" type="button" data-toggle="modal" data-target="#quick-view-product">
                          <span class="lnr lnr-eye"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-wish-list">
                        <a class="js-wish-list js-notify-add-wish-list" href="#">
                          <span class="lnr lnr-heart"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-add-cart js-action-add-cart">
                        <a class="animate-icon-cart" href="#">
                          <span class="lnr lnr-cart"></span>
                        </a>
                        <svg x="0px" y="0px" width="36px" height="32px" viewbox="0 0 36 32">
                          <path stroke-dasharray="19.79 19.79" fill="none" ,="," stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </div>
                    </div> -->
                    <figcaption class="desc">
                      <h3>
                        <a class="product-name" href="{{ route('shop')}}">Booku Goat</a>
                      </h3>
                      <span class="price">From &#x20A6; 8000</span>
                    </figcaption>
                  </div>
                </div>
              </figure>
              <figure class="item">
                <div class="product product-style-2">
                  <div class="img-wrapper">
                    <a href="{{ route('shop')}}">
                      <img class="img-responsive" src="images/product/onions.jpg" alt="product thumbnail" />
                    </a>
                    <!-- <div class="product-control-wrapper bottom-right">
                      <div class="wrapper-control-item">
                        <a class="js-quick-view" href="#" type="button" data-toggle="modal" data-target="#quick-view-product">
                          <span class="lnr lnr-eye"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-wish-list">
                        <a class="js-wish-list js-notify-add-wish-list" href="#">
                          <span class="lnr lnr-heart"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-add-cart js-action-add-cart">
                        <a class="animate-icon-cart" href="#">
                          <span class="lnr lnr-cart"></span>
                        </a>
                        <svg x="0px" y="0px" width="36px" height="32px" viewbox="0 0 36 32">
                          <path stroke-dasharray="19.79 19.79" fill="none" ,="," stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </div>
                    </div> -->
                    <figcaption class="desc">
                      <h3>
                        <a class="product-name" href="{{ route('shop')}}">Onion</a>
                      </h3>
                      <span class="price">From &#x20A6; 700</span>
                    </figcaption>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>
    </section>
 

      <div class="call-to-action-style-3">
        <img class="rellax bg-overlay" src="images/call-to-action/2.jpg" alt="" />
        <div class="overlay-call-to-action"></div>
        <div class="container">
          <div class="row">
            <p class="h4">SUBCRIBE TO OUR SPECIAL OFFERS</p>
            <p>Sign up today for our newsletter and receive 10% on your first purchase</p>
            <form class="organic-form form-inline btn-add-on">
              <div class="form-group">
                <input class="form-control white pill" type="text" placeholder="Your email address..." />
                <button class="btn btn-brand pill" type="submit">SUBSCRIBE</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    @if(isset($blog))
      <section class="boxed-sm">
        <div class="container">
          <div class="heading-wrapper text-center">
            <h3 class="heading-style-2">Our Blog</h3>
          </div>
          <div class="row">
            <div class="blog-v">
              <div class="post row-reverse">
                <div class="video-wrapper js-set-bg-blog-thumb">
          
                <img src="{{ asset("storage/$blog->cover") }}" alt="Image" />

                </div>
                <div class="desc">
                  <h3>{{ $blog->title }}</h3>
                  <p class="meta">
                    <span class="time">{{ date('Y-m-d')}}</span>
                  </p>
                  <p class="sapo">
                    <Lorem>{{ $blog->description }}
                    </Lorem>
                  </p>
                  <a class="read-more" href="#">READ MORE
                    <i class="fa fa-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif   

 <div class="container">
  <div class="row">
          <div class="heading-wrapper text-center">
            <h3 class="heading-style-2">Testimonials</h3>
          </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="{{ asset('storage/public/1.jpg')}}" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p>Your organic chicken is really nutricious and healthy for me and my family!</p>
                  <small>Yetunde, Ikotun</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="{{ asset('storage/public/3.jpg')}}" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>For my health I had to switch my tastebud to your organic products and it has been really good.</p>
                  <small>Femi, Maryland</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="{{ asset('storage/public/2.jpg')}}" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>The spices I really love, never thought anything could replace regular seasonings but every meal with your spices have been tasty, filled with lovely aroma.</p>
                  <small>Precious, Lagos</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>  
@endsection