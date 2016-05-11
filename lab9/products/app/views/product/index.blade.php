@extends('layout')
@section('title')
Products
@stop
@section('product')
<ul>
    @foreach($products as $product)
  <li> {{ link_to_route('product.show', $product->name, array($product->id)) }}
 @endforeach
</ul>
<p>{{ link_to_route('product.create', 'Create') }} </p>
@stop