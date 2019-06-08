<?php $__env->startSection('content'); ?>
    <br>
    <p><a class="btn  btn-default btn-lg" href="/" role="button">Back</a></p>
    <hr>
    <div class="jumbotron text-center">
            <h1><?php echo e($categorie->Name); ?></h1>
            <hr>
    </div>
    <div class="well">
      <h2>Description:</h2>
      <h3><?php echo e($categorie->description); ?></h3>
      <hr>
      </div>
    <hr>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $is): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="list-group">
                     <a href="/posts/<?php echo e($is->id); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo e($is->Name); ?></h5>
                        <small><?php echo e($is->created_at); ?></small>
                        </div>
                    <small><?php echo e($is->User); ?></small>
                    </a>
                    <hr>
           </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php if(!Auth::guest()&&Auth::user()->Categorie): ?>
   <p> <a class="btn  btn-primary btn-lg" href="/categories/<?php echo e($categorie->id); ?>/edit" role="button">edit</a></p>
   <p> <?php echo e(Form::open(['action'=>['CategorieController@destroy',$categorie->id],'method'=>'POST'])); ?>

        <?php echo e(Form::hidden('_method','DELETE')); ?>

        <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

    <?php endif; ?>
    <?php echo e(Form::close()); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/Categorie/viewid.blade.php ENDPATH**/ ?>