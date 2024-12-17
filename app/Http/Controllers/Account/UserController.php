<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendEmailQueue;
use App\Models\Item;
use App\Models\User ;


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

    public function verifyUserForm(){
        return view('account.verification.form');
    }

    // resend otp
    public function ResendEmailCode(Request $request){
        try{
            $user = auth()->user();

            $min = (int) str_pad('1', 6, '0', STR_PAD_RIGHT);
            $max = (int) str_pad('', 6, '9', STR_PAD_RIGHT);

            $otp = random_int($min, $max);

            $user->otp = $otp;
            $user->save();

            $data = [
                'subject'=> 'Email Verification',
                'view'=> 'emails.email-verification',
                'email'=> auth()->user()->email,
                'otp'=> $user->otp,
                'firstname'=> $user->firstname
            ];

            //Queue
            dispatch(new SendEmailQueue($data));

            return back()->with('success','Email sent to '.$data['email']);
        } catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    // verify user
    public function verifyUserPost(Request $request){
        try{
            $user = auth()->user();
            $otp= $user->otp;
            $formOTP=$request->otp;
            if($formOTP==$otp){
                $user->is_verified = 1;
                $user->save();
                
                return redirect('account/dashboard')->with('success','You are verified!');
            }
        } catch (\Exception $e){
            return back()->with('error',$e->getMessage());
        }
        
    
    }

    //Items
    public function items(){
        return view('account.list-items');
    }

    //Chat
    public function showChat($id){

        return view('account.get-chat', [
            'userId'=>$id
        ]);
    }

    //Users
    public function showUser(){
        return view('account.list-users');
    }
}
