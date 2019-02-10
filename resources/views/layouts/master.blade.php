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


 @include('layouts.footer')
    </div>
  </body>
</html>
