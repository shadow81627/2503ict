@extends('layouts.master')

@section('post')
<form>
  <label for ="name">Name: </label><br>
  <input type="text" name="name" placeholder="Enter your Name"> <br>
  <label for="title">Title: </label><br>
  <input type="text" name="title" placeholder="Enter your Title"> <br>
  <label for="message">Message: </label><br>
  <input type= "text" name="message" placeholder="Enter your post"></input><br>
  <input type="submit" value="Post">
</form>
  
@stop

@section('content')
@if ($posts)
<ul>
@foreach($posts as $post)
    <div class ="post">
      <h2>{{{ $post->TITLE }}}</h2>
      <img class="photo" src={{{ $post->ICON }}}>
      <p>Message: {{{ $post->MESSAGE }}}</p>
      <p>submitted by: {{{ $post->NAME }}} </p>
    </div>
@endforeach
</ul>
@else
<p>No items found.</p>
@endif 


  
	<a href="page2">PAGE2</a>
@stop
