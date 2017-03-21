<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegularsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regulars', function (Blueprint $table) {
			$table->increments('id');
			// $table->string('regular_id');
			$table->string('avatar')->default('default.png');
			$table->string('last_name', 30);
			$table->string('first_name', 30);
			$table->string('middle_name', 30);
			$table->string('type')->default('Regular');
			$table->string('tax_no');
			$table->string('bod_no');
			$table->string('reg_date')->nullable();
			$table->double('initial_capital');
			$table->double('share_number');
			$table->double('amount_total');
			$table->double('amount_paid');
			$table->text('address');
			$table->string('birth_date')->nullable();
			$table->string('age');
			$table->string('gender');
			$table->string('civil_status');
			$table->string('religion');
			$table->string('education');
			$table->string('occupation');
			$table->double('dependents', 2);
			$table->double('annual_income');
			$table->string('trm_bod_no');
			$table->string('trm_date')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('regulars');
	}
}
