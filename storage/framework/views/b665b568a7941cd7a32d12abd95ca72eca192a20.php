<?php $__env->startSection('content'); ?>
    <h1>edit User</h1>
    <?php echo e(Form::open(['action'=>['UsersController@update',$user->id],'method'=>'POST'])); ?>

        <div class="form-group">
            <?php echo e(Form::label('name','name')); ?>

            <?php echo e(Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'name'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('email','email')); ?>

            <?php echo e(Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'email'])); ?>

        </div>
        
        <div class="form-group">
            <?php echo e(Form::label('password','password')); ?>

            <?php echo e(Form::input('password', 'password', $user->password,['class'=>'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('Categorie','Categorie')); ?>

            <br>
            <?php echo e(Form::checkbox('Categorie','true')); ?>

        </div>

         <div class="form-group">
            <?php echo e(Form::label('Product','Product')); ?>

            <br>
            <?php echo e(Form::checkbox('Product','true')); ?>

        </div>

         <div class="form-group">
            <?php echo e(Form::label('Users','Users')); ?>

            <br>
            <?php echo e(Form::checkbox('Users','true')); ?>

        </div>

        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>


<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/Users/edit.blade.php ENDPATH**/ ?>