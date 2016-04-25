@extends('layouts.master')

@section('post')
@if ($comments)
<ul>
@foreach($commets as $comment)
    <div class ="post">
      <p>{{{ $post->post_name }}} </p>
      <p>{{{ $post->post_name }}}: {{{ $comment->message }}}</p>
      <a href="{{{ url("posts_comments/$post->post_ID") }}}">Comments {{{ $post->numComments }}}</a> | <a href="{{{ url("posts_edit/$post->post_ID") }}}">Edit</a> | <a href="{{{ url("posts_delete_action/$post->post_ID") }}}">Delete</a>
    </div>
@endforeach
</ul>
@else
<p>No items found.</p>
@endif 
@stop

@section('content')
     <div class ="post">
      <h2>{{{ $post->title }}}</h2>
      <img class="photo" src={{{ $post->icon }}}>
      <p>Message: {{{ $post->message }}}</p>
      <p>submitted by: {{{ $post->post_name }}} </p>
      <a href="{{{ url("posts_comments/$post->post_ID") }}}">Comments {{{-- $post->numComments --}}}</a> | <a href="{{{ url("posts_edit/$post->post_ID") }}}">Edit</a> | <a href="{{{ url("posts_delete_action/$post->post_ID") }}}">Delete</a>
    </div>
        <a href="index.php">PAGE1</a>
@stop
