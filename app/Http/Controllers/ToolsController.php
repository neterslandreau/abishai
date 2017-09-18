<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Config;

class ToolsController extends Controller
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
    	// $results = DB::connection('oracle')->select("select * from user_od where email='roseline.seweje@lennar.com'");
    	$results = DB::connection('mysql')->select("show tables");
    	echo '<pre>';
    	print_r($results);
    	echo '</pre>';
    	// return view('tests.test', compact('results'));
    }

    public function userAdmin()
    {
    	$users = null;
    	if (request()->method() === 'POST') {
    		$this->validate(request(), [
    			'email' => 'required',
    		]);
    		$users = User::getUser(request('email'));
    	}
    	return view('tools/user_admin', compact('users'));
    }

    public function userUpdate()
    {
    	Config::set('laravel-debugbar::config.enabled', false);
    	if (request()->method() === 'POST') {
    		// echo 'id:'.request('id');
    		$results = User::updateUser(request('id'), request('field'), request('value'));
    		if ($results) {
    			return json_encode($results);
    		}
    	}
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
