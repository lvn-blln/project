<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Support\Facades\Auth;


class UserController extends Controller
{
    public function create(): View
    {
        return view('user.create');
    }



    public function store(Request $request)
    {
    
        // Register users

        try {
                           
                $user = new User();
                $user->firstname = $request->get('firstname');
                $user->lastname = $request->get('lastname');
                $user->email = $request->get('email');
                $user->password = $request->get('password');
                $user->instrument = $request->get('instrument');
                $user->interest = $request->get('interest');
        
                $user->save();
        
                 return redirect('/')->with('success', 'Registration Successful!'); 

            }
        catch (\Exception $e) {

           return redirect('/user/create')->with('fail',$e->getMessage());
        }


    }

   


    public function index(): View
    {
        // Show all users

        $user = User::all();
        return view('user.index', [
            'user' => $user
        ]);
    }



    public function show($id): View
    {
        // Show detail of single user

        $user = User::findOrFail($id);
        return view('user.show', [
            'user' => $user
        ]);
    }

    
    
    public function update($id): View
    {
        // Edit detail of single user

        $user = User::findOrFail($id);
        return view('user.update', [
            'user' => $user
        ]);
    }



    public function destroy($id)
    {
        // check if the id exists, delete if it does
        try{
            $user = User::findOrFail($id);
            $user->delete();

            return redirect('/user')->with('success', 'Deleted successfully!'); 
        }

        catch (\Exception $e) {

            return redirect('/user/create')->with('fail',$e->getMessage());
         }

    }



    public function userUpdate(Request $request){
       
             // update order status here
            $user = User::where('id',$request->id)->update([
                'lastname' => $request->lastname
            ]);

            return redirect('/user')->with('success','Update Successful');
        
    }


 //login pot
    //get email
    // $email = $request->get('email');
    // $password = $request->get('password');
    //Authenticate
    // if(Auth::attempt(['email'=> $email,'password'=> $password])) {
    //     return 'logged in'
    // } else {
    //     return 'invalid login'
    // }


}
