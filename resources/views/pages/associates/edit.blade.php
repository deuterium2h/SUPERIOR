@extends('layouts.app')

@section('title')
	Edit Associate
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('layouts.nav-sidebar')
		<div class="col-md-10">
			<legend><h1>Edit: {{ $associate->last_name}}, {{ $associate->first_name }} {{ $associate->middle_name }}</h1></legend>
			{!! Form::model($associate, ['url' => 'associates/' . $associate->id, 'method' => 'PATCH', 'files' => true]) !!}
			@include('layouts.forms._ra', ['submitButton' => 'Update Member'/*, 'typeId' => 'Automatically generated by the System'*/])
		</div>
	</div>
</div>

@endsection