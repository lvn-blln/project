<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // dashboard 
    public function dashboard()
    {
        $user = auth()->user();
        return view('account.dashboard')->with(compact('user'));
    }
    
    // logout
    public function logout()
    {
        $user = Auth::logout();

        return redirect()->route('login');
    }
}
