<?php $__env->startSection('content'); ?>
    <h1>Create Product</h1>
    <?php echo e(Form::open(['action'=>'PostControler@store','method'=>'POST'])); ?>

        <div class="form-group">
            <?php echo e(Form::label('Name','Name')); ?>

            <?php echo e(Form::text('Name','',['class'=>'form-control','placeholder'=>'Name'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('Price','Price')); ?>

            <?php echo e(Form::text('Price','',['class'=>'form-control','placeholder'=>'Price'])); ?>

        </div>

        <div class="form-group">
            <?php 
                use App\Categorie; 
                $cat=DB::table('categories')->pluck('Name');
                foreach($cat as $key=>$is){
                    $z[$is]=$is;
                }
                
                ?>
            <?php echo e(Form::label('Categorie','Categorie')); ?>

            <br>
            <?php if(count($z)==0): ?>
            <?php echo e(Form::select('size', array(''=>'No categorie'))); ?>

            <?php else: ?>
           <?php echo e(Form::select('Categorie', $z)); ?>

           <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo e(Form::label('Description','Description')); ?>

            <?php echo e(Form::textarea('Description','',['class'=>'form-control','placeholder'=>'description'])); ?>

        </div>
    
        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>


<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/post/create.blade.php ENDPATH**/ ?>