<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Feedback;
use Log;

class FeedbackController extends Controller
{
	/**
     * Show a list of all of the application's feedback.
     *
     * @return Response
     */

    public function feedback()
    {
    	
         $feedback = DB::table('feedback')->get();
         return view('feedback', ['feedback' => $feedback]);

    }
    public function save_feedback_form(Request $request)
    {
        Log::debug($request->all());

        $data = $request->all();
        $success = Feedback::create($data);
        
        // $success = User::create(
        //     ['email' => $data['email']]
        // );
        $feedback = Feedback::where('feedback_label', 'thanks')->first();
        return view('feedback', $feedback);
    }
}
