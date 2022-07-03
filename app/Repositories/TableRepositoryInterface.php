<?php

namespace App\Repositories;

interface TableRepositoryInterface
{
    /**
     * Get tables
     *
     * @param int $id
     * @return object
     */
    public function getAllByRestaurantId(int $id): object;

    /**
     * Get active tables.
     *
     * @param int $id
     * @return object
     */
    public function getActiveListByRestaurantId(int $id): object;
}

