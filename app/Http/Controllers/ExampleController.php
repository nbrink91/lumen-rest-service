<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test($id)
    {
        $results = DB::table('test_table')->pluck('id', 'value');
        return $results;
    }
}
