@extends('layouts.app')
@section('content')

    <h1>Create Categorie </h1>
    
    {{ Form::open(['action'=>'CategorieController@store','method'=>'POST']) }}
        <div class="form-group">
            {{Form::label('Name','Name')}}
            {{Form::text('Name','',['class'=>'form-control','placeholder'=>'Name'])}}
        </div>

        <div class="form-group">
            {{Form::label('Description','Description')}}
            {{Form::textarea('Description','',['class'=>'form-control','placeholder'=>'description'])}}
        </div>
    
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{{ Form::close() }}

@endsection