<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Items;
use Log;

class ItemsController extends Controller
{
	/**
     * Show a list of all of the application's Items.
     *
     * @return Response
     */

    public function items()
    {
    	
         $items = DB::table('items')->get();
         return view('items', ['items' => $items]);

    }
}
