<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
	protected $fillable = [
		'plate_num',
		'ltfrb_num',
		'ltfrb_exp',
		'dot_num',
		'dot_exp',
		'agree_date',
		'opr_name',
		'opr_add',
		'opr_num',
		'opr_or_num',
		'opr_cr_num',
		'make',
		'body_type',
		'year_model',
		'chasis_num',
		'engine_num',
		'tpl_insure_date',
		'pam_insure_date',
		'emission_test_date'
	];
	/**
	 * Scope query to those located at a given address.
	 *
	 * @param string $plate_num
	 * @return Builder
	 */
	public static function plateNumber($plate_num)
	{
		return static::where(compact('plate_num'))->firstOrFail();
	}

	public function addPhoto(VehiclePhoto $photo)
	{
		return $this->photos()->save($photo);
	}

	public function photos()
	{
		return $this->hasMany('App\VehiclePhoto');
	}
}
