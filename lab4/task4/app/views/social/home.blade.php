@extends('layouts.master')

@section('post')
              <form>
                  Name: <br>
                  <input type="text" name="name"> <br>
                  <textarea rows="4" cols="10">Enter your post</textarea> <br>
                  <button>Post</button>
              </form>
@stop

@section('content')
	<a href="page2">PAGE2</a>
@stop
