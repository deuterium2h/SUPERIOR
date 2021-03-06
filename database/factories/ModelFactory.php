<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;

	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Regular::class, function (Faker\Generator $faker) {
	return [
		'last_name'       => $faker->lastName,
		'first_name'      => $faker->firstName,
		'middle_name'     => $faker->lastName,
		'tax_no'          => $faker->isbn13,
		'bod_no'          => $faker->isbn10,
		'reg_date'        => $faker->date,
		'initial_capital' => $faker->numberBetween(1000, 100000),
		'share_number'    => $faker->numberBetween(1000, 100000),
		'amount_total'    => $faker->numberBetween(1000, 100000),
		'amount_paid'     => $faker->numberBetween(1000, 100000),
		'address'         => $faker->address,
		'birth_date'      => $faker->date,
		'age'             => $faker->numberBetween(17, 65),
		'gender'          => $faker->randomElement(['Male', 'Female']),
		'civil_status'    => $faker->randomElement(['Single', 'Married']),
		'religion'        => $faker->randomElement(['Born-Again Christian', 'Iglesia ni Cristo', 'Muslim', 'Roman Catholic']),
		'education'       => $faker->randomElement(['Elementary Graduate', 'High School Graduate', 'Vocational Graduate', 'College Undergraduate', 'College Graduate']),
		'occupation'      => $faker->jobTitle,
		'dependents'      => $faker->numberBetween(1, 99),
		'annual_income'   => $faker->numberBetween(20000, 2000000),
		'trm_bod_no'      => $faker->isbn10,
		'trm_date'        => $faker->date
	];
});

$factory->define(App\Associate::class, function (Faker\Generator $faker) {
	return [
		'last_name'       => $faker->lastName,
		'first_name'      => $faker->firstName,
		'middle_name'     => $faker->lastName,
		'tax_no'          => $faker->isbn13,
		'bod_no'          => $faker->isbn10,
		'reg_date'        => $faker->date,
		'initial_capital' => $faker->numberBetween(1000, 100000),
		'share_number'    => $faker->numberBetween(1000, 100000),
		'amount_total'    => $faker->numberBetween(1000, 100000),
		'amount_paid'     => $faker->numberBetween(1000, 100000),
		'address'         => $faker->address,
		'birth_date'      => $faker->date,
		'age'             => $faker->numberBetween(17, 65),
		'gender'          => $faker->randomElement(['Male', 'Female']),
		'civil_status'    => $faker->randomElement(['Single', 'Married']),
		'religion'        => $faker->randomElement(['Born-Again Christian', 'Iglesia ni Cristo', 'Muslim', 'Roman Catholic']),
		'education'       => $faker->randomElement(['Elementary Graduate', 'High School Graduate', 'Vocational Graduate', 'College Undergraduate', 'College Graduate']),
		'occupation'      => $faker->jobTitle,
		'dependents'      => $faker->numberBetween(1, 99),
		'annual_income'   => $faker->numberBetween(20000, 2000000),
		'trm_bod_no'      => $faker->isbn10,
		'trm_date'        => $faker->date
	];
});

