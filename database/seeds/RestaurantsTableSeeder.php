<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Restaurant::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $restaurants = ['Green Restaurant', 'Blue Restaurant'];
        foreach ($restaurants as $restaurant) {
            $restaurantObject = new Restaurant();
            $restaurantObject->name = $restaurant;
            $restaurantObject->save();
        }
    }
}

