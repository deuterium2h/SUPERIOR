<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $associate->last_name }}, {{ $associate->first_name }} {{ $associate->middle_name }}</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
	body {
		font-size: 17px;
	},
</style>
<body>
	<div>
		<img src="logoSmall.png" style="float: top; margin-top: -20px;">
		<center><b><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUPERIOR TRANSPORT COOPERATIVE</h3></b></center>
	</div>
	<div style="margin-top: 2em; background: blue; border: solid 3px ;">
		&nbsp;<b style="color: white;">Associate Member Information</b>
	</div><br>
	<img src="photos/members/{{ $associate->avatar }}" style="float: right; border: solid 2px; width: 130px; height: 130px; margin-top: -15px;">
	<div style="margin-bottom: 15px;"><b>Complete Name:</b> {{ $associate->last_name }}, {{ $associate->first_name }} {{ $associate->middle_name }} </div>
	<div style="margin-bottom: 15px;"><b>Address:</b> {{ $associate->address }}</div>
	<div style="margin-bottom: 15px;"><b>Tax Identification Number:</b> {{ $associate->tax_no }}</div>
	<div style="margin-bottom: 15px;"><b>BOD Resolution Number:</b> {{ $associate->bod_no }}</div>
	<div style="margin-bottom: 15px;"><b>Date Registered:</b> {{ $associate->reg_date }}</div>
	<div style="margin-bottom: 15px;"><b>Date of Birth:</b> {{ $associate->birth_date }}</div>
	<div style="margin-bottom: 15px;"><b>Age:</b> {{ $associate->age }}</div>
	<div style="margin-bottom: 15px;"><b>Gender:</b> {{ $associate->gender }}</div>
	<div style="margin-bottom: 15px;"><b>Civil Status:</b> {{ $associate->civil_status }}</div>
	<div style="margin-bottom: 15px;"><b>Religion:</b> {{ $associate->religion }}</div>
	<div style="margin-top: 2em; background: blue; border: solid 2px ;">
		&nbsp;<b style="color: white;">Member Payment Information</b>
	</div><br>
	<div style="margin-bottom: 15px;"><b>Initial Capital:</b> {{ $associate->initial_capital }}</div>
	<div style="margin-bottom: 15px;"><b>Number of Share(s):</b> {{ $associate->share_number }}</div>
	<div style="margin-bottom: 15px;"><b>Amount:</b> {{ $associate->amount_total }}</div>
	<div style="margin-bottom: 15px;"><b>Initial Paid Up:</b> {{ $associate->amount_paid }}</div>
	<div style="margin-top: 2em; background: blue; border: solid 2px ;">
		&nbsp;<b style="color: white;">Termination of Membership</b>
	</div><br>
	<div style="margin-bottom: 15px;"><b>BOD Resolution Number:</b> {{ $associate->trm_bod_no }}</div>
	<div style="margin-bottom: 15px;"><b>Date of Termination:</b> {{ $associate->trm_date }}</div>
</body>
</html>