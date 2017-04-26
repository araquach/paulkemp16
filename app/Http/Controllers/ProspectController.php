<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prospect;
use Illuminate\Http\Request;
use App\Http\Requests\ProspectFormRequest;
use Mail;
use Carbon\Carbon;

class ProspectController extends Controller
{
    public function __construct(Prospect $prospect)
	{
		$this->middleware('auth', ['except' => ['freeproducts', 'create', 'store', 'taster', 'tasterCreate', 'tasterStore']]);
		
		$this->prospect = $prospect;
	}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospects = $this->prospect->get();
		
		return view('prospect.index', compact('prospects'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function freeproducts()
    {
       return view('prospect.freeproducts');
    }
    
    /**
     * Show the form for creating a new prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('prospect.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProspectFormRequest $request)
    {
        $input = $request->all();
        
        Prospect::create($input);
        
        return redirect()->back()->with('message', 'Thanks for applying - you will recieve your products soon!');
    }

    /**
     * Show the form for creating a new consultation prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function taster()
    {
        return view('prospect.taster');
    }
    
    /**
     * Show the form for creating a new prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function tasterCreate()
    {
        return view('prospect.tasterCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tasterStore(ProspectFormRequest $request)
    {
        $input = $request->all();
        
        Prospect::create($input);
        
        return redirect()->back()->with('message', 'Thank You! One of our team will contact you soon!');
    }
    
    
    /**
     * Email template previews
     */
    
     public function emailFemale1()
    {
        // $prospect = Prospect::findOrFail(1);
        
        return view('emails.prospect.female.followup1');
    }
    
    public function emailFemale2()
    {
        return view('emails.prospect.female.followup2');
    }
    
    public function emailFemale3()
    {
        return view('emails.prospect.female.followup3');
    }
    
    public function emailMale1()
    {
        // $prospect = Prospect::findOrFail(1);
        
        return view('emails.prospect.male.followup1');
    }
    
    public function emailMale2()
    {
        return view('emails.prospect.male.followup2');
    }
    
    public function emailMale3()
    {
        return view('emails.prospect.male.followup3');
    }
}
