<?php namespace App\Http\Controllers;

use DJB\Confer\Confer;
use Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if ( ! Auth::check())
			if ($this->loggedInAvailableUser()) {
				flash()->success('Logged you in successfully - happy testing!');
			} else {
				flash()->error('No available free user slots');
			}
		}
		return view('home');
	}

	private function loggedInAvailableUser()
	{
		$users = (new Confer)->getUsersState();
		if ($users['online']->count() < 20)
		{
			$this->logInFirstAvailableUser($users['offline']);
			return true;
		}
		return false;
	}

	private function logInFirstAvailableUser($offline_users)
	{
		//dd($offline_users->first());
		Auth::login($offline_users->first());
	}

	public function userloggedout(Request $request)
	{
		// needs to respond with a 200
	}

}
