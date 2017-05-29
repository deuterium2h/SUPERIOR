{{-- <html>
<head>
	<title>SUPERIOR TRANSPORT COOPERATIVE</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
	<div class="container">
		<legend>Applicant's Information</legend>
			<div class="pull-right">
				<img src="/photos/members/{{ $regular->avatar }}" 
					 alt="{{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }}" 
					 class="pull-right" 
					 style="width:200px; height:200px; border: 4px solid #c1c1c1;">
			</div>

			<div class="pull-right">
				{!! Form::label('address', 'Address:') !!}
			&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div id="address" name="address">{{ $regular->address }}</div>
			</div>
			<div class="pull-right">
				{!! Form::label('type', 'Member Type:') !!}
			&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div id="type" name="type">{{ $regular->type }}</div>
			</div>
			<div class="pull-right">
				{!! Form::label('complete-name', 'Complete Name: ') !!}
			&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div id="complete-name" name="complete-name">{{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }}</div>
			</div>
		
			
			
			
				

		
		
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
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div>
		<img src="logoSmall.png" style="float: top; margin-top: -20px;">
		<center><b><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUPERIOR TRANSPORT COOPERATIVE</h3></b></center>
		{{-- <div class="jumbotron">
			<h1>Hello</h1>
			<p>aksdjaskd kasjdkajsdkajs aksdjaksdjaksj kajsdkajskdjas</p>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				h
			</div>
			<div class="panel-body">
				askdalsdkasldk
			</div>
			<div class="panel-footer">
				&copy; sdkskdksa
			</div>
		</div>
	</div><br> --}}
	<div style="margin-top: 2em; background: blue; border: solid 2px ;">
		&nbsp;<b style="color: white;">Regular Member</b>
	</div><br>
	<img src="photos/members/{{ $regular->avatar }}" style="float: right; border: solid 2px; width: 130px; height: 130px; margin-top: -15px;">
	<div style="margin-bottom: 15px;"><b>Complete Name:</b> {{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }} </div>
	<div style="margin-bottom: 15px;"><b>Address:</b> {{ $regular->address }}</div>

</body>
</html>