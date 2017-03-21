@extends('layouts.app')

@section('title')
	Home
@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div class="col-md-10">
			<div class="row">
				@include('layouts.regpay')
				@include('layouts.ascpay')
			</div>
		</div>
	</div>
</div>

@stop