<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        {{ link_to_route('user.create', 'Create an Account') }} <br>

        @if (Auth::check()) 
        {{ link_to_route('user.logout', 'Logout') }}
        {{ Auth::user()->username }} <br>
        @else
        {{ Form::open(array('route' => 'user.login')) }}
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username') }}
        {{ $errors->first('username') }}
        
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password' ) }}
        {{ $errors->first('password') }}
        
        {{ Form::submit('Login') }}
        {{ Form::close() }}
        
        {{ Session::pull('login_error') }} <br>
        @endif
        @yield('title')
        @yield('product')
    </body>
</html>