<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }}</title>
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
		&nbsp;<b style="color: white;">Regular Member Information</b>
	</div><br>
	<img src="photos/members/{{ $regular->avatar }}" style="float: right; border: solid 2px; width: 130px; height: 130px; margin-top: -15px;">
	<div style="margin-bottom: 15px;"><b>Complete Name:</b> {{ $regular->last_name }}, {{ $regular->first_name }} {{ $regular->middle_name }} </div>
	<div style="margin-bottom: 15px;"><b>Address:</b> {{ $regular->address }}</div>
	<div style="margin-bottom: 15px;"><b>Tax Identification Number:</b> {{ $regular->tax_no }}</div>
	<div style="margin-bottom: 15px;"><b>BOD Resolution Number:</b> {{ $regular->bod_no }}</div>
	<div style="margin-bottom: 15px;"><b>Date Registered:</b> {{ $regular->reg_date }}</div>
	<div style="margin-bottom: 15px;"><b>Date of Birth:</b> {{ $regular->birth_date }}</div>
	<div style="margin-bottom: 15px;"><b>Age:</b> {{ $regular->age }}</div>
	<div style="margin-bottom: 15px;"><b>Gender:</b> {{ $regular->gender }}</div>
	<div style="margin-bottom: 15px;"><b>Civil Status:</b> {{ $regular->civil_status }}</div>
	<div style="margin-bottom: 15px;"><b>Religion:</b> {{ $regular->religion }}</div>
	<div style="margin-top: 2em; background: blue; border: solid 2px ;">
		&nbsp;<b style="color: white;">Member Payment Information</b>
	</div><br>
	<div style="margin-bottom: 15px;"><b>Initial Capital:</b> {{ $regular->initial_capital }}</div>
	<div style="margin-bottom: 15px;"><b>Number of Share(s):</b> {{ $regular->share_number }}</div>
	<div style="margin-bottom: 15px;"><b>Amount:</b> {{ $regular->amount_total }}</div>
	<div style="margin-bottom: 15px;"><b>Initial Paid Up:</b> {{ $regular->amount_paid }}</div>
	<div style="margin-top: 2em; background: blue; border: solid 2px ;">
		&nbsp;<b style="color: white;">Termination of Membership</b>
	</div><br>
	<div style="margin-bottom: 15px;"><b>BOD Resolution Number:</b> {{ $regular->trm_bod_no }}</div>
	<div style="margin-bottom: 15px;"><b>Date of Termination:</b> {{ $regular->trm_date }}</div>
</body>
</html>