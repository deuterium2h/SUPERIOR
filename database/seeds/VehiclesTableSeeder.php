<?php

use App\Vehicle;
use Faker\Factory;
use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
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
        	Vehicle::create([
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
    		]);
        }
    }
}
