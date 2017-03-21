@extends('layouts.app')

@section('title')
	Edit Vehicle
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div class="col-md-10">
			<legend><h1>Edit: Vehicle - <strong>{{ $vehicle->plate_num }}</strong></h1></legend>
			{!! Form::model($vehicle, ['url' => 'vehicles/' . $vehicle->id, 'method' => 'PATCH']) !!}
			@include('layouts.forms._vehicle', ['submitButton' => 'Update Vehicle'])
		</div>
	</div>
</div>

@endsection