@extends('layouts.base')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<h1>Cards List</h1>

			<ul class="list-group">
				@forelse($cards as $card)
					<li class="list-group-item"><a href="{{ $card->path() }}">{{ $card->title }} ({{ $card->notes()->count() }})</a></li>
				@empty
					<li class="list-group-item">Not faund</li>
				@endforelse
			</ul>
		</div>
	</div>

@endsection