<div id="accordion">
	<div id="vehicle-reg">
		<b><legend>Vehicle's Registration Information</legend></b>
		<div class="form-group">
			<div class="col-md-2">
				{!! Form::label('plate_num', 'Plate Number:') !!}
				{!! Form::text('plate_num', old('plate_num'), ['class' => 'form-control', 'placeholder' => 'AAA-0000', 'data-mask' => 'aaa-9999', 'required']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('ltfrb_num', 'LTFRB Frachise Number:') !!}
				{!! Form::text('ltfrb_num', old('ltfrb_num'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('ltfrb_exp', 'Expiration Date:') !!}
				{!! Form::date('ltfrb_exp', old('ltfrb_exp'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('dot_num', 'Department of Tourism Number:') !!}
				{!! Form::text('dot_num', old('dot_num'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('dot_exp', 'Expiration Date:') !!}
				{!! Form::date('dot_exp', old('dot_exp'), ['class' => 'form-control', 'required']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-12">
				{!! Form::label('agree_date', 'Management Agreement Date:') !!}
				{!! Form::date('agree_date', old('agree_date'), ['class' => 'form-control', 'required']) !!}
			</div>
		</div>&nbsp;
	</div>
	<div id="vehicle-owner">
		<b><legend>Vehicle Operator</legend></b>
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('opr_name', 'Operator:') !!}
				{!! Form::text('opr_name', old('opr_name'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-7">
				{!! Form::label('opr_add', 'Address:') !!}
				{!! Form::text('opr_add', old('opr_add'), ['class' => 'form-control']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('opr_num', 'Contact Number:') !!}
				{!! Form::text('opr_num', old('opr_num'), ['class' => 'form-control', 'placeholder' => '(09XX) XXX-XXXX', 'data-mask' => '(0999) 999-9999']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('opr_or_num', 'O.R. Number:') !!}
				{!! Form::text('opr_or_num', old('opr_or_num'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('opr_cr_num', 'C.R. Number:') !!}
				{!! Form::text('opr_cr_num', old('opr_cr_num'), ['class' => 'form-control']) !!}
			</div>
		</div>&nbsp;
	</div>
	<div id="vehicle-specs">
		<b><legend>Vehicle Specifications</legend></b>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('make', 'Make:') !!}
				{!! Form::text('make', old('make'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('body_type', 'Body Type:') !!}
				{!! Form::text('body_type', old('body_type'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('year_model', 'Year Model:') !!}
				{!! Form::text('year_model', old('year_model'), ['class' => 'form-control', 'data-mask' => '9999']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('chasis_num', 'Chasis Number:') !!}
				{!! Form::text('chasis_num', old('chasis_num'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('engine_num', 'Engine Number:') !!}
				{!! Form::text('engine_num', old('engine_num'), ['class' => 'form-control']) !!}
			</div>
		</div>&nbsp;
	</div>
	<div id="vehicle-testdate">
		<b><legend>Vehicle Check Dates</legend></b>
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('tpl_insure_date', 'T.P.L. Insurance Date:') !!}
				{!! Form::date('tpl_insure_date', old('tpl_insure_date'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('pam_insure_date', 'P.A.M. Insurance Date:') !!}
				{!! Form::date('pam_insure_date', old('pam_insure_date'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('emission_test_date', 'Emission Test Date:') !!}
				{!! Form::date('emission_test_date', old('emission_test_date'), ['class' => 'form-control', 'required']) !!}
			</div>
		</div>&nbsp;
	</div>
</div>

<div class="form-group">&nbsp;
	<div class="col-md-12">
		{!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>&nbsp;
<div class="form-group">
	<div class="col-md-12">
	@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
</div>
{!! Form::close() !!}