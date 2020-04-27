<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;

class LoginController extends Controller
{
    const DASHBOARD_URL = '/admin/category';
    
    public function getLogin(){    	
        if (Auth::check()) {        	
            return redirect(self::DASHBOARD_URL);           
        }
        $user =new User();
    	return view('admin.elements.login');
    }
    public function postLogin(Request $request){    	
    	$credentials = $request->only('email', 'password');
        // dd($request);    	
        if (Auth::attempt($credentials)) {
            return redirect(self::DASHBOARD_URL);        
    	}else {
            return redirect()->back()->with('alert','Wrong password or email');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/admin/login');
    }
}
