@extends('layouts.app')

@section('title')
	Show Operator Member
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.nav-sidebar')
			<div class="col-md-10">
				<legend><h1>Operator Member Profile</h1></legend>
				@include('layouts.show._operator')
			</div>
		</div>
	</div>
@stop