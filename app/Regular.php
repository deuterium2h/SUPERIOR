<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regular extends Model
{
	protected $fillable = [
		'last_name',
		'first_name',
		'middle_name',
		'type',
		'tax_no',
		'bod_no',
		'reg_date',
		'initial_capital',
		'share_number',
		'amount_total',
		'amount_paid',
		'address',
		'birth_date',
		'age',
		'gender',
		'civil_status',
		'religion',
		'education',
		'occupation',
		'dependents',
		'annual_income',
		'trm_bod_no',
		'trm_date',
		'upd_date'
	];
}
