@extends('layouts.app')

@section('title')
	Add Vehicle
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div class="col-md-10">
			<legend><h1>Add New Vehicle</h1></legend>
			{!! Form::open(['url' => 'vehicles']) !!}
			@include('layouts.forms._vehicle', ['submitButton' => 'Add Vehicle'])
		</div>
	</div>
</div>

@endsection