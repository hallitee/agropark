@extends('layouts.master')
@section('title', 'Cart')
@section('content')
     <div class="shop-cart" id="page">
      <section class="sub-header shop-detail-1">
        <img class="rellax bg-overlay" src="images/sub-header/banner.jpg" alt="">
     
        <h3 class="heading-style-3"><i class="fa fa-cart-plus"></i> Shopping Cart</h3>
      </section>
            <section class="boxed-sm">
        <div class="breadcrumb-wrapper">
          <div class="container">
            <div class="row">
              <ol class="breadcrumb">
                <li>
                  <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="active">Cart</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
	  
      <section class="boxed-sm">
        <div class="container">
		 @if(!$cartItems->isEmpty())
                    <div class="col-md-12 content">
					<br>
					<br>
                        <div class="box-body">
                            @include('layouts.errors-and-messages')
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <th class="col-md-2 col-lg-2">Cover</th>
                                <th class="col-md-2 col-lg-5">Name</th>
                                <th class="col-md-2 col-lg-2">Quantity</th>
                                <th class="col-md-2 col-lg-1"></th>
                                <th class="col-md-2 col-lg-1">Price</th>
								 <th class="col-md-2 col-lg-1">Total</th>
                            </thead>
                            <tfoot>
                            <tr>
                                <td class="bg-warning">Subtotal</td>
                                <td class="bg-warning"></td>
                                <td class="bg-warning"></td>
                                <td class="bg-warning"></td>
								 <td class="bg-warning"></td>
                                <td class="bg-warning">&#8358; {{ number_format($subtotal, 2, '.', ',') }}</td>
                            </tr>
                            @if(isset($shippingFee) && $shippingFee != 0)
                            <tr>
                                <td class="bg-warning">Shipping</td>
                                <td class="bg-warning"></td>
                                <td class="bg-warning"></td>
                                <td class="bg-warning"></td>
								<td class="bg-warning"></td>
                                <td class="bg-warning">&#8358; {{ $shippingFee }}</td>
                            </tr>
                            @endif
                            <tr>
                                <td class="bg-warning">Tax</td>
                                <td class="bg-warning"></td>
                                <td class="bg-warning"></td>
                                <td class="bg-warning"></td>
								<td class="bg-warning"></td>
                                <td class="bg-warning">&#8358; {{ number_format($tax, 2) }}</td>
                            </tr>
                            <tr>
                                <td class="bg-success">Total</td>
                                <td class="bg-success"></td>
                                <td class="bg-success"></td>
                                <td class="bg-success"></td>
								<td class="bg-success"></td>
                                <td class="bg-success">&#8358;{{ number_format($total, 2, '.', ',') }}</td>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($cartItems as $cartItem)
                                <tr>
                                    <td>
                                        <a href="{{ route('front.get.product', [$cartItem->product->slug]) }}" class="hover-border">
                                            @if(isset($cartItem->cover))
                                                <img src="{{$cartItem->cover}}" style="height:120px;width:120px" alt="{{ $cartItem->name }}" class="img-responsive img-thumbnail">
                                            @else
                                                <img src="https://placehold.it/120x120" style="height:120px;width:120px" alt="" class="img-responsive img-thumbnail">
                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        <h3>{{ $cartItem->name }}</h3>
                                        @if($cartItem->options->has('combination'))
                                            @foreach($cartItem->options->combination as $option)
                                                <small class="label label-primary">{{$option['value']}}</small>
                                            @endforeach
                                        @endif
                                        <div class="product-description">
                                            {!! $cartItem->product->description !!}
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.update', $cartItem->rowId) }}" class="form-inline" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="put">
                                            <div class="input-group">
                                                <input type="text" name="quantity" value="{{ $cartItem->qty }}" class="form-control" />
                                                <span class="input-group-btn"><button class="btn-sm btn-brand">Update</button></span>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.destroy', $cartItem->rowId) }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <button onclick="return confirm('Are you sure?')" class="btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                    <td>&#8358;{{ number_format($cartItem->price, 2) }}</td>
									<td>&#8358;{{ number_format(($cartItem->qty*$cartItem->price),2)  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group pull-right">
                                    <a href="{{ route('home') }}" class="btn btn-default">Continue shopping</a>
                                    <a href="{{ route('checkout.index') }}" class="btn btn-primary">Go to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
         @else
                <div class="row">
                    <div class="col-md-12">
					<br>
					<br>
                        <p class="alert alert-warning">No products in cart yet. <a href="{{ route('home') }}">Shop now!</a></p>
					<br>
				  </div>
                </div>			 
		 
		 @endif
        </div>
    
	</section>
       </div>
<br>
<br>
@endsection