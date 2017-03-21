<div id="accordion">
	<div id="applicant-info">
		<b><legend>Applicant's Information</legend></b>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label(null, 'Complete Name:') !!}
				{!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Last Name', 'required']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label(null, '&nbsp;') !!}
				{!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => 'First Name', 'required']) !!}	
			</div>
			<div class="col-md-3">
				{!! Form::label(null, '&nbsp;') !!}
				{!! Form::text('middle_name', old('middle_name'), ['class' => 'form-control', 'placeholder' => 'Middle Name']) !!}	
			</div>
			<div class="col-md-3">
				{!! Form::label('avatar', 'Applicant Photo:') !!}
				{!! Form::file('avatar', ['class' => 'form-control']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('tax_no', 'Tax Identification Number:') !!}
				{!! Form::text('tax_no', old('tax_no'), ['class' => 'form-control', 'placeholder' => 'XXX-XXX-XXX-XXX', 'required','data-mask' => '999-999-999-999' ]) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('bod_no', 'BOD Resolution Number:') !!}
				{!! Form::text('bod_no', old('bod_no'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('reg_date', 'Date Registered:') !!}
				{!! Form::text('reg_date', $submitButton=='Add New Member' ? date('Y-m-d') : old('reg_date'), ['class' => 'form-control', 'readonly']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('address', 'Address:') !!}
				{!! Form::textarea('address', old('address'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Complete Address', 'required']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('birth_date', 'Date of Birth:') !!}
				{!! Form::date('birth_date', old('birth_date'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-1">
				{!! Form::label('age', 'Age:') !!}
				{!! Form::text('age', old('age'), ['class' => 'form-control', 'placeholder' => 'XX', 'data-mask' => '99']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('gender', 'Gender:') !!}
				{!! Form::select('gender', ['' => '', 'Male' => 'Male', 'Female' => 'Female'], old('gender'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('civil_status', 'Civil Status:') !!}
				{!! Form::select('civil_status', ['' => '', 'Single' => 'Single', 'Married' => 'Married'], old('civil_status'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('religion', 'Religion:') !!}
				{!! Form::select('religion', ['' => '', 'Born-Again Christian' => 'Born-Again Christian', 'Iglesia ni Cristo' => 'Iglesia ni Cristo', 'Muslim' => 'Muslim', 'Roman Catholic' => 'Roman Catholic'], old('religion'), ['class' => 'form-control']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('education', 'Highest Education Attained:') !!}
				{!! Form::select('education', 
				['' => '', 'Elementary Graduate' => 'Elementary Graduate', 'High School Graduate' => 'High School Graduate','Vocational Graduate' => 'Vocational Graduate','College Undergraduate' => 'College Undergraduate','College Graduate' => 'College Graduate'], null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('occupation', 'Occupation/Income Source:') !!}
				{!! Form::text('occupation', old('occupation'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('dependents', 'No. of Dependents:') !!}
				{!! Form::text('dependents', old('dependents'), ['class' => 'form-control', 'placeholder' => 'XX', 'data-mask' => '99']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('annual_income', 'Annual Income:') !!}
				{!! Form::text('annual_income', old('annual_income'), ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>&nbsp;
	<div id="member-payment">
		<b><legend>Member Payment Information</legend></b>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('initial_capital', 'Initial Capital Subscription:') !!}
				{!! Form::text('initial_capital', old('initial_capital'), ['class' => 'form-control', 'placeholder' => 'Enter an amount', 'required']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('share_number', 'Number of Share(s):') !!}
				{!! Form::text('share_number', old('share_number'), ['class' => 'form-control', 'placeholder' => 'Enter number of shares', 'required']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('amount_total', 'Amount:') !!}
				{!! Form::text('amount_total', old('amount_total'), ['class' => 'form-control', 'placeholder' => 'Enter an amount', 'required']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('amount_paid', 'Initial Paid Up:') !!}
				{!! Form::text('amount_paid', old('amount_paid'), ['class' => 'form-control', 'placeholder' => 'Enter an amount', 'required']) !!}
			</div>&nbsp;
		</div>
	</div>
	<div id="member-termination">
		<b><legend>Termination of Membership</legend></b>
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('trm_bod_no', 'BOD Resolution Number:') !!}
				{!! Form::text('trm_bod_no', old('trm_bod_no'), ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::label('trm_date', 'Date:') !!}
				{!! Form::date('trm_date', old('trm_date'), ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>
</div>

<div class="form-group">&nbsp;
	<div class="col-md-12">
		{!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>
{!! Form::close() !!}