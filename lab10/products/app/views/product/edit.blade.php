@extends('layout')
@section('title')
Edit
@stop
@section('product')
{{Form::model($product, array('method' => 'PUT', 'route' => array('product.update', $product->id))) }}

{{ Form::label('name', 'Product Name: ') }}
{{ Form::text('name') }}
{{ $errors->first('name') }} 

{{ Form::label('price', 'Price: ') }}
{{ Form::text('price') }}
{{ $errors->first('price') }}

{{ Form::submit('Update') }}

{{ Form::close() }}
@stop