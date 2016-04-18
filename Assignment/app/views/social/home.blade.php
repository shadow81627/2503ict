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
<?php
    //randomly generates a number between 1 and 10
    $num = rand(1, 10);
    //the array containg all the of the data for the post
    $posts = array(
        array('title' => 'Title 1', 'message' => "post 1", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png', 'name' => 'Ben'),
        array('title' => 'Title 2', 'message' => "post 2", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png', 'name' => 'Tom'),
    );
?>
@foreach($posts as $post)
    <div class ="post">
      <h2>{{$post['title']}}</h2>
      <img class="photo" src="https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png" alt="Griffith University Logo">
      <p>Message: {{$post['message']}}</p>
      <p>submitted by: {{$post['name']}} </p>
    </div>
  @endforeach
  
	<a href="page2">PAGE2</a>
@stop
