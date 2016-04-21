@extends('layouts.master')

@section('title')
Associative array search results page
@stop

@section('content')

<h2>Australian Libaray Users</h2>
<h3>Results for {{{ $search }}}</h3>

@if (count($users) == 0)

<p>No results found.</p>

@else 

<table class="bordered">
<thead>
<tr><th>Number</th><th>Name</th><th>Start</th><th>Finish</th><th>Duration</th><th>Party</th><th>State</th></tr>
</thead>
<tbody>

@foreach($users as $user)
   {{-- {{{print_r($pm)}}} --}}
    
  <tr></tr><td>{{{ $user->number }}}</td><td>{{{ $user->name }}}</td><td>{{{ $user->start }}}</td><td>{{{ $user->finish }}}</td><td>{{{ $user->duration }}}</td><td>{{{ $user->party }}}</td><td>{{{ $user->state }}}</td></tr>
 
@endforeach

</tbody>
</table>
@endif

<p><a href="{{ secure_url('/') }}">New search</a></p>
@stop