$factory->define(App\Operator::class, function (Faker\Generator $faker) {
	return [
		'last_name'        => $faker->lastName,
		'first_name'       => $faker->firstName,
		'middle_name'      => $faker->lastName,
		'contact_num'      => $faker->phoneNumber,
		'city_address'     => $faker->streetAddress,
		'province_address' => $faker->address,
		'citizenship'      => 'Filipino',
		'birth_date'       => $faker->date,
		'birth_place'      => $faker->city,
		'age'              => $faker->numberBetween(0, 70),
		'gender'           => $faker->randomElement(['Male', 'Female']),
		'civil_status'     => $faker->randomElement(['Single', 'Married']),
		'blood_type'       => $faker->randomElement(['AB+', 'A+', 'B+', 'O+', 'AB-', 'A-', 'B-', 'O-']),
		'weight'           => $faker->numberBetween(0, 200),
		'height'           => $faker->numberBetween(0, 200),
		'spouse_name'      => $faker->name,
		'spouse_job'       => $faker->jobTitle,
		'child1_name'      => $faker->name,
		'child1_bday'      => $faker->date,
		'child2_name'      => $faker->name,
		'child2_bday'      => $faker->date,
		'child3_name'      => $faker->name,
		'child3_bday'      => $faker->date,
		'child4_name'      => $faker->name,
		'child4_bday'      => $faker->date,
		'child5_name'      => $faker->name,
		'child5_bday'      => $faker->date,
		'child6_name'      => $faker->name,
		'child6_bday'      => $faker->date,
		'child7_name'      => $faker->name,
		'child7_bday'      => $faker->date,
		'child8_name'      => $faker->name,
		'child8_bday'      => $faker->date,
		'father_name'      => $faker->name,
		'father_address'   => $faker->address,
		'mother_name'      => $faker->name,
		'mother_address'   => $faker->address,
		'language'         => $faker->randomElement(['Filipino', 'English']),
		'pagibig_no'       => $faker->isbn13,
		'sss_no'           => $faker->isbn10,
		'philhealth_no'    => $faker->isbn13,
		'tax_no'           => $faker->isbn13,
		'elem_school'      => $faker->company,
		'elem_units'       => $faker->numberBetween(85, 100),
		'elem_year'        => $faker->year,
		'second_school'    => $faker->company,
		'second_units'     => $faker->numberBetween(85, 100),
		'second_year'      => $faker->year,
		'voca_school'      => $faker->company,
		'voca_units'       => $faker->numberBetween(85, 100),
		'voca_year'        => $faker->year,
		'college_school'   => $faker->company,
		'college_course'   => $faker->jobTitle,
		'college_units'    => $faker->numberBetween(1, 3),
		'college_year'     => $faker->year,
		'postgrad_school'  => $faker->company,
		'postgrad_course'  => $faker->jobTitle,
		'postgrad_units'   => $faker->numberBetween(1, 3),
		'postgrad_year'    => $faker->year,
		'skills'           => $faker->word,
		'computer_skills'  => $faker->word,
		'exams'            => $faker->word,
		'emp_name1'        => $faker->name,
		'emp_add1'         => $faker->address,
		'emp_date_from1'   => $faker->date,
		'emp_date_to1'     => $faker->date,
		'emp_desc1'        => $faker->sentence,
		'emp_pos1'         => $faker->jobTitle,
		'emp_sal1'         => $faker->numberBetween(1000, 100000),
		'emp_name2'        => $faker->name,
		'emp_add2'         => $faker->address,
		'emp_date_from2'   => $faker->date,
		'emp_date_to2'     => $faker->date,
		'emp_desc2'        => $faker->sentence,
		'emp_pos2'         => $faker->jobTitle,
		'emp_sal2'         => $faker->numberBetween(1000, 100000),
		'emp_name3'        => $faker->name,
		'emp_add3'         => $faker->address,
		'emp_date_from3'   => $faker->date,
		'emp_date_to3'     => $faker->date,
		'emp_desc3'        => $faker->sentence,
		'emp_pos3'         => $faker->jobTitle,
		'emp_sal3'         => $faker->numberBetween(1000, 100000),
		'guard_name'       => $faker->name,
		'guard_address'    => $faker->address,
		'guard_num'        => $faker->phoneNumber,
		'guard_relation'   => $faker->randomElement(['Mother', 'Father', 'Spouse', 'Brother', 'Sister']),
		'references'       => $faker->name,
		'reg_date'         => $faker->date,
		'upd_date'         => $faker->date
	];
});

