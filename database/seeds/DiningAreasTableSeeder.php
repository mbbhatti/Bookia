<?php

use App\DiningArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiningAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DiningArea::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $diningAreas = ['Indoor', 'Outdoor', 'Outdoor Terrace'];
        foreach ($diningAreas as $diningArea) {
            $diningAreaObject = new DiningArea();
            $diningAreaObject->name = $diningArea;
            $diningAreaObject->save();
        }
    }
}

