@extends('layouts.app')
@section('content')
    <h1>Create Product</h1>

    {{ Form::open(['action'=>['PostControler@update',$post->id],'method'=>'POST']) }}
        <div class="form-group">
            {{Form::label('Name','Name')}}
            {{Form::text('Name',"$post->Name",['class'=>'form-control','placeholder'=>"Name"])}}
        </div>

        <div class="form-group">
            {{Form::label('Price','Price')}}
            {{Form::text('Price',"$post->Price",['class'=>'form-control','placeholder'=>"Price"])}}
        </div>

        <div class="form-group">
            {{Form::label('Categorie','Categorie')}}
            {{Form::textarea('Categorie',"$post->Categorie",['class'=>'form-control','placeholder'=>"Categorie"])}}
        </div>

        
        <div class="form-group">
            {{Form::label('Description','Description')}}
            {{Form::textarea('Description',"$post->Description",['class'=>'form-control','placeholder'=>"Description"])}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{{Form::close() }}

@endsection