$factory->define(App\Driver::class, function (Faker\Generator $faker) {
	return [
		'last_name'         => $faker->lastName,
		'first_name'        => $faker->firstName,
		'middle_name'       => $faker->lastName,
		'contact_num'       => $faker->phoneNumber,
		'city_address'      => $faker->streetAddress,
		'province_address'  => $faker->address,
		'citizenship'       => 'Filipino',
		'birth_date'        => $faker->date,
		'birth_place'       => $faker->city,
		'age'               => $faker->numberBetween(0, 70),
		'gender'            => $faker->randomElement(['Male', 'Female']),
		'civil_status'      => $faker->randomElement(['Single', 'Married']),
		'blood_type'        => $faker->randomElement(['AB+', 'A+', 'B+', 'O+', 'AB-', 'A-', 'B-', 'O-']),
		'weight'            => $faker->numberBetween(0, 200),
		'height'            => $faker->numberBetween(0, 200),
		'license'           => $faker->isbn10,
		'license_exp'       => $faker->date,
		'sbma_num'          => $faker->isbn13,
		'sbma_exp'          => $faker->date,
		'pwg_num'           => $faker->isbn10,
		'pwg_exp'           => $faker->date,
		'nbi_num'           => $faker->isbn10,
		'nbi_exp'           => $faker->date,
		'med_cert_num'      => $faker->isbn13,
		'med_cert_exp'      => $faker->date,
		'sbma_led_cert_num' => $faker->isbn13,
		'sbma_led_cert_exp' => $faker->date,
		'spouse_name'       => $faker->name,
		'spouse_job'        => $faker->jobTitle,
		'child1_name'       => $faker->name,
		'child1_bday'       => $faker->date,
		'child2_name'       => $faker->name,
		'child2_bday'       => $faker->date,
		'child3_name'       => $faker->name,
		'child3_bday'       => $faker->date,
		'child4_name'       => $faker->name,
		'child4_bday'       => $faker->date,
		'child5_name'       => $faker->name,
		'child5_bday'       => $faker->date,
		'child6_name'       => $faker->name,
		'child6_bday'       => $faker->date,
		'child7_name'       => $faker->name,
		'child7_bday'       => $faker->date,
		'child8_name'       => $faker->name,
		'child8_bday'       => $faker->date,
		'father_name'       => $faker->name,
		'father_address'    => $faker->address,
		'mother_name'       => $faker->name,
		'mother_address'    => $faker->address,
		'language'          => $faker->randomElement(['Filipino', 'English']),
		'pagibig_no'        => $faker->isbn13,
		'sss_no'            => $faker->isbn10,
		'philhealth_no'     => $faker->isbn13,
		'tax_no'            => $faker->isbn13,
		'elem_school'       => $faker->company,
		'elem_units'        => $faker->numberBetween(85, 100),
		'elem_year'         => $faker->year,
		'second_school'     => $faker->company,
		'second_units'      => $faker->numberBetween(85, 100),
		'second_year'       => $faker->year,
		'voca_school'       => $faker->company,
		'voca_units'        => $faker->numberBetween(85, 100),
		'voca_year'         => $faker->year,
		'college_school'    => $faker->company,
		'college_course'    => $faker->jobTitle,
		'college_units'     => $faker->numberBetween(1, 3),
		'college_year'      => $faker->year,
		'postgrad_school'   => $faker->company,
		'postgrad_course'   => $faker->jobTitle,
		'postgrad_units'    => $faker->numberBetween(1, 3),
		'postgrad_year'     => $faker->year,
		'skills'            => $faker->word,
		'computer_skills'   => $faker->word,
		'exams'             => $faker->word,
		'emp_name1'         => $faker->name,
		'emp_add1'          => $faker->address,
		'emp_date_from1'    => $faker->date,
		'emp_date_to1'      => $faker->date,
		'emp_desc1'         => $faker->sentence,
		'emp_pos1'          => $faker->jobTitle,
		'emp_sal1'          => $faker->numberBetween(1000, 100000),
		'emp_name2'         => $faker->name,
		'emp_add2'          => $faker->address,
		'emp_date_from2'    => $faker->date,
		'emp_date_to2'      => $faker->date,
		'emp_desc2'         => $faker->sentence,
		'emp_pos2'          => $faker->jobTitle,
		'emp_sal2'          => $faker->numberBetween(1000, 100000),
		'emp_name3'         => $faker->name,
		'emp_add3'          => $faker->address,
		'emp_date_from3'    => $faker->date,
		'emp_date_to3'      => $faker->date,
		'emp_desc3'         => $faker->sentence,
		'emp_pos3'          => $faker->jobTitle,
		'emp_sal3'          => $faker->numberBetween(1000, 100000),
		'guard_name'        => $faker->name,
		'guard_address'     => $faker->address,
		'guard_num'         => $faker->phoneNumber,
		'guard_relation'    => $faker->randomElement(['Mother', 'Father', 'Spouse', 'Brother', 'Sister']),
		'references'        => $faker->name,
		'reg_date'          => $faker->date,
		'upd_date'          => $faker->date
	];
});

$factory->define(App\Vehicle::class, function (Faker\Generator $faker) {
	return [
		'plate_num'          => $faker->ean8,
		'ltfrb_num'          => $faker->creditCardNumber,
		'ltfrb_exp'          => $faker->date,
		'dot_num'            => $faker->creditCardNumber,
		'dot_exp'            => $faker->date,
		'agree_date'         => $faker->date,
		'opr_name'           => $faker->name,
		'opr_add'            => $faker->address,
		'opr_num'            => $faker->phoneNumber,
		'opr_or_num'         => $faker->creditCardNumber,
		'opr_cr_num'         => $faker->creditCardNumber,
		'make'               => $faker->name,
		'body_type'          => $faker->name,
		'year_model'         => $faker->year,
		'chasis_num'         => $faker->isbn10,
		'engine_num'         => $faker->isbn10,
		'tpl_insure_date'    => $faker->date,
		'pam_insure_date'    => $faker->date,
		'emission_test_date' => $faker->date,
	];
});