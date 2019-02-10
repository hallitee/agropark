@extends('layouts.master')
@section('title', 'Checkout')
@section('content')
     <div class="shop-cart" id="page">
      <section class="sub-header shop-detail-1">
        <img class="rellax bg-overlay" src="images/sub-header/banner.jpg" alt="">
     
        <h3 class="heading-style-3">Checkout</h3>
      </section>
            <section class="boxed-sm">
        <div class="breadcrumb-wrapper">
          <div class="container">
            <div class="row">
              <ol class="breadcrumb">
                <li>
                  <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="active">Checkout</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
	  <br>
	  <br>
      <section class="boxed-sm">
     <div class="container product-in-cart-list">
        @if(!$products->isEmpty())
            <div class="row">
      
                <div class="col-md-12 content">
                    <div class="box-body">
                        @include('layouts.errors-and-messages')
                    </div>
                    @if(count($addresses) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                @include('front.products.product-list-table', compact('products'))
                            </div>
                        </div>
                        @if(isset($addresses))
                            <div class="row">
                                <div class="col-md-12">
                                    <legend><i class="fa fa-home"></i> Addresses</legend>
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Alias</th>
                                            <th>Address</th>
                                            <th>Billing Address</th>
                                            <th>Delivery Address</th>
                                        </thead>
                                        <tbody>
                                            @foreach($addresses as $key => $address)
                                                <tr>
                                                    <td>{{ $address->alias }}</td>
                                                    <td>
                                                        {{ $address->address_1 }} {{ $address->address_2 }} <br />
                                                        @if(!is_null($address->province))
                                                            {{ $address->city }} {{ $address->province->name }} <br />
                                                        @endif
                                                        {{ $address->city }} {{ $address->state}} <br>
                                                        {{ $address->country->name }} {{ $address->zip }}
                                                    </td>
                                                    <td>
                                                        <label class="col-md-6 col-md-offset-3">
                                                        <input
                                                                    type="radio"
                                                                    value="{{ $address->id }}"
                                                                    name="billing_address"
                                                                    @if($billingAddress->id == $address->id) checked="checked"  @endif>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        @if($billingAddress->id == $address->id)
                                                            <label for="sameDeliveryAddress">
                                                                <input type="checkbox" id="sameDeliveryAddress" checked="checked"> Same as billing
                                                            </label>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tbody style="display: none" id="sameDeliveryAddressRow">
                                            @foreach($addresses as $key => $address)
                                                <tr>
                                                    <td>{{ $address->alias }}</td>
                                                    <td>
                                                        {{ $address->address_1 }} {{ $address->address_2 }} <br />
                                                        @if(!is_null($address->province))
                                                            {{ $address->city }} {{ $address->province->name }} <br />
                                                        @endif
                                                        {{ $address->city }} {{ $address->state_code }} <br>
                                                        {{ $address->country->name }} {{ $address->zip }}
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <label class="col-md-6 col-md-offset-3">
                                                            <input
                                                                    type="radio"
                                                                    value="{{ $address->id }}"
                                                                    name="delivery_address"
                                                                    @if(old('') == $address->id) checked="checked"  @endif>
                                                        </label>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                        @if(!is_null($rates))
                            <div class="row">
                                <div class="col-md-12">
                                    <legend><i class="fa fa-truck"></i> Courier</legend>
                                    <ul class="list-unstyled">
                                        
                                            <li class="col-md-4">
                                                <label class="radio">
                                                    <input type="radio" name="rate" data-fee="{{ $rates['data']['delivery_fee'] }}" value="{{ $rates['data']['delivery_fee']}}">
                                                </label>
                                                <img src="{{ asset('images/maxng.png') }}" style="height:50px;width:120px" alt="courier" class="img-thumbnail" /> <br />
                                                <p><strong>MaxNG </strong>- <span> &#8358;{{ $rates['data']['delivery_fee'] }}</span></p>
                                            </li>
				 <li class="col-md-4">
				 
				 </li>
               <li class="col-md-4">
                                                <label class="radio">
                                                    <input type="radio" name="rate" data-fee="0" value="0">
                                                </label>
                                                <img src="{{ asset('images/pickup.png') }}" style="height:50px;width:120px" alt="courier" class="img-thumbnail" /> <br />
                                                <p><strong>Self Pickup </strong> -<span> &#8358;0.00</span></p>
                                            </li>											
                                    </ul>
                                </div>
                            </div> <br>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <legend><i class="fa fa-credit-card"></i> Payment</legend>
                                @if(isset($payments) && !empty($payments))
                                    <table class="table table-striped">
                                        <thead>
                                        <th class="col-md-4">Name</th>
                                        <th class="col-md-4">Description</th>
                                        <th class="col-md-4 text-right">Choose payment</th>
                                        </thead>
                                        <tbody>
                                        @foreach($payments as $payment)
                                            @include('layouts.front.payment-options', compact('payment', 'total', 'shipment'))
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="alert alert-danger">No payment method set</p>
                                @endif
                            </div>
                        </div>
                    @else
                        <p class="alert alert-danger"><a href="{{ route('customer.address.create', [$customer->id]) }}">No address found. You need to create an address first here.</a></p>
                    @endif
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-12">
                    <p class="alert alert-warning">No products in cart yet. <a href="{{ route('home') }}">Show now!</a></p>
                </div>
            </div>
        @endif
    </div>

	</section>
       </div>
<br>
<br>
@endsection