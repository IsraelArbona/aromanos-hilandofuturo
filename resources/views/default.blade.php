<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image" content="https://aromanos.co/images/logo.png">
    <meta name="description" content="Sitio Web A-Romanos">

    <meta property="og:site_name" content="A-Romanos">
    <meta property="og:locale" content="es_CO">

    <meta name="application-name" content="A-Romanos">
    <meta name="apple-mobile-web-app-title" content="A-Romanos">

    <meta name="description" content="Gestión y Servicio de Facturación Personalizada.">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

	@yield('css')

    <link rel="shortcut icon" href="/images/logo.png"/>

</head>

<body class="app">

    @include('partials.spinner')

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('partials.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('partials.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">
                        @yield('pageheader')
						@include('partials.messages')
                        <div class="ajax-content">
                          @yield('content')
                        </div>
                    </div>
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 c-grey-600">
                <span>Copyright © 2021 Designed by
                    <a href="https://Arbona.com" target='_blank' title="iarbona">Israel Arbona Guerrero</a>. All rights reserved.</span>
            </footer>
        </div>
    </div>

    <script src="{{ mix('/js/app.js') }} defer"></script>


    @yield('js')

</body>

</html>
