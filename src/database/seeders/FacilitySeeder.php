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
                    "price" => $data[3],
                    "category" => $data[4],
                    "open_time" => $data[5],
                    "close_time" => $data[6],
                    "quota" => $data[7],
                    "department_id" => $data[8],
                    "admin_id" => $data[9],
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
