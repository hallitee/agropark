<!DOCTYPE html>
<html>
  <head>
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="icon" type="image/png" sizes="36x21" href="{{ asset('favicons/favicon2.png')}}">
  </head>
  <body class="animsition">
    <div class="home-2" id="page">
      @include('layouts.nav')

  @yield('content')


 @include('layouts.footer')
    </div>
  </body>
</html>
