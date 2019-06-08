<?php $__env->startSection('content'); ?>
 
<script>
var z="<?php echo Auth::user()->name; ?>"
alert("Weclome\n"+z);</script>
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
          Dashboard
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="/">
                <i><img src='assets/img/home.png'></i>
              <p>Home</p>
            </a>
          </li>
          <?php if(!Auth::guest()&&Auth::user()->Categorie): ?>
          <li>
            <a href="/categories">
            <i><img src='assets/img/categories.png'></i>
              <p>Categories</p>
            </a>
          </li>
          <?php endif; ?>
          <?php if(!Auth::guest()&&Auth::user()->Product): ?>
          <li>
            <a href="/product">
              <i><img src='assets/img/product.png'></i>
              <p>Products</p>
            </a>
          </li>
          <?php endif; ?>
          <?php if(!Auth::guest()&&Auth::user()->Users): ?>
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
            <a class="navbar-brand" href="#pablo">Products</a>
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

    <?php $product =App\Post::all() ;?>
           <?php $c=0 ?>
              
                <div class="list-group">
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $is): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $c++ ?>
                    <a href="/posts/<?php echo e($is->id); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo e($is->Name); ?></h5>
                        <small><?php echo e($is->created_at); ?></small>
                        </div>
                    <small><?php echo e($is->User); ?></small>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if($c==0): ?>
                <hr>
               <h3>&nbsp There no products</h3>
            <?php endif; ?>
      <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>