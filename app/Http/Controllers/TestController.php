<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * List tests that the user owns
     */
    public function listTests(Request $request)
    {
        /*
         * Get the newest 10 caches that have been approved
         */
        $tests = Test::where('user_id', $request->user()->id)
            ->orderBy('name', 'asc')
            ->get();
        //the compact method allows me to pass the value of the caches list to the view
        return view('tests.listing', compact('tests'));
    }

    /*
     * List the details of a specific test
     */
    public function listTest(Request $request,$testId){

        $test = Test::where('id',$testId)->where('user_id',$request->user()->id)->get();

        if($test->isEmpty()) {
            abort(404);
        }

        return view('tests.detailed', compact('test'));
    }

}
