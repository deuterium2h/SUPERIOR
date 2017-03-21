
<?php

use App\Regular;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RegularsTableSeeder extends Seeder
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
        	Regular::create([
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
        	]);
    	}
    }
}
