<?php $__env->startSection('content'); ?>

    <br>
    <p><a class="btn  btn-default btn-lg" href="/" role="button">Back</a></p>
    <hr>
    <div class="jumbotron text-center">
            <h1><?php echo e($user->name); ?></h1>
            <hr>
    </div>
    <div class="jumbotron text-left">

      <h2>email:</h2>
      <h3><?php echo e($user->email); ?></h3>
      <hr>
      <h2>Categorie access:</h2>
      <?php if($user->Categorie): ?>
      <h3><?php echo e('YES'); ?></h3>
      <?php else: ?>
      <h3><?php echo e("NO"); ?></h3>
      <?php endif; ?>
      <hr>
      <h2>Product access:</h2>
      <?php if($user->Product): ?>
      <h3><?php echo e('YES'); ?></h3>
      <?php else: ?>
      <h3><?php echo e("NO"); ?></h3>
      <?php endif; ?>
      <hr>
       <h2>Users access:</h2>
      <?php if($user->Users): ?>
      <h3><?php echo e('YES'); ?></h3>
      <?php else: ?>
      <h3><?php echo e("NO"); ?></h3>
      <?php endif; ?>
      <hr>
      </div>
    <hr>
   <p> <a class="btn  btn-primary btn-lg" href="/Users/<?php echo e($user->id); ?>/edit" role="button">edit</a></p>
   <p> <?php echo e(Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST'])); ?>

        <?php echo e(Form::hidden('_method','DELETE')); ?>

        <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

    <?php echo e(Form::close()); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/users/viewid.blade.php ENDPATH**/ ?>