<?php $__env->startSection('content'); ?>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a  class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src='assets/img/logo-small.png'>
          </div>
        </a>
        <a  class="simple-text logo-normal">
          Foogle
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="/">
                <i><img src='assets/img/home.png'></i>
              <p>Home</p>
            </a>
          </li>
          <?php if(!Auth::guest()): ?>
          <li>
            <a href="/categories">
            <i><img src='assets/img/categories.png'></i>
              <p>Categories</p>
            </a>
          </li>
          <li>
            <a href="/product">
              <i><img src='assets/img/product.png'></i>
              <p>Products</p>
            </a>
          </li>
          <li class="active">
            <a href="/Profile">
              <i class="nc-icon nc-single-02"></i>
              <p>Profile</p>
            </a>
          </li>
           <li >
            <a href="/Users">
              <i><img src="assets/img/users.png"></i>
              <p>Users</p>
            </a>
          </li>
        <?php endif; ?>
      </div>
    </div>
    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>  
    <?php $__env->stopSection(); ?>   
    <?php $__env->startSection('content2'); ?>
    <?php if(!Auth::guest()): ?>
    <?php $user=Auth::user()?>
<h1>edit Profile</h1>
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

            <?php echo e(Form::password('password'),['class'=>'form-control']); ?>

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

<?php endif; ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/pages/Profile.blade.php ENDPATH**/ ?>