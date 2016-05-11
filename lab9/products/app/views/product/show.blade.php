@extends('layout')
@section('title')
@stop
@section('product')

<h1>Product</h1>
<p>Name: {{{ $product->name }}}</p>
<p>Price: {{{ $product->price }}}</p>
<p>{{ link_to_route('product.edit', 'Edit', array($product->id)) }} </p>
{{ Form::open(array('method' => 'DELETE', 'route' => array('product.destroy', $product->id))) }}
     {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
@stop