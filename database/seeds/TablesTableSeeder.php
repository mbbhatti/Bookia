<?php

use App\DiningArea;
use App\Table;
use App\Restaurant;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::truncate();
        $dateTime = Carbon::now();

        // Green Restaurants
        $greenRestaurant = Restaurant::find(1);
        $diningAreas = DiningArea::select('id', 'name')->pluck('id', 'name')->all();

        // Has 4 tables with minimum capacity 2 and maximum capacity 4 an Indoor dining area
        for ($i = 1; $i < 5; $i++) {
            $table = [
                'name' => 'Table ' . $i,
                'minimum_capacity' => 2,
                'maximum_capacity' => 4,
                'active' => 1,
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ];

            $greenRestaurant->diningAreas()->attach([$diningAreas['Indoor']], $table);
        }

        // Has 2 tables with minimum capacity 3 and maximum capacity 5 an Indoor dining area with non active
        for ($i = 1; $i < 3; $i++) {
            $table = [
                'name' => 'Table ' . $i,
                'minimum_capacity' => 3,
                'maximum_capacity' => 5,
                'active' => 0,
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ];

            $greenRestaurant->diningAreas()->attach([$diningAreas['Indoor']], $table);
        }

        // Has 5 tables with minimum capacity 3 and maximum capacity 5 an Outdoor dining area
        for ($i = 1; $i < 6; $i++) {
            $table = [
                'name' => 'Table ' . $i,
                'minimum_capacity' => 3,
                'maximum_capacity' => 5,
                'active' => 1,
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ];

            $greenRestaurant->diningAreas()->attach([$diningAreas['Outdoor']], $table);
        }

        // Blue Restaurants
        $blueRestaurant = Restaurant::find(2);

        // Has 2 tables with minimum capacity 1 and maximum capacity 2 an Indoor dining area
        for ($i = 1; $i < 3; $i++) {
            $table = [
                'name' => 'Table ' . $i,
                'minimum_capacity' => 1,
                'maximum_capacity' => 2,
                'active' => 1,
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ];

            $blueRestaurant->diningAreas()->attach([$diningAreas['Indoor']], $table);
        }

        // Has 2 tables with minimum capacity 3 and maximum capacity 5 an Outdoor Terrace dining area
        for ($i = 1; $i < 3; $i++) {
            $table = [
                'name' => 'Table ' . $i,
                'minimum_capacity' => 3,
                'maximum_capacity' => 5,
                'active' => 1,
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ];

            $blueRestaurant->diningAreas()->attach([$diningAreas['Outdoor Terrace']], $table);
        }
    }
}

