<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\FeedBackRepository;

class FeedbackController extends Controller
{
    private $feedbackRepository;

    public function __construct() { 
        $this->feedbackRepository = new FeedbackRepository();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbackRepository=  $this->feedbackRepository->getList();
        return view('admin.elements.feedback.index', compact('feedbackRepository'));
    }
    
}
