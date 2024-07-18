<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }



    public function registerPost(Request $request)
    {
        try {      
                $user = new User();
                $user->firstname = $request->get('firstname');
                $user->lastname = $request->get('lastname');
                $user->email = $request->get('email');
                $user->password = $request->get('password');
                $user->instrument = $request->get('instrument');
                $user->interest = $request->get('interest');
        
                $user->save();
        
                 return back()->with('success', 'Registration Successful!'); 

            }
        catch (\Exception $e) {

           return back()->with('error',$e->getMessage());
        }


    }
    


    public function login(){
        return view('auth.login');
    }



    public function loginAuth(Request $request){
       
        // Authenticate User
        try {

            // get email and password

            $email = $request->get('email');
            $password = $request->get('password');

             //Redirect after success
            if(Auth::attempt(['email'=> $email,'password'=> $password])) {
                //return 'logged in';
                return redirect()->route('dashboard');

            } else {
                return back()->with('error','Invalid credentials');
            }

        }

        catch (\Exception $e) {
            return back()->with('fail',$e->getMessage());
        }
        
    }



    public function dashboard(): View
    {
        $user = auth()->user();
        return view('user.dashboard')->with(compact('user'));
    }




}
