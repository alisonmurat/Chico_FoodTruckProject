<?php

use Illuminate\Database\Seeder;

class Locationseeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Filename and location of data in csv file
		$seedData = $this->seedFromCSV(app_path().'/../database/csv/Location.csv');

		foreach ($seedData as $row) {
			// Can manipulate the data here...
			DB::table('Location')->insert($row);
		 }
    }
}
