@extends('layouts.master')

@section('post')
  
@stop

@section('content')
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
@endif 
@stop
