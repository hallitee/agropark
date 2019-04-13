@extends('layouts.master')

@section('content')
    <div class="container product-in-cart-list">
	<div class="row">
		<div class="col-md-12">
				<div class="jumbotron">
				  <h1 class="text-success">Payment Successful!</h1>
				  <p class="lead">Your order has been paid for successfully.</p>
				  <hr class="my-4">
				  <p>To verify your order details click below</p>
				  <p class="lead">
					<a class="btn btn-primary btn-lg" href="{{ route("accounts")."?tab=orders"}}" role="button">Order details</a>
				  </p>
				</div>
		</div>
					
	</div>
   <!--  <div class="row">
            <div class="col-md-12">
                <hr>
                <p class="alert alert-success"><strong class="lead">Payment Successful!</strong></p><p class="alert alert-success">Your order is under way! <a href="{{ route('home') }}">Show more!</a></p>
            </div>
        </div>	
		-->
    </div>
@endsection