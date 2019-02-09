@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostController@store','method' =>'POST']) !!}
        <div class="form-group">
            {{FORM::label('title','Title')}}
            {{FORM::text('title', '',['class'=>'form-control','placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{FORM::label('body','Body')}}
                {{FORM::textarea('body', '',['id'=>'article-ckeditor','class'=>'form-control','placeholder' => 'Body Text'])}}
        </div>
        {{FORM::submit('Submit',['class'=>'btn btn-primary' ])}}
    {!! Form::close() !!}
@endsection