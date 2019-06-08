<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Foogle</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

    <!-- Styles -->


    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    

</head>
<body>
     <?php echo $__env->make('bar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="container">
      <?php echo $__env->yieldContent('content'); ?>
  
<?php echo $__env->yieldContent('scripts'); ?>
</div>




</body>
</html>
<?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>