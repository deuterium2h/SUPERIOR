@extends('layouts.app')

@section('title')
	Vehicles
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div id="data-card" class="col-md-9">
			<legend><h1>Vehicles Database
				<a class="btn btn-primary btn-lg pull-right" href="/vehicles/create"><span class="fa fa-plus"></span></a></h1>
			</legend>
			@include('layouts.search-bar')
			@if ($vehicles->count())
				{{ $vehicles->links() }}
				@foreach($vehicles as $vehicle)
				<vehicle-card operator="{{ $vehicle->opr_name }}"
							  chasis="{{ $vehicle->chasis_num }}" 
							  type="{{ $vehicle->body_type }}" 
							  plate="{{ $vehicle->plate_num }}" 
							  date="{{ $vehicle->agree_date }}">
					<form slot="delete" class="pull-right" method="POST" action="/vehicles/{{ $vehicle->id }}">
						{!! csrf_field() !!}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
					</form>
					<a href="/vehicles/{{ $vehicle->plate_num }}/edit" slot="update" class="btn btn-success btn-xs pull-right">
							<i class="fa fa-pencil-square-o fa-lg"></i>
					</a>
					<a href="/vehicles/{{ $vehicle->plate_num }}" slot="view" class="btn btn-default btn-xs pull-right">
							<i class="fa fa-eye fa-lg"></i>
					</a>
				</vehicle-card>
				@endforeach
			@else
				<h2>No Results Found</h2>
			@endif
		</div>
	</div>
</div>
@stop