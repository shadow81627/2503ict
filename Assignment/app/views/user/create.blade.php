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
        {{ Form::label('birthdate', 'Date Of Birth:') }}
        {{ Form::text('birthdate') }}
        {{ $errors->first('birthdate') }}
        <br>
        {{ Form::label('fullname', 'Full Name:') }}
        {{ Form::text('fullname') }}
        {{ $errors->first('fullname') }}
        <br>
        {{ Form::submit('Create') }}
        {{ Form::close() }}
@stop
