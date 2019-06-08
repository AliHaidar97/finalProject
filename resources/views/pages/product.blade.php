@extends('layouts.app2')
@section('content')
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
          @if(!Auth::guest()&&Auth::user()->Categorie)
          <li>
            <a href="/categories">
            <i><img src='assets/img/categories.png'></i>
              <p>Categories</p>
            </a>
          </li>
          @endif
          @if(!Auth::guest()&&Auth::user()->Product)
          <li class="active">
            <a href="/product"  >
              <i><img src='assets/img/product.png'></i>
              <p>Products</p>
            </a>
          </li>
          @endif
          @if(!Auth::guest()&&Auth::user()->Users)
           <li >
            <a href="/Users">
              <i><img src="assets/img/users.png"></i>
              <p>Users</p>
            </a>
          </li>
          @endif
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
            <a class="navbar-brand" >My Products</a>
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
    @endsection   
@section('content2')
                <?php $c=0; ?>
                @foreach($product as $is)
                    @if(!Auth::guest()&&$is->User==Auth::user()->name)
                    <?php $c++ ?>
                    <div class="list-group">
                     <a href="/posts/{{$is->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$is->Name}}</h5>
                        <small>{{$is->created_at}}</small>
                        </div>
                    <small>{{$is->User}}</small>
                    </a>
                    </div>
                    @endif
                @endforeach
            @if ($c==0)
                <hr>
                <h3>&nbsp There no products</h3>
            @endif
      <br>
      <p><a class="btn  btn-primary btn-lg" href="/posts/create" role="button">create product</a></p>
@endsection