<?php

namespace App\Repositories;

use App\Table;

class TableRepository implements TableRepositoryInterface
{
    /**
     * Get tables
     *
     * @param int $id
     * @return object
     */
    public function getAllByRestaurantId(int $id): object
    {
        return Table::select(
            'name as Name',
            'minimum_capacity AS Minimum Capacity',
            'maximum_capacity AS Maximum Capacity',
            'active AS Status'
        )
            ->where('restaurant_id', $id)
            ->orderBy('id', 'DESC')
            ->paginate(env('PAGE_LIMIT'), 10);
    }

    /**
     * Get active tables.
     *
     * @param int $id
     * @return object
     */
    public function getActiveListByRestaurantId(int $id): object
    {
        return Table::select('dining_areas.name')
            ->selectRaw("GROUP_CONCAT(
                tables.name, '|', 
                tables.minimum_capacity, '|', 
                tables.maximum_capacity
            ) AS detail")
            ->join('dining_areas', 'dining_areas.id', '=','tables.dining_area_id')
            ->where('tables.restaurant_id', $id)
            ->where('tables.active', true)
            ->groupBy('dining_areas.name')
            ->orderBy('dining_areas.name', 'ASC')
            ->orderBy('tables.name', 'ASC')
            ->get();
    }
}

