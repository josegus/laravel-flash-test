@extends('app')

@section('content')
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur in quidem asperiores impedit, inventore suscipit aut eos omnis nobis, animi autem quo similique praesentium cum fugit vitae quas labore, eveniet.</p>

	<h5>Types</h5>
	<a href="{{ route('alert', 'success') }}">Success</a>
	<a href="{{ route('alert', 'error') }}">Error</a>
	<a href="{{ route('alert', 'warning') }}">Warning</a>

	<h5 class="mt-4">Crud actions</h5>
	<a href="{{ route('crud', 'stored') }}">Stored</a>
	<a href="{{ route('crud', 'updated') }}">Updated</a>
	<a href="{{ route('crud', 'deleted') }}">Deleted</a>

	<h5 class="mt-4">Dismissible/Static</h5>
	<a href="{{ route('dismissible') }}">Dismissible</a>
	<a href="{{ route('static') }}">Static</a>

	<h5 class="mt-4">Validations</h5>
	<form action="{{ route('validations') }}" method='post'>
		@csrf

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
