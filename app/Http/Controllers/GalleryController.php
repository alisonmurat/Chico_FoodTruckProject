<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Gallery;
use Log;

class GalleryController extends Controller
{
	/**
     * Show a list of all of the application's Gallery.
     *
     * @return Response
     */

    public function gallery()
    {
    	
         $gallery = DB::table('Gallery')->get();
         return view('gallery', ['gallery' => $gallery]);

    }
}
