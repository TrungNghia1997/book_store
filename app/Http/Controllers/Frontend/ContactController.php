<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Http\Requests\Frontend\FeedbackRequest;
use Mail;
use App\Mail\Email;

class ContactController extends Controller
{
    
    private $feedback;

    public function __construct() { 
        $this->feedback = new Feedback();
    }
    
    public function index(){    	
       	return view('users.elements.contact');
    }

    public function sendmail(FeedbackRequest $request){    	
       
        $data = $request->only('email','name','subject','message');
        $feedback = $this->feedback->create($data);
        if($feedback){
            Mail::to($data['email'])->send(new Email($data));
        }
        else{
            return redirect()->back()->with('alert', 'Không gửi được phản hồi!');
        }
        return redirect()->back()->with('alert', 'successfully!');

    }
}
