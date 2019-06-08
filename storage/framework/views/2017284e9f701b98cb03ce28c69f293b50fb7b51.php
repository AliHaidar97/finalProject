<?php $__env->startSection('content'); ?>
    <h1>Create Product</h1>

    <?php echo e(Form::open(['action'=>['PostControler@update',$post->id],'method'=>'POST'])); ?>

        <div class="form-group">
            <?php echo e(Form::label('Name','Name')); ?>

            <?php echo e(Form::text('Name',"$post->Name",['class'=>'form-control','placeholder'=>"Name"])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('Price','Price')); ?>

            <?php echo e(Form::text('Price',"$post->Price",['class'=>'form-control','placeholder'=>"Price"])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('Description','Description')); ?>

            <?php echo e(Form::textarea('Description',"$post->Description",['class'=>'form-control','placeholder'=>"Description"])); ?>

        </div>
        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/post/edit.blade.php ENDPATH**/ ?>