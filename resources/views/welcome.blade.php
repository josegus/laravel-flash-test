@extends('app')

@section('content')
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur in quidem asperiores impedit, inventore suscipit aut eos omnis nobis, animi autem quo similique praesentium cum fugit vitae quas labore, eveniet.</p>

	<h5>Types</h5>
	<a href="{{ route('alert', ['type' => 'success', 'components' => request()->get('components')]) }}">Success</a>
	<a href="{{ route('alert', ['type' => 'error', 'components' => request()->get('components')]) }}">Error</a>
	<a href="{{ route('alert', ['type' => 'warning', 'components' => request()->get('components')]) }}">Warning</a>

	<h5 class="mt-4">Crud actions</h5>
	<a href="{{ route('crud', ['type' => 'stored', 'components' => request()->get('components')]) }}">Stored</a>
	<a href="{{ route('crud', ['type' => 'updated', 'components' => request()->get('components')]) }}">Updated</a>
	<a href="{{ route('crud', ['type' => 'deleted', 'components' => request()->get('components')]) }}">Deleted</a>
    <a href="{{ route('crud', ['type' => 'queued', 'components' => request()->get('components')]) }}">Queued</a>

	<h5 class="mt-4">Dismissible/Static</h5>
	<a href="{{ route('dismissible', ['components' => request()->get('components')]) }}">Dismissible</a>
	<a href="{{ route('static', ['components' => request()->get('components')]) }}">Static</a>

	<h5 class="mt-4">Validations</h5>
	<form action="{{ route('validations', ['components' => request()->get('components')]) }}" method='post'>
		@csrf

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
