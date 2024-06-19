<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:image" content="https://guane.aromanos.co/images/logocorpacur.png">
  <meta property="og:site_name" content="Acueducto Guane">
  <meta property="og:locale" content="es_CO">

  <meta name="application-name" content="Acueducto Guane">
  <meta name="apple-mobile-web-app-title" content="Acueducto Guane">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <!-- Styles -->
  <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">

  <link rel="shortcut icon" href="images/logocorpacur.png"/>
</head>
<body class="app">

    <?php echo $__env->make('partials.spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("/images/bg.jpg")'>
        <div class="pos-a centerXY">
          <div class="bgc-white bdrs-50p pos-r" style='width: 320px; height: 320px;'>
            <img class="pos-a centerXY" src="/images/logocorpacur.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/layouts/app.blade.php ENDPATH**/ ?>