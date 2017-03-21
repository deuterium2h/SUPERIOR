@extends('layouts.app')

@section('title')
	Associates
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div id="data-card" class="col-md-9">
			<legend><h1>Associates Database
				<a class="btn btn-primary btn-lg pull-right" href="/associates/create"><span class="fa fa-plus"></span></a></h1>
			</legend>
			@include('layouts.search-bar')
			{{-- Laravel's @for method --}}
			@if ($associates->count())
				{{ $associates->links() }}
				@foreach($associates as $associate)
				<ra-card name="{{ $associate->last_name }}, {{ $associate->first_name }} {{ $associate->middle_name }}" 
						 type="Associate ID: {{ $associate->id}}" 
						 address="{{ $associate->address}}" 
						 payment="{{ $associate->amount_paid }}">
					<form slot="delete" class="pull-right" method="POST" action="/associates/{{ $associate->id }}">
						{!! csrf_field() !!}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
					</form>
					<a href="/associates/{{ $associate->id }}/edit" slot="update" class="btn btn-success btn-xs pull-right">
							<i class="fa fa-pencil-square-o fa-lg"></i>
					</a>
					<a href="/associates/{{ $associate->id }}" slot="view" class="btn btn-default btn-xs pull-right">
							<i class="fa fa-eye fa-lg"></i>
					</a>
					<img src="/photos/members/{{ $associate->avatar }}" 
						 alt="{{ $associate->id }}" 
						 style="width:125px; height:125px; float:left; border-radius:50%; border: 5px solid #222;"/>
				</ra-card>
				@endforeach
			@else
				<h2>No Results Found</h2>
			@endif
		</div>
	</div>
</div>

@endsection