@extends('layouts.app')
@section('content')
    <h1>Create Product</h1>

    {{ Form::open(['action'=>['CategorieController@update',$categorie->id],'method'=>'POST']) }}
        <div class="form-group">
            {{Form::label('Name','Name')}}
            {{Form::text('Name',"$categorie->Name",['class'=>'form-control','placeholder'=>"Name"])}}
        </div>

        <div class="form-group">
            {{Form::label('Description','Description')}}
            {{Form::textarea('Description',"$categorie->description",['class'=>'form-control','placeholder'=>"Description"])}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{{Form::close() }}

@endsection