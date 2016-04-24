<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Location;
use Log;

class LocationController extends Controller
{
	/**
     * Show a list of all of the application's Location.
     *
     * @return Response
     */

    public function location()
    {
    	
         $location = DB::table('Location')->get();
         return view('location', ['location' => $location]);

    }
}