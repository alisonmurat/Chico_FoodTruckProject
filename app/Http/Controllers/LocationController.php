<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Location;
use Log;

class LocationController extends Controller
{
    public function location()
    {
    	
         $location = Location::where('location', 'hours')->first();
         return view('location', $location);

    }
}