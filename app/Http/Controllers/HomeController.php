<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use Carbon\Carbon;
use App\CrimeTime;
use App\Bank;
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
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user()->jailtime <= Carbon::now()) {
			$user = Auth::user();
			$name = $user->name;
			$money = $user->money;
			$exp = $user->exp;
			$rank = $user->rank;
			$health = $user->health;
			$points = $user->points;
			$location = $user->location;
			$onlineUsers = User::orderBy('updated_at', 'DESC')->take(5)->get();

			if($exp <= 51){
				$user->rank = "Tramp";
			}elseif ($exp <= 151) {
				$user->rank = "Pikey";
			} elseif ($exp <= 301) {
				$user->rank = "Goon";
			} elseif ($exp <= 801) {
				$user->rank = "Thug";
			} elseif ($exp <= 2501) {
				$user->rank = "Gangster";
			} elseif ($exp <= 5501) {
				$user->rank = "Terrorist";
			} elseif ($exp <= 9001) {
				$user->rank = "Gang Leader";
			} elseif ($exp <= 16001) {
				$user->rank = "Hustler";
			} elseif ($exp <= 25001) {
				$user->rank = "Capo";
			} elseif ($exp <= 36001) {
				$user->rank = "Under Boss";
			} elseif ($exp <= 50001) {
				$user->rank = "Boss";
			} elseif ($exp <= 75001) {
				$user->rank = "Warlord";
			} elseif ($exp <= 110001) {
				$user->rank = "Godfather";
			} elseif ($exp <= 150001) {
				$user->rank = "God of War";
			} elseif ($exp <= 300001) {
				$user->rank = "Emperor";
			} elseif ($exp <= 300000000000000){
				$user->rank = "Sovereign";
			}
			$user->save();

			if ($user->sitestate == 1) {
				return "your account was banned from the site";
			} else if ($user->sitestate == 2) {
				return "your account was killed! Sign up again";
			} else {
				return view('home', compact('name', 'money', 'exp', 'rank', 'health', 'points', 'onlineUsers', 'location'));
			}
		}
		else
		{
			session()->flash('flash_message_important', 'You are currently jailed!');
			return redirect('/jail');
		}
	}

}
