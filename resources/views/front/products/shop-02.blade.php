@extends('layouts.master')
@section('title', 'Shop')
@section('content')

    <div class="shop-layout-1" id="page">

      <section class="sub-header shop-layout-1">
        <img class="rellax bg-overlay" src="images/sub-header/banner.jpg" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">Shop</h3>
      </section>
      <div class="woocommerce-top-control wrapper">
        <section class="boxed-sm">
          <div class="container">
            <div class="row">
              <div class="woocommerce-top-control">
                <p class="woocommerce-result-count">Showing 1 - 12 of 30 results</p>
                <form class="woocommerce-ordering select-custom-wrapper" method="get">
                  <select class="orderby select-custom-wrapper" name="orderby">
                    <option value="menu_order" selected="selected">Default sorting</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date">Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                  </select>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
      <section class="box-sm">
        <div class="container">
          <div class="row main">
            <div class="row product-grid-equal-height-wrapper product-equal-height-4-columns flex multi-row">
@foreach($cat as $c)			
       @foreach($c->products as $p)
			  <figure class="item">
                <div class="product product-style-1">
                  <div class="img-wrapper">
                    <a href="product-detail.html">
                      <img class="img-responsive" style="width:482px;height:250px" src="{{asset("storage/$p->cover")}}" alt="product thumbnail" />
                    </a>
                    <div class="product-control-wrapper bottom-right">
                      <div class="wrapper-control-item">
                        <a class="js-quick-view"  href="#" type="button" value="{{$p->slug}}" data-toggle="modal" data-target="#{{$p->slug}}">
                          <span class="lnr lnr-eye"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-wish-list">
                        <a class="js-wish-list js-notify-add-wish-list" href="#" data-toggle="tooltip" data-placement="top" title="add to wish list">
                          <span class="lnr lnr-heart"></span>
                        </a>
                      </div>
                      <div class="wrapper-control-item item-add-cart js-action-add-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                        <a class="animate-icon-cart" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">
                          <span class="lnr lnr-cart"></span>
						   {{ csrf_field() }}
                           <input type="hidden" name="quantity" value="1" />
                           <input type="hidden" name="product" value="{{ $p->id }}">
                        </a>
                        <svg x="0px" y="0px" width="36px" height="32px" viewbox="0 0 36 32">
                          <path stroke-dasharray="19.79 19.79" fill="none" ,="," stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <figcaption class="desc text-center">
                    <h3>
                      <a class="product-name" href="product-detail.html" style="color:black">{{ $p->name }}</a>
                    </h3>
                    <span class="price" style="color:black">&#8358;{{$p->price}}</span>
                  </figcaption>
                </div>
              </figure>
	<div class="modal fade" id="{{$p->slug}}" tabindex="-1" role="dialog">
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
					@foreach($p->images as $m)
                      <div class="item">
                        <img class="img-responsive" src="@if(!$m->src){{asset('storage/'.$p->cover)}} @else {{asset('storage/'.$m->src)}} @endif" alt="product thumbnail" />
                      </div>
					@endforeach

                    </div>
                    <div class="thumbnail-carousel-product-quickview">
					@foreach($p->images as $m)
                      <div class="item">
                        <img class="img-responsive" src="@if(!$m->src){{asset('storage/'.$p->cover)}} @else {{asset('storage/'.$m->src)}} @endif" alt="product thumbnail" />
                      </div>
					@endforeach
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="summary">
                    <div class="desc">
                      <div class="header-desc">
                        <h2 class="product-title">{{$p->name}}</h2>
                        <p class="price">&#8358;{{$p->price}}</p>
                      </div>
                      <div class="body-desc">
                        <div class="woocommerce-product-details-short-description">
                          <p>{{$p->description}} </p>
                        </div>
                      </div>
                      <div class="footer-desc">
                        <form class="cart" action="cart" method="POST">
						 {{ csrf_field() }}
                          <div class="quantity buttons-added">
                            <input class="minus" value="-" type="button"/>
                            <input class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" type="number" />
                            <input class="plus" value="+" type="button" />
                          </div>
                          <div class="group-btn-control-wrapper">
						 
                           <input type="hidden"  name="product" value="{{ $p->id }}">
                            <button  type="submit" class="btn btn-brand addCart">ADD TO CART</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="product-meta">
                      <p class="posted-in">Category:
                        <a href="#" rel="tag">{{$c->name }}</a>
                      </p>
                    </div>
                    <div class="widget-social align-left">
                      <ul>
                        <li>
                          <a class="facebook" data-toggle="tooltip" title="Facebook" href="http://www.facebook.com/agropark">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li>
                          <a class="pinterest" data-toggle="tooltip" title="Pinterest" href="http://www.pinterest.com/agropak">
                            <i class="fa fa-pinterest"></i>
                          </a>
                        </li>
                        <li>
                          <a class="twitter" data-toggle="tooltip" title="Twitter" href="http://www.twitter.com/agropark">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a class="google-plus" data-toggle="tooltip" title="Google Plus" href="https://plus.google.com/agropark">
                            <i class="fa fa-google-plus"></i>
                          </a>
                        </li>
                        <li>
                          <a class="instagram" data-toggle="tooltip" title="Instagram" href="https://instagram.com/agropark">
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
			@endforeach
  @endforeach			
			</div>

          </div>
        </div>
      </section>
    </div>
	@endsection