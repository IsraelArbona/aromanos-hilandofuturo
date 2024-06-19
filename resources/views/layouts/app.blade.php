<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:image" content="https://aromanos.co/images/logo.png">
    <meta name="description" content="Sitio Web A-Romanos">

    <meta property="og:site_name" content="A-Romanos">
    <meta property="og:locale" content="es_CO">

    <meta name="application-name" content="A-Romanos">
    <meta name="apple-mobile-web-app-title" content="A-Romanos">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  <link rel="shortcut icon" href="images/logo.png"/>
</head>
<body class="app">

    @include('partials.spinner')

    <div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("/images/bg.jpg")'>
        <div class="pos-a centerXY">
          <div class="bgc-white bdrs-50p pos-r" style='width: 320px; height: 320px;'>
            <img class="pos-a centerXY" src="/images/logo.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
        @yield('content')
      </div>
    </div>

</body>
</html>
