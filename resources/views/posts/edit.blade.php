@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update',$post->id],'method' =>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{FORM::label('title','Title')}}
            {{FORM::text('title',$post->title,['class'=>'form-control','placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{FORM::label('body','Body')}}
                {{FORM::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        {{FORM::hidden('_method','PUT')}}
        {{FORM::submit('Submit',['class'=>'btn btn-primary' ])}}
    {!! Form::close() !!}
@endsection