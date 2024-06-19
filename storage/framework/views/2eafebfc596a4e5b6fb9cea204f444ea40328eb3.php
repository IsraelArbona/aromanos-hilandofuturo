<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image" content="https://guane.aromanos.co/images/logocorpacur.png">
    <meta property="og:site_name" content="Acueducto Guane">
    <meta property="og:locale" content="es_CO">

    <meta name="application-name" content="Acueducto Guane">
    <meta name="apple-mobile-web-app-title" content="Acueducto Guane">

    <meta name="description" content="Sitio web asociación aguas guane">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
	<link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">

	<?php echo $__env->yieldContent('css'); ?>

    <link rel="shortcut icon" href="https://guane.aromanos.co/images/logocorpacur.png"/>

</head>

<body class="app">

    <?php echo $__env->make('partials.spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div>
        <!-- #Left Sidebar ==================== -->
        <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            <?php echo $__env->make('partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">
                        <?php echo $__env->yieldContent('pageheader'); ?>
						<?php echo $__env->make('partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="ajax-content">
                          <?php echo $__env->yieldContent('content'); ?>
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

    <script src="<?php echo e(mix('/js/app.js')); ?> defer"></script>


    <?php echo $__env->yieldContent('js'); ?>

</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/default.blade.php ENDPATH**/ ?>