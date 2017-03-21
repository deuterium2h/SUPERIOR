@extends('layouts.app')

@section('title')
	Show Driver Member
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.nav-sidebar')
			<div class="col-md-10">
				<legend><h1>Driver Member Profile</h1></legend>
				@include('layouts.show._driver')
			</div>
		</div>
	</div>
@stop