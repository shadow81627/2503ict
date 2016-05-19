@extends('layout')

@section('title')
<h1>Create User</h1>
  
@stop

@section('product')

    {{ Form::open(array('route' => 'user.store')) }}
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username') }}
        {{ $errors->first('username') }}
        <br>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password' ) }}
        {{ $errors->first('password') }}
        <br>
        {{ Form::submit('Create') }}
        {{ Form::close() }}
@stop
