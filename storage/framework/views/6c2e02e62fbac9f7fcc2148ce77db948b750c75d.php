<?php $__env->startSection('content'); ?>
    <body>
            <h1>Product:</h1>
            <?php if(count($product)>0): ?>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $is): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <hr>
                    <div class="well text-left">
                    <h3><a href="/posts/<?php echo e($is->id); ?>"><?php echo e($is->Name); ?></a></h3>
                    <small>Written on:<?php echo e($is->created_at); ?></small>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <hr>
                <h2>There no product</h2>
            <?php endif; ?>
      <br>
      <p><a class="btn  btn-primary btn-lg" href="/posts/create" role="button">create</a></p>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/pages/editproduct.blade.php ENDPATH**/ ?>