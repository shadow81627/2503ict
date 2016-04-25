@extends('layouts.master')

@section('post')
<form method="post" action="{{{ url('add_comment_action') }}}">
  <input type="hidden" name="id" value="{{{ $post->ID }}}"> 
  <label for ="name">Name: </label><br>
  <input type="text" name="name" placeholder="Enter your Name"> <br>
  <label for="message">Comment: </label><br>
  <input type= "text" name="comment" placeholder="Enter your comment"></input><br>
  <input type="submit" value="Add Comment">
</form>
@if ($comments)
<ul>
@foreach($comments as $comment)
    <div style="background-color: grey; padding: 10px; border-radius: 25px; margin: 10px;" class ="post">
        <h3>{{{ $comment->comment_name }}} </h3>
        <p>{{{ $comment->comment }}}</p>
        <a href="{{{ url("comment_delete_action/$comment->comment_ID") }}}">Delete</a>
    </div>
@endforeach
</ul>
@else
<p>No comments found.</p>
@endif 
@stop

@section('content')
     <div class ="post">
      <h2>{{{ $post->title }}}</h2>
      <img style="width: 100px; height: 100px;" class="photo"class="photo" src={{{ $post->icon }}}>
      <p>Message: {{{ $post->message }}}</p>
      <p>submitted by: {{{ $post->post_name }}} </p>
      <a href="{{{ url("posts_edit/$post->ID") }}}">Edit</a> | <a href="{{{ url("posts_delete_action/$post->ID") }}}">Delete</a>
    </div>
@stop
