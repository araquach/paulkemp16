<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\FeedbackClient;
use App\Http\Requests\FeedbackFormRequest;
use Mail;

class FeedbackController extends Controller
{
    
    public function __construct(Feedback $feedback)
	{
		$this->feedback = $feedback;
	}

	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FeedbackClient $client)
    {
        return view('feedback.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackFormRequest $request)
    {
        $input = $request->all();
        
		Feedback::create($input);
		
		$recipient = Feedback::with('client')->orderBy('id', 'DESC')->first();
		
		$recipient = $recipient->client->toArray();
		
		// dd($recipient);
		
		Mail::send('sms.feedback', $recipient, function($message) use ($recipient)
   		{
       		$message->from('adam@jakatasalon.co.uk');
       		
       		$message->subject('PaulKempHair');

       		$message->to($recipient['mobile'] . '.2187@smsid.textapp.net');
       		// $message->to('adam@jakatasalon.co.uk');
   		});
	    
	    return redirect()->back()->with('message', 'Thank you for your feedback, it\'s really appreciated. Your voucher is on it\'s way plus you have been entered into our next prize draw for the chance to win some great prizes. See you in the salon soon!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
