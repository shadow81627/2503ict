@extends('layouts.master')

@section('post')
<form>
  Name: <br>
  <input type="text" name="name"> <br>
  <textarea rows="4" cols="10">Enter your post</textarea> <br>
  <button>Post</button>
</form>

<div class ="post">
      <img class="photo" src="https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png" alt="Griffith University Logo"> <br>
      <p>stuff</p>
  </div>
@stop

@section('content')
	<a href="page2">PAGE2</a>
@stop
