<?php namespace App\Http\Controllers;

class NewsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| News Controller
	|--------------------------------------------------------------------------
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
	 * Show the news index page to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.news.index');
	}
	
	public function news1()
	{
		return view('pages.news.news1');
	}
	
	public function news2()
	{
		return view('pages.news.news2');
	}
	
	public function news3()
	{
		return view('pages.news.news3');
	}
	
	public function news4()
	{
		return view('pages.news.news4');
	}
	
	public function news5()
	{
		return view('pages.news.news5');
	}
	
	public function news6()
	{
		return view('pages.news.news6');
	}
	
	public function news7()
	{
		return view('pages.news.news7');
	}

}
