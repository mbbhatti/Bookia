<?php

namespace App\Repositories;

interface RestaurantRepositoryInterface
{
    /**
     * Get restaurants
     *
     * @return object
     */
    public function getAll(): object;
}

