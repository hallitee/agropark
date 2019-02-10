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
                        <a class="js-quick-view" href="#" type="button" data-toggle="modal" data-target="#quick-view-product">
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
			@endforeach
  @endforeach			
			</div>
            <div class="row">
			
              <div class="col-md-12 text-right">
			  
                <nav>
                  <ul class="pagination pagination-style-1">
                    <li>
                      <a class="prev page-numbers" href="#">
                        <i class="fa fa-angle-left"></i>
                      </a>
                    </li>
                    <li>
                      <a class="page-numbers" href="#">3</a>
                    </li>
                    <li>
                      <a class="page-numbers" href="#">4</a>
                    </li>
                    <li>
                      <span class="page-numbers current">5</span>
                    </li>
                    <li>
                      <a class="next page-numbers" href="#">
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
				
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
	@endsection