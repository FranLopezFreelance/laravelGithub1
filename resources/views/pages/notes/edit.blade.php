@extends('layouts.base')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<h4>Edit a Note of {{ $note->card->title }}</h4>

			<form class="form" method="POST" action="/notes/{{ $note->id }}">

				{{ method_field('PATCH') }}
				{{ csrf_field() }}

				<div class="form-group">
					<textarea name="body" class="form-control">{{ $note->body }}</textarea>
				</div>

				<button type="submit" class="btn btn-primary">Save</button>
			</form>

		</div>
	</div>

@endsection