<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\UserRepository;
use App\Http\Requests\Frontend\RegisterRequest;
use Hash;
use DB;

class RegisterController extends Controller
{
    private $userRepository;

     public function __construct() { 
        $this->userRepository = new UserRepository();
    }

    public function index()
    {
    	return view('users.elements.register');
    }

    public function postRegister(RegisterRequest $request)
    {
    	$data = $request->only('name','email', 'phone_number','password','address');    		
    	$user = $this->userRepository->addUser($data, NULL);
        return redirect('/dang_nhap');    	
    }
}
