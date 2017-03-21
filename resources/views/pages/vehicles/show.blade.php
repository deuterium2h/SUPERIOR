@extends('layouts.app')

@section('title')
Show Vehicle
@stop

@section('custom-css')
	<style>
		.dropzone {
			border: 2px dashed #0087F7;
  			border-radius: 5px;
		}
		.dropzone .dz-message {
			text-align: center;
		    font-size: 25px;
		    margin: 3em;
		}
	</style>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.nav-sidebar')
			<div class="col-md-10">
				<legend><h1>Vehicle Profile</h1></legend>
				@include('layouts.show._vehicle')
				<div class="form-group">
					<b><legend>Add Vehicle Photos</legend></b>
					<div class="col-md-12">
						<form id="addVehiclePhoto" action="{{ route('store_photo_path', [$vehicle->plate_num]) }}" method="POST" class="dropzone">
							{{ csrf_field() }}
						</form>
					</div>
				</div>&nbsp;
				<hr>
			</div>
		</div>
	</div>
@stop

@section('custom-js')
	<script>
		Dropzone.options.addVehiclePhoto = {
			paramName: 'photo', 
			maxFilesize: 4,
			acceptedFiles: '.jpg, .jpeg, .png, .bmp',
			dictDefaultMessage: 'Drop vehicle pictures here to upload.'
		};
	</script>
@stop