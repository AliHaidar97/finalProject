@extends('layouts.app')
@section('content')

    <br>
    <p><a class="btn  btn-default btn-lg" href="/" role="button">Back</a></p>
    <hr>
    <div class="jumbotron text-center">
            <h1>{{$user->name}}</h1>
            <hr>
    </div>
    <div class="jumbotron text-left">

      <h2>email:</h2>
      <h3>{{$user->email}}</h3>
      <hr>
      <h2>Categorie access:</h2>
      @if($user->Categorie)
      <h3>{{'YES'}}</h3>
      @else
      <h3>{{"NO"}}</h3>
      @endif
      <hr>
      <h2>Product access:</h2>
      @if($user->Product)
      <h3>{{'YES'}}</h3>
      @else
      <h3>{{"NO"}}</h3>
      @endif
      <hr>
       <h2>Users access:</h2>
      @if($user->Users)
      <h3>{{'YES'}}</h3>
      @else
      <h3>{{"NO"}}</h3>
      @endif
      <hr>
      </div>
    <hr>
   <p> <a class="btn  btn-primary btn-lg" href="/Users/{{$user->id}}/edit" role="button">edit</a></p>
   <p> {{ Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST']) }}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {{ Form::close()}}</p>
@endsection