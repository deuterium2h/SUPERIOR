@extends('layouts.app')

@section('title')
	Show Associate Member
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.nav-sidebar')
			<div class="col-md-10">
				<legend><h1>Associate Member Profile</h1></legend>
				@include('layouts.show._associate')
			</div>
		</div>
	</div>
@stop