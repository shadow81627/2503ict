@extends('layouts.master')

@section('title')
Associative array search results page
@stop

@section('content')

<h2>Australian Libaray Users</h2>
<h3>Results for {{ $search = Input::get('search'); }}</h3>

@if (count($pms) == 0)

<p>No results found.</p>

@else 

<table class="bordered">
<thead>
<tr><th>Name</th><th>Address</th><th>Phone</th><th>Email</th></tr>
</thead>
<tbody>

@foreach($pms as $pm)
  <tr></tr><td>{{{ $pm['name'] }}}</td><td>{{{ $pm['address'] }}}</td><td>{{{ $pm['phone'] }}}</td><td>{{{ $pm['email'] }}}</td></tr>
@endforeach

</tbody>
</table>
@endif

<p><a href="{{ secure_url('/') }}">New search</a></p>
@stop