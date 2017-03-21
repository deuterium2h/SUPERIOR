<?php

use App\Operator;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1, 30) as $index) {
        	Operator::create([
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
    		]);
        }
    }
}
