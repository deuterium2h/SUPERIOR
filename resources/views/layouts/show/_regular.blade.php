<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>{{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }}</strong> | Regular ID: {{ $regular->id }}
		<form slot="delete" class="pull-right" method="POST" action="/regulars/{{ $regular->id }}">
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
		</form>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/regulars/{{ $regular->id }}/edit" class="btn btn-success btn-xs pull-right">
			<i class="fa fa-pencil-square-o fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/regulars/{{ $regular->id }}/print" class="btn btn-info btn-xs pull-right">
			<i class="fa fa-print fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/regulars/{{ $regular->id }}/export" class="btn btn-warning btn-xs pull-right">
			<i class="fa fa-file-text-o fa-lg"></i>
		</a>
	</div>
	<div class="panel-body">
		<legend>Applicant's Information</legend>
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('complete-name', 'Complete Name: ') !!}
				<div id="complete-name" name="complete-name">{{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('type', 'Member Type:') !!}
				<div id="type" name="type">{{ $regular->type }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('address', 'Address:') !!}
				<div id="address" name="address">{{ $regular->address }}</div>
			</div>
			<div class="col-md-2 pull-right" style="float: left;">
				<img src="/photos/members/{{ $regular->avatar }}" 
					 alt="{{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }}" 
					 class="pull-right" 
					 style="width:110px; height:110px; border: 4px solid #c1c1c1;">
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('tax_no', 'Tax Identification Number:') !!}
				<div id="tax_no" name="tax_no">{{ $regular->tax_no }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('bod_no', 'BOD Resolution Number:') !!}
				<div id="bod_no" name="bod_no">{{ $regular->bod_no }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('reg_date', 'Date Registered:') !!}
				<div id="reg_date" name="reg_date">{{ $regular->reg_date }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('birth_date', 'Date of Birth:') !!}
				<div id="birth_date" name="birth_date">{{ $regular->birth_date }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('age', 'Age:') !!}
				<div id="age" name="age">{{ $regular->age }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('gender', 'Gender:') !!}
				<div id="gender" name="gender">{{ $regular->gender }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('civil_status', 'Civil Status:') !!}
				<div id="civil_status" name="civil_status">{{ $regular->civil_status }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('religion', 'Religion:') !!}
				<div id="religion" name="religion">{{ $regular->religion }}</div>
			</div>
		</div>&nbsp;
		<legend>Member Payment Information</legend>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('initial_capital', 'Initial Capital Subscription:') !!}
				<div id="initial_capital" name="initial_capital">{{ $regular->initial_capital }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('share_number', 'Number of Share(s):') !!}
				<div id="share_number" name="share_number">{{ $regular->share_number }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('amount_total', 'Amount:') !!}
				<div id="amount_total" name="amount_total">{{ $regular->amount_total }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('amount_paid', 'Initial Paid Up:') !!}
				<div id="amount_paid" name="amount_paid">{{ $regular->amount_paid }}</div>
			</div>&nbsp;
		</div>
		<legend>Termination of Membership</legend>
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('trm_bod_no', 'BOD Resolution Number:') !!}
				<div id="trm_bod_no" name="trm_bod_no">{{ $regular->trm_bod_no }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('trm_date', 'Date:') !!}
				<div id="trm_date" name="trm_date">{{ $regular->trm_date }}</div>
			</div>
		</div>
	</div>
</div>