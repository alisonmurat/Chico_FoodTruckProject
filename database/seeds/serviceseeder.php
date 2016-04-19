<?php

use Illuminate\Database\Seeder;

class Serviceseeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Filename and location of data in csv file
		$seedData = $this->seedFromCSV(app_path().'/../database/csv/Services.csv');

		foreach ($seedData as $row) {
			// Can manipulate the data here...
			DB::table('Services')->insert($row);
		 }
    }
}
