<?php $__env->startSection('content'); ?>
    <br>
    <p><a class="btn  btn-default btn-lg" href="/product" role="button">Back</a></p>
    <hr>
    <div class="jumbotron text-center">
            <h1><?php echo e($post->Name); ?></h1>
            <hr>
    </div>
    <div class="jumbotron text-left">
      <h2>Description:</h2>
      <h3><?php echo e($post->Description); ?></h3>
      <hr>
      <h2>Price</h2>
      <h3><?php echo e($post->Price); ?></h3>
      </div>
    <hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/post/homeviewid.blade.php ENDPATH**/ ?>