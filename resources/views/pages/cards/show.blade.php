@extends('layouts.base')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<h3>{{ $card->title }}</h3>

			<ul class="list-group">
				@foreach($card->notes as $note)
					<li class="list-group-item">
						{{ $note->body }}
						<a href="/users/{{ $note->user->id }}" style="float:right">{{ $note->user->username }}</a>
					</li>
				@endforeach
			</ul>

			<hr />

			<h4>Add a New Note</h4>

			@if(count($errors))

				<div class='alert alert-danger'>
					<ul>
						@forelse($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>

			@endif

			<form class="form" method="POST" action="/cards/{{ $card->id }}/notes">

				{{ csrf_field() }}

				<div class="form-group">
					<textarea name="body" class="form-control">{{ old('body') }}</textarea>
				</div>

				<button type="submit" class="btn btn-primary">Add Note</button>
			</form>

		</div>
	</div>

@endsection