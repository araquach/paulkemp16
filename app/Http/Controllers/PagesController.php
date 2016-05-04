<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This page renders the main pages of the site
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home');
	}
	
	public function details()
	{
		return view('pages.details');
	}
	
	public function news()
	{
		return view('pages.news');
	}
	
	public function oldnews()
	{
		return view('pages.oldnews');
	}
	
	public function offers()
	{
		return view('pages.offers');
	}
	
	public function men()
	{
		return view('pages.men');
	}
	
	public function prices()
	{
		return view('pages.prices_stylist');
	}
	
	public function apprenticePrices()
	{
		return view('pages.prices_apprentice');
	}
	
	public function recruitment()
	{
		return view('pages.recruitment');
	}
	
	public function salon()
	{
		return view('pages.salon');
	}
	
	public function kebelo()
	{
		return view('pages.kebelo');
	}	
	
	public function team()
	{
		return view('pages.team');
	}
	
	public function ashley()
	{
		return view('pages.team.ashley');
	}
	
	public function kel()
	{
		return view('pages.team.kel');
	}
	
	public function kate()
	{
		return view('pages.team.kate');
	}
	
	public function izzy()
	{
		return view('pages.team.izzy');
	}
	
	public function leon()
	{
		return view('pages.team.leon');
	}
	
	public function jo()
	{
		return view('pages.team.jo');
	}
	
	public function caleb()
	{
		return view('pages.team.caleb');
	}
	
	public function shell()
	{
		return view('pages.team.shell');
	}
	
	public function tash()
	{
		return view('pages.team.tash');
	}

}
