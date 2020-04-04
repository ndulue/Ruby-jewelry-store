<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showAccount(){
        return view('layout\account');
    }

    public function getAccount(Request $request){
        $request->validate([
            'login_email' => 'required|email',
            'login_password' => 'required'
        ]);

        return [
            'login_email.required' => 'Enter your email address',
            'login_email.email' => 'Enter a valid email address',
            'login_password.required' => 'Enter your password'
        ];

        if(Auth::attempt(['email' => $request->input('login_email'), 'password' => $request->input('login_password')],$request->remember)){
            return redirect()->route('account.layout');
        }else{
            return redirect()->route('loginRegister.layout');
        }

    }

    public function logout(){

        Auth::logout();
        return redirect()->route('loginRegister.layout');
    }

}
