<?php $__env->startSection('content'); ?>
    <body>
            <h1>Product:</h1>
        <div class="jumbotron text-center">
            <?php if(count($product)>0): ?>
                <ul class="list-group">
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $is): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><?php echo e($is); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            </div>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\blog\resources\views/pages/product.blade.php ENDPATH**/ ?>