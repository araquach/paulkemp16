<?php namespace App\Http\Controllers;
use App\Feedback;
use App\FeedbackClient;
use App\Blog;
use App\BlogPara;

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
		$feedbacks = Feedback::where('publish', '=', '1')->orderByRaw("RAND()")->get();
		
		$blogs = Blog::take(4)->where('publish', 2)->orWhere('publish', 3)
			->with('paras')->orderBy('created_at', 'desc')->get();
	
		return view('pages.home', compact('feedbacks', 'blogs'));
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
	
	public function booking()
	{
		return view('pages.booking');
	}
	
	public function kebelo()
	{
		return view('pages.kebelo');
	}	
	
	public function team()
	{
		return view('pages.team');
	}
	
	public function newstaff()
	{
		return view('pages.new_staff');
	}
	
	public function leaver()
	{
		return view('pages.leaver');
	}
	
	public function ashley()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Ashley Tennant')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
			
			return view('pages.team.ashley', compact('feedbacks'));
	}
	
	public function kel()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Kellie Reedy')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.kel', compact('feedbacks'));
	}
	
	public function kate()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Kate O\'Halleran')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.kate', compact('feedbacks'));
	}
	
	public function izzy()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Izzy Lamb')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.izzy', compact('feedbacks'));
	}
	
	public function leon()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Leon Pritchard')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.leon', compact('feedbacks'));
	}
	
	public function jo()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Jo Birchall')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.jo', compact('feedbacks'));
	}
	
	public function michelle()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Michelle Railton')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.michelle', compact('feedbacks'));
	}
	
	public function tash()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Natasha Bailey')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.tash', compact('feedbacks'));
	}
	
	public function louise()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Louise Bailey')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.louise', compact('feedbacks'));
	}

}
