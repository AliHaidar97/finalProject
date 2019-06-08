@extends('layouts.app')
@section('content')
    <h1>edit User</h1>
    {{ Form::open(['action'=>['UsersController@update',$user->id],'method'=>'POST']) }}
        <div class="form-group">
            {{Form::label('name','name')}}
            {{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'name'])}}
        </div>

        <div class="form-group">
            {{Form::label('email','email')}}
            {{Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'email'])}}
        </div>
    
        <div class="form-group">
            {{Form::label('Categorie','Categorie')}}
            <br>
            {{Form::checkbox('Categorie','true')}}
        </div>

         <div class="form-group">
            {{Form::label('Product','Product')}}
            <br>
            {{Form::checkbox('Product','true')}}
        </div>

         <div class="form-group">
            {{Form::label('Users','Users')}}
            <br>
            {{Form::checkbox('Users','true')}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{{ Form::close() }}

@endsection