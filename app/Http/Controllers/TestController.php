<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
	/**
	 * Construct the controller to be accessible only to auth users
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function test()
    {
    	$results = DB::connection('oracle')->select("select * from user_od where email='roseline.seweje@lennar.com'");
    	// echo '<pre>';
    	// print_r($results);
    	// echo '</pre>';
    	return view('tests.test', compact('results'));
    }

    /**
     * phpinfo()
     *
     * @return output of phpinfo()
     */
    public function pi() {
    	phpinfo();
    }
}
