<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function test()
    {
    	$results = DB::connection('oracle')->select("select * from user_od where email='roseline.seweje@lennar.com'");
    	// echo '<pre>';
    	// print_r($results);
    	// echo '</pre>';
    	return view('tests.test', compact('results'));
    }

    public function pi() {
    	phpinfo();
    }
}
