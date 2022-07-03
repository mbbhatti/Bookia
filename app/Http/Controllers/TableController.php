<?php

namespace App\Http\Controllers;

use App\Repositories\TableRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TableController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Table Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles table detail.
    |
    */

    /**
     * @var TableRepository
     */
    protected $table;

    /**
     * TableController constructor.
     *
     * @param TableRepository $table
     */
    public function __construct(TableRepository $table)
    {
        $this->table = $table;
    }

    /**
     * Show tables.
     *
     * @param Request $request
     * @return View
     */
    public function showAll(Request $request)
    {
        $id = (int) $request->route('id');
        $table = $this->table->getAllByRestaurantId($id);
        $records = $table->toArray()['data'];
        $columns = empty($records) ? [] : array_keys($records[0]);

        return view('Table.show', compact('records', 'table', 'columns', 'id'));
    }

    /**
     * Show active tables.
     *
     * @param Request $request
     * @return View
     */
    public function showActive(Request $request)
    {
        $id = $request->route('id');
        $records = $this->table->getActiveListByRestaurantId($id);
        $tables = [];

        // Manage records
        foreach ($records as $record) {
            $rows = explode(',', $record->detail);
            $tables[$record->name] = [];
            foreach ($rows as $key => $row) {
                $columns = explode('|', $row);
                $tables[$record->name][$key]['name'] = $columns[0];
                $tables[$record->name][$key]['minimum_capacity'] = $columns[1];
                $tables[$record->name][$key]['maximum_capacity'] = $columns[2];
            }
        }

        return view('Table.show-active', compact('tables','id'));
    }
}
