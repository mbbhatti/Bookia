<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiningArea extends Model
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
     * The restaurants that belong to the dining area.
     */
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'tables');
    }
}

