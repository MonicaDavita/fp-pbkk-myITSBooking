<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/facilities.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Facility::create([
                    "id" => $data[0],
                    "name" => $data[1],
                    "address" => $data[2],
                    "category_id" => $data[3],
                    "open_time" => $data[4],
                    "close_time" => $data[5],
                    "quota" => $data[6],
                    "department_id" => $data[7],
                    "admin_id" => $data[8],
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
