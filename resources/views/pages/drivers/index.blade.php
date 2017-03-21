@extends('layouts.app')

@section('title')
	Drivers
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div id="data-card" class="col-md-9">
			<legend><h1>Drivers Database
				<a class="btn btn-primary btn-lg pull-right" href="/drivers/create"><span class="fa fa-plus"></span></a></h1>
			</legend>
			@include('layouts.search-bar')
			{{-- Laravel's @for method --}}
			@if ($drivers->count())
			{{ $drivers->links() }}
			@foreach($drivers as $driver)
				<od-card name="{{ $driver->last_name }}, {{ $driver->first_name }} {{ $driver->middle_name }}" 
						 type="Driver ID: {{ $driver->id}}" 
						 address="{{ $driver->city_address}}" 
						 vehicle="Vehicle Plate Number">
					<form slot="delete" class="pull-right" method="POST" action="/drivers/{{ $driver->id }}">
						{!! csrf_field() !!}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
					</form>
					<a href="/drivers/{{ $driver->id }}/edit" slot="update" class="btn btn-success btn-xs pull-right">
							<i class="fa fa-pencil-square-o fa-lg"></i>
					</a>
					<a href="/drivers/{{ $driver->id }}" slot="view" class="btn btn-default btn-xs pull-right">
							<i class="fa fa-eye fa-lg"></i>
					</a>
					<img src="/photos/members/{{ $driver->avatar }}" 
						 alt="{{ $driver->id }}" 
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