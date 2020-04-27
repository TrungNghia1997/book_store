<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use App\User;
use App\Models\PasswordReset;

class PasswordResetController extends Controller
{

    public function index(){
        return view('admin.elements.reset_pass.index');
    }

    public function create(Request $request)
    {
        
        $request->validate([
            'email' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user)
            return view('admin.elements.reset_pass.not-found');



        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => str_random(60)
             ]
        );

        if ($user && $passwordReset)
            $user->notify( new PasswordResetRequest($passwordReset->token));


        return view('admin.elements.reset_pass.success');

    }

    public function find($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();
        if (!$passwordReset)

             return view('admin.elements.reset_pass.fail_pass');
            
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();

            return view('admin.elements.reset_pass.fail_pass');
            
        }

        // dd($passwordReset);
        return view('admin.elements.reset_pass.reset', compact('passwordReset'));
    }


    public function reset(Request $request)
    {
        // dd( $request->only('password', 'confirm-password', 'email', 'token'));
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'confirm-password' => 'required',
            'token' => 'required'
        ]);

        $data= $request->only('password', 'confirm-password');
        // dd($data);

         // dd( $request->only('password', 'confirm-password', 'email', 'token'));
         $passwordReset = '';
        if ( $data['password'] ==  $data['confirm-password'] )
            $passwordReset = PasswordReset::where([
                ['token', $request->token],
                ['email', $request->email]
            ])->first();

        // dd( $passwordReset);
        if (!$passwordReset)
            return  'Mật khẩu không hợp lệ';


        $user = User::where('email', $passwordReset->email)->first();
        // dd( $user);
        if (!$user)
            return 'Chúng tôi không thể tìm thấy địa chỉ email bạn đã cung cấp.';

        $user->password = bcrypt($request->password);
        $user->save();
        $passwordReset->delete();
        $user->notify(new PasswordResetSuccess($passwordReset));
        return view('admin.elements.reset_pass.success_pass');
    }
}
