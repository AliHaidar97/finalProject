@extends('layouts.app')
@section('content')
  
    <br>
    <p><a class="btn  btn-default btn-lg" href="/" role="button">Back</a></p>
    <hr>
    <div class="jumbotron text-center">
            <h1>{{$post->Name}}</h1>
            <hr>
    </div>
    <div class="jumbotron text-left">

      <h2>Categorie:</h2>
      <h3>{{$post->Categorie}}</h3>
      <hr>
      <h2>Description:</h2>
      <h3>{{$post->Description}}</h3>
      <hr>
      <h2>Price</h2>
      <h3>{{$post->Price}}</h3>
      </div>
    <hr>
    @if(!Auth::guest()&&Auth::user()->name==$post->User)
   <p> <a class="btn  btn-primary btn-lg" href="/posts/{{$post->id}}/edit" role="button">edit</a></p>
   <p> {{ Form::open(['action'=>['PostControler@destroy',$post->id],'method'=>'POST']) }}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {{ Form::close()}}</p>
    @endif
@endsection