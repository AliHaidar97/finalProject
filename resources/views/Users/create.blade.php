@extends('layouts.app')
@section('content')
    <h1>Create User</h1>
    {{ Form::open(['action'=>'UsersController@store','method'=>'POST']) }}
        <div class="form-group">
            {{Form::label('name','name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'name'])}}
        </div>

        <div class="form-group">
            {{Form::label('email','email')}}
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'email'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('password','password')}}
            {{Form::password('password'),['class'=>'form-control']}}
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


        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{{ Form::close() }}

@endsection