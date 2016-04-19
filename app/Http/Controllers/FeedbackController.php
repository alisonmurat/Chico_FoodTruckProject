<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Feedback;
use Log;

class FeedbackController extends Controller
{
	/**
     * Show a list of all of the application's Items.
     *
     * @return Response
     */

    public function feedback()
    {
    	
         $feedback = DB::table('feedback')->get();
         return view('feedback', ['feedback' => $feedback]);

    }
}
