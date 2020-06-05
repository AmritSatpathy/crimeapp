@extends('inc.header')

@section
   {!! Form::open(['action'] => 'PostsController@store') !!}
     <div class="form-group">
         {{Form::label('title','Title')}}
         {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
   {!! Form::close() !!}
@endsection