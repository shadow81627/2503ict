@extends('layout')
@section('title')
Products
@stop
@section('product')
<ul>
 @foreach ($products as $product)
 <li>Name: {{{ $product->name }}}</li>
 <li>Price: {{{ $product->price }}}</li>
 @endforeach
</ul>
@stop