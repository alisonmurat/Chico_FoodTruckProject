<?php

use Illuminate\Database\Seeder;

class Items_Seeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Filename and location of data in csv file
		$seedData = $this->seedFromCSV(app_path().'/../database/csv/items.csv');

		foreach ($seedData as $row) {
			// Can manipulate the data here...
			DB::table('items')->insert($row);
		 }
    }
}
