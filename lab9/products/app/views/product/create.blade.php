{{ Form::open(array('action' => 'ProductController@store')) }}

{{ Form::label('name', 'Product Name: ') }}
{{ Form::text('name') }}

{{ Form::label('price', 'Price: ') }}
{{ Form::text('price') }}

{{ Form::submit('Create') }}

{{ Form::close() }}