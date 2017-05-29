<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>{{ $associate->last_name }}, {{ $associate->first_name }} {{ $associate->middle_name }}</strong> | Associate ID: {{ $associate->id }}
		<form slot="delete" class="pull-right" method="POST" action="/associates/{{ $associate->id }}">
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
		</form>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/associates/{{ $associate->id }}/edit" class="btn btn-success btn-xs pull-right">
			<i class="fa fa-pencil-square-o fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/associates/{{ $associate->id }}/print" class="btn btn-info btn-xs pull-right">
			<i class="fa fa-print fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/associates/{{ $associate->id }}/export" class="btn btn-warning btn-xs pull-right">
			<i class="fa fa-file-text-o fa-lg"></i>
		</a>
	</div>
	<div class="panel-body">
		<legend>Applicant's Information</legend>
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('complete-name', 'Complete Name: ') !!}
				<div id="complete-name" name="complete-name">{{ $associate->last_name }}, {{ $associate->first_name }} {{ $associate->middle_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('type', 'Member Type:') !!}
				<div id="type" name="type">{{ $associate->type }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('address', 'Address:') !!}
				<div id="address" name="address">{{ $associate->address }}</div>
			</div>
			<div class="col-md-2 pull-right" style="float: left;">
				<img src="/photos/members/{{ $associate->avatar }}" 
					 alt="{{ $associate->last_name }}, {{ $associate->first_name }} {{ $associate->middle_name }}" 
					 class="pull-right" 
					 style="width:110px; height:110px; border: 4px solid #c1c1c1;">
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('tax_no', 'Tax Identification Number:') !!}
				<div id="tax_no" name="tax_no">{{ $associate->tax_no }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('bod_no', 'BOD Resolution Number:') !!}
				<div id="bod_no" name="bod_no">{{ $associate->bod_no }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('reg_date', 'Date Registered:') !!}
				<div id="reg_date" name="reg_date">{{ $associate->reg_date }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('birth_date', 'Date of Birth:') !!}
				<div id="birth_date" name="birth_date">{{ $associate->birth_date }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('age', 'Age:') !!}
				<div id="age" name="age">{{ $associate->age }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('gender', 'Gender:') !!}
				<div id="gender" name="gender">{{ $associate->gender }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('civil_status', 'Civil Status:') !!}
				<div id="civil_status" name="civil_status">{{ $associate->civil_status }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('religion', 'Religion:') !!}
				<div id="religion" name="religion">{{ $associate->religion }}</div>
			</div>
		</div>&nbsp;
		<legend>Member Payment Information</legend>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('initial_capital', 'Initial Capital Subscription:') !!}
				<div id="initial_capital" name="initial_capital">{{ $associate->initial_capital }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('share_number', 'Number of Share(s):') !!}
				<div id="share_number" name="share_number">{{ $associate->share_number }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('amount_total', 'Amount:') !!}
				<div id="amount_total" name="amount_total">{{ $associate->amount_total }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('amount_paid', 'Initial Paid Up:') !!}
				<div id="amount_paid" name="amount_paid">{{ $associate->amount_paid }}</div>
			</div>&nbsp;
		</div>
		<legend>Termination of Membership</legend>
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('trm_bod_no', 'BOD Resolution Number:') !!}
				<div id="trm_bod_no" name="trm_bod_no">{{ $associate->trm_bod_no }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('trm_date', 'Date:') !!}
				<div id="trm_date" name="trm_date">{{ $associate->trm_date }}</div>
			</div>
		</div>
	</div>
</div>