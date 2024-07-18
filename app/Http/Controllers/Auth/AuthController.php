<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
                'email' => ['required', 'string', 'unique:users,email'],
                'password' => ['required', 'string', 'min:6'],
                'confirm_password' => ['min:6', 'required_with:password', 'same:password']
            ]);
            $payload = $request->only('firstname', 'lastname', 'email', 'password', 'instrument', 'interest');
            User::create($payload);
            
            return redirect()->route('login');
            //return back()->with('success', 'Registration Successful!'); 
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

    // authenticated user 
    public function dashboard(): View
    {
        $user = auth()->user();
        return view('user.dashboard')->with(compact('user'));
    }


}
