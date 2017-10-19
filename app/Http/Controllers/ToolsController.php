<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Config;
use GuzzleHttp\Client;

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

    public function homesiteAdmin()
    {
    	// CTE crmdomain: https://secure-ausomxjja.crmondemand.com
    	// Staging crmdomain: https://secure-ausomxfga.crmondemand.com
    	$client = new Client();
    	if (request()->method() === 'POST') {
    		dd(request()->all());
    	}
    	if (request()->method() === 'GET') {
    		// dd(request()->all());
    		
    	}
    	// $sso = '%246%24Jku8S%2fbSeXTEX2b3RuKQwx6nluc0ON5FFvdVNstH61u%2fKWIkI%3d%3b%246%24nvRl9%2fARnfTG6%2fAhiblplC1vcIIzwF%2bCwaB8oa8BBpPoN7WXAD%2fEisTAGreC9S0hWC8Z7tgsbYE738m%2f0mwbYjvv9Jaw%3d%3d';
    	// $crmdomain = 'https://secure-ausomxjja.crmondemand.com';
    	// $oracle_proxy='http://omcs-proxy.oracleoutsourcing.com';
    	// $page = "/Services/Integration?command=ssologin&odSsoToken=".$sso;
    	// $url = $crmdomain . "/Services/Integration?command=ssologin&odSsoToken=".$sso;
    	// $data = $client->request('GET', $url, [
    	// 	'proxy' => $oracle_proxy,
    	// 	'headers' => ["GET ".$page." HTTP/1.1"]
    	// ]);
    	// dd($data);
    	// dd(urldecode($sso));
    	return view('tools/homesite_admin', request()->all());
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
