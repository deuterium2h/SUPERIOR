<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $tables = [
        'regulars',
        'associates',
        'operators',
        'drivers',
        'vehicles'
    ];
    
    public function run()
    {
    	$this->clearDatabase();
        $this->seeds();
    }

    /**
     * Truncate all seeded tables in the database.
     * 
     * @return $this
     */
    private function clearDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $tableName) {
            DB::table($tableName)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    /**
     * Database Seeders.
     * 
     * @return $this 
     */
    protected function seeds()
    {
        foreach ($this->tables as $tableName) {
            $this->call(str_finish(str_replace('_', '', title_case($tableName)), 'TableSeeder'));
        }
    }
}
