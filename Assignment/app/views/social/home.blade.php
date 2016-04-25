@extends('layouts.master')

@section('post')
<form method="post" action="{{{ url('add_post_action') }}}">
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
      <h2>{{{ $post->title }}}</h2>
      <img style="width: 100px; height: 100px;"class="photo" src={{{ $post->icon }}}>
      <p>Message: {{{ $post->message }}}</p>
      <p>submitted by: {{{ $post->post_name }}} </p>
      <a href="{{{ url("posts_comments/$post->ID") }}}">Comments {{{ $post->numComments }}}</a> | <a href="{{{ url("posts_edit/$post->ID") }}}">Edit</a> | <a href="{{{ url("posts_delete_action/$post->ID") }}}">Delete</a>
    </div>
@endforeach
</ul>
@else
<p>No items found.</p>
@endif 
@stop
