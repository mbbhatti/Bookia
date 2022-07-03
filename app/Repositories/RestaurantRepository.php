<?php

namespace App\Repositories;

use App\Restaurant;

class RestaurantRepository implements RestaurantRepositoryInterface
{
    /**
     * Get restaurants
     *
     * @return object
     */
    public function getAll(): object
    {
        return Restaurant::select('id', 'name')->orderBy('id', 'ASC')->paginate(env('PAGE_LIMIT'), 10);
    }
}

