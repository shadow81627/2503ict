@extends('layout')
@section('title')
Create
@stop
@section('product')
{{ Form::open(array('action' => 'ProductController@store')) }}

{{ Form::label('name', 'Product Name: ') }}
{{ Form::text('name') }}
{{ $errors->first('name') }}

{{ Form::label('price', 'Price: ') }}
{{ Form::text('price') }}
{{ $errors->first('price') }}

{{ Form::submit('Create') }}

{{ Form::close() }}
@stop