<?php

namespace App\Http\Controllers;

use App\Repositories\RestaurantRepository;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Restaurant Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles restaurant detail.
    |
    */

    /**
     * @var RestaurantRepository
     */
    protected $restaurant;

    /**
     * RestaurantController constructor.
     *
     * @param RestaurantRepository $restaurant
     */
    public function __construct(RestaurantRepository $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    /**
     * Show restaurants.
     *
     * @return View
     */
    public function show()
    {
        $restaurant = $this->restaurant->getAll();
        $records = $restaurant->toArray()['data'];
        $columns = empty($records) ? [] : array_keys($records[0]);

        return view('Restaurant.show', compact('records', 'restaurant', 'columns'));
    }
}
