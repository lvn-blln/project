<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // register view
    public function register(){
       
        return view('auth.register');
    }

    //registration action
    public function registerPost(Request $request)
    {
        try {    
            
            //validate  
            $request->validate([
                'firstname' => ['required', 'string'],
                'lastname' => ['required', 'string'],
                'email' => ['required', 'string', 'unique:users,email'],
                'password' => ['required', 'string', 'min:6'],
                'confirm_password' => ['min:6', 'required_with:password', 'same:password'],
                'instrument'=>['required', 'string'],
                'interest' => ['required_without_all'],
                'resume' => ['required', 'image', 'mimes:png', 'max:2048']
            ]);

            $payload = $request->only('firstname', 'lastname', 'email', 'password', 'instrument', 'interest', 'resume');
            $payload['resume'] = $request->file('resume')->store('img');

            //OTP
            $min = (int) str_pad('1', 6, '0', STR_PAD_RIGHT);
            $max = (int) str_pad('', 6, '9', STR_PAD_RIGHT);

            $otp = random_int($min, $max);
            $payload['otp'] = $otp;
            $payload['is_verified'] = 0;

            User::create($payload);

            return redirect()->route('login')->with('success','Registration Successful!');
        } catch (\Exception $e) {
           return back()->with('error',$e->getMessage());
        }
    }
    
    // login view
    public function login(){
        return view('auth.login');
    }

    // login authentication
    public function loginAuth(Request $request){
       
        // Authenticate User
        try {

             $email = $request->get('email');
            $password = $request->get('password');

            if(Auth::attempt(['email'=> $email,'password'=> $password])) {

                return redirect()->route('dashboard');

            } else {
                return back()->with('error','Invalid credentials');
            }

        } catch (\Exception $e) {
            return back()->with('fail',$e->getMessage());
        }
        
    }
}
