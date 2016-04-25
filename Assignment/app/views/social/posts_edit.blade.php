@extends('layouts.master')

@section('post')
<form method="post" action="{{{ url('edit_post_action') }}}">
  <input type="hidden" name="id" value="{{{ $post->ID }}}"> 
  <label for ="name">Name: </label><br>
  <input type="text" name="name" value="{{{ $post->post_name }}}" placeholder="Enter your Name"> <br>
  <label for="title">Title: </label><br>
  <input type="text" name="title" value="{{{ $post->title }}}" placeholder="Enter your Title"> <br>
  <label for="message">Message: </label><br>
  <input type= "text" name="message" value="{{{ $post->message }}}" placeholder="Enter your post"></input><br>
  <input type="submit" value="Update"> <a href="{{{ url("home") }}}">Cancel</a>
</form>
@stop

@section('content')
    <div class ="post">
        <h2>{{{ $post->title }}}</h2>
        <img style="width: 100px; height: 100px;" class="photo"class="photo" src={{{ $post->icon }}}>
        <p>Message: {{{ $post->message }}}</p>
        <p>submitted by: {{{ $post->post_name }}} </p>
        <a href="{{{ url("posts_delete_action/$post->ID") }}}">Delete</a>
    </div>
@stop
