@extends('layouts.app')
@section('content')
    <br>
    <p><a class="btn  btn-default btn-lg" href="/" role="button">Back</a></p>
    <hr>
    <div class="jumbotron text-center">
            <h1>{{$categorie->Name}}</h1>
            <hr>
    </div>
    <div class="well">
      <h2>Description:</h2>
      <h3>{{$categorie->description}}</h3>
      <hr>
      </div>
    <hr>
    @foreach($product as $is)
          <div class="list-group">
                     <a href="/posts/{{$is->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$is->Name}}</h5>
                        <small>{{$is->created_at}}</small>
                        </div>
                    <small>{{$is->User}}</small>
                    </a>
                    <hr>
           </div>
        
    @endforeach
  @if(!Auth::guest()&&Auth::user()->Categorie)
   <p> <a class="btn  btn-primary btn-lg" href="/categories/{{$categorie->id}}/edit" role="button">edit</a></p>
   <p> {{ Form::open(['action'=>['CategorieController@destroy',$categorie->id],'method'=>'POST']) }}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    @endif
    {{ Form::close()}}</p>
@endsection