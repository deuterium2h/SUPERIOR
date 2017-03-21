@extends('layouts.app')

@section('title')
	Show Regular Member
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.nav-sidebar')
			<div class="col-md-10">
				<legend><h1>Regular Member Profile</h1></legend>
				@include('layouts.show._regular')
			</div>
		</div>
	</div>
@stop