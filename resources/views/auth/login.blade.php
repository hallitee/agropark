@extends('layouts.master')
@section('title', 'Login')
@section('content')
    <div class="login" id="page">
      <section class="sub-header shop-layout-1">
		<img class="rellax bg-overlay" src="images/sub-header/banner.jpg" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">My Account</h3>
      </section>
      <section class="boxed-sm">
        <div class="container">
          <div class="login-wrapper">
            <div class="row">
              <h3>Log In</h3>
                <div class="col-md-12">@include('layouts.errors-and-messages')</div>
                <form action="{{ route('login') }}" method="post">
                     {{ csrf_field() }}
                <div class="form-group organic-form-2">
                  <label>Your Email *</label>
                  <input class="form-control" type="Email" name="email" value="{{ old('email') }}" placeholder="Email">
                </div>
                <div class="form-group organic-form-2">
                  <label>Password *</label>
                  <input class="form-control" type="Password" name="password" placeholder="xxxxx"  value="" >
                </div>
                <div class="form-group remember-me">
                  <div class="checkbox pull-left">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                  <a class="pull-right" href="{{route('password.request')}}">Lost your password?</a>
                </div>
                <a href="{{route('register')}}" class="pull-right">No account? Register here.</a>
               
                <div class="form-group footer-form">
                  <button class="btn btn-brand pill" type="submit">SUBMIT</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection