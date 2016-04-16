<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PagesSeeder::class);
        $this->call(Items_Seeder::class);
        $this->call(galleryseeder::class);
        $this->call(serviceseeder::class);
        $this->call(Feedbackseeder::class);
    }

	protected function seedFromCSV($filename)
	{

        // Use in your seeder files
        // The first row MUST be field names
        // $seedData = $this->seedFromCSV(<some.csv>); // Filename and location of data in csv file

		if(!file_exists($filename) || !is_readable($filename))
		{
			return FALSE;
		}

		$header = NULL;
		$data = array();


		if(($handle = fopen($filename, 'r')) !== FALSE)
		{
			while(($row = fgetcsv($handle)) !== FALSE)
			{
				if(!$header) {
					$header = $row;
				} else {
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);
		}

		return $data;
	}

}
