<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sitio Web Acueducto Guane</title>

        <meta property="og:image" content="https://guane.aromanos.co/images/logocorpacur.png">
        <meta name="description" content="Sitio web asociación aguas guane">

        <meta property="og:site_name" content="Acueducto Guane">
        <meta property="og:locale" content="es_CO">

        <meta name="application-name" content="Acueducto Guane">
        <meta name="apple-mobile-web-app-title" content="Acueducto Guane">

        <meta name="google-site-verification" content="P2KxUQvvuDeVdKeYbD3nk4KNa2z4n2jDgWixm-IE9r0" />




        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel=”canonical” href="https://guane.aromanos.co/"/>
        <link rel="shortcut icon" href="https://guane.aromanos.co/images/logocorpacur.png"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Inicio</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Inicio Sesión</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    A-Romanos Guane
                </div>

                <div class="links">
                    <a href="">Ing. Israel Arbona Guerrero</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/welcome.blade.php ENDPATH**/ ?>