<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The dining areas that belong to the restaurant.
     */
    public function diningAreas()
    {
        return $this->belongsToMany(DiningArea::class, 'tables');
    }
}

