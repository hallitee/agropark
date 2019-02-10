@extends('layouts.master')
@section('title', 'Register')
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
              <h3>Register</h3>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                <div class="form-group organic-form-2 {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Your Name *</label>
                  <input class="form-control" type="text" name="name" value="{{ old('name') }}" autofocus>

                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group organic-form-2 {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>Your Email *</label>
                  <input class="form-control" type="Email"  name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                  
                </div>
                <div class="form-group organic-form-2 {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Password *</label>
                  <input class="form-control" type="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                  
                </div>
                <div class="form-group organic-form-2">
                  <label>Repeat Password *</label>
                  <input class="form-control" type="Password" name="password_confirmation">
                </div>
                <div class="form-group remember-me">
                  <div class="checkbox pull-left">
                    <label>
                      <input type="checkbox"> Privacy Policy Agreement?
                    </label>
                  </div>
                </div>
                <div class="form-group footer-form">
                  <button class="btn btn-brand pill" type="submit">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection