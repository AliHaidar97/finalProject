<?php $__env->startSection('content'); ?>
  
    <br>
    <p><a class="btn  btn-default btn-lg" href="/" role="button">Back</a></p>
    <hr>
    <div class="jumbotron text-center">
            <h1><?php echo e($post->Name); ?></h1>
            <hr>
    </div>
    <div class="jumbotron text-left">

      <h2>Categorie:</h2>
      <h3><?php echo e($post->Categorie); ?></h3>
      <hr>
      <h2>Description:</h2>
      <h3><?php echo e($post->Description); ?></h3>
      <hr>
      <h2>Price</h2>
      <h3><?php echo e($post->Price); ?></h3>
      </div>
    <hr>
    <?php if(!Auth::guest()&&Auth::user()->name==$post->User): ?>
   <p> <a class="btn  btn-primary btn-lg" href="/posts/<?php echo e($post->id); ?>/edit" role="button">edit</a></p>
   <p> <?php echo e(Form::open(['action'=>['PostControler@destroy',$post->id],'method'=>'POST'])); ?>

        <?php echo e(Form::hidden('_method','DELETE')); ?>

        <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

    <?php echo e(Form::close()); ?></p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/post/viewid.blade.php ENDPATH**/ ?>