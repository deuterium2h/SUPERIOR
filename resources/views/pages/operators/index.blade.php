@extends('layouts.app')

@section('title')
	Operators
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div id="data-card" class="col-md-9">
			<legend><h1>Operators Database
				<a class="btn btn-primary btn-lg pull-right" href="/operators/create"><span class="fa fa-plus"></span></a></h1>
			</legend>
			@include('layouts.search-bar')
			{{-- Laravel's @for method --}}
			@if ($operators->count())
				{{ $operators->links() }}
				@foreach($operators as $operator)
				<od-card name="{{ $operator->last_name }}, {{ $operator->first_name }} {{ $operator->middle_name }}" 
						 type="Operator ID: {{ $operator->id}}" 
						 address="{{ $operator->city_address}}"
						 vehicle="">
					<form slot="delete" class="pull-right" method="POST" action="/operators/{{ $operator->id }}">
						{!! csrf_field() !!}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
					</form>					
					<a href="/operators/{{ $operator->id }}/edit" slot="update" class="btn btn-success btn-xs pull-right">
						<i class="fa fa-pencil-square-o fa-lg"></i>
					</a>
					<a href="/operators/{{ $operator->id }}" slot="view" class="btn btn-default btn-xs pull-right">
							<i class="fa fa-eye fa-lg"></i>
					</a>
					<img src="/photos/members/{{ $operator->avatar }}" 
						 alt="{{ $operator->id }}" 
						 style="width:125px; height:125px; float:left; border-radius:50%; border: 5px solid #222;"/>
				</od-card>
				@endforeach
			@else
				<h2>No Results Found</h2>
			@endif
		</div>
	</div>
</div>

@endsection