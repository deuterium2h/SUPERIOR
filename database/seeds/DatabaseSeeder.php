<?php

use App\Driver;
use App\Regular;
use App\Vehicle;
use App\Operator;
use App\Associate;
use App\VehiclePhoto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	//Enable truncate to generate a fresh list of data
    	// Regular::truncate();
    	// Associate::truncate();
    	// Operator::truncate();
    	// Driver::truncate();
    	// VehiclePhoto::truncate();
    	// Vehicle::truncate();
		$this->call('RegularsTableSeeder');
		$this->call('AssociatesTableSeeder');
		$this->call('OperatorsTableSeeder');
		$this->call('DriversTableSeeder');
		$this->call('VehiclesTableSeeder');
    }
}
