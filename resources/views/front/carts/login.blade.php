@extends('layouts.master')
@section('title', 'Shop')
@section('content')
      <section class="sub-header shop-layout-1">
        <img class="rellax bg-overlay" src="{{ asset('images/slider/DSC_4742.jpg')}}" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">Shop</h3>
      </section>
      <section class="boxed-sm">
        <div class="breadcrumb-wrapper">
          <div class="container">
            <div class="row">
              <ol class="breadcrumb">
                <li>
                  <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="active">Shop</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
     
      <section class="boxed-sm">
        <div class="container">
          <div class="login-wrapper">
            <div class="row">
              <h3>Log In</h3>
              <form>
                <div class="form-group organic-form-2">
                  <label>Your Email *</label>
                  <input class="form-control" type="Email">
                </div>
                <div class="form-group organic-form-2">
                  <label>Password *</label>
                  <input class="form-control" type="Password">
                </div>
                <div class="form-group remember-me">
                  <div class="checkbox pull-left">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                  <a class="pull-right" href="#">Lost your password?</a>
                </div>
                <div class="form-group footer-form">
                  <button class="btn btn-brand pill" type="submit">SUBMIT</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
@endsection