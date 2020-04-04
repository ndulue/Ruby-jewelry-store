<?php

namespace App\Http\Controllers;

use App\Jobs\LoginJob;
use App\Jobs\RegisterJob;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginRegisterController extends Controller
{
    public function getDetails(){
        return view('layout\login-register');
    }

    public function handleDetails(Request $request){

        $request->validate([
            'login_name' => 'required|string|min:3',
            'login_email' => 'required|email|max:70',
            'login_pass' => 'required|min:6',
            'login_pass2' => 'required|email|max:70'
        ]);

        if ($request->login_pass != $request->login_pass2) {
            return 'Your password are not equal, try using the same password';
        }else{
            return[
                'login_name.required' => 'Enter your full name',
                'login_email.required' => 'Enter your email address',
                'login_pass.required' => 'Enter your password',
                'login_name.string' => 'Enter your full name',
                'login_email.email' => 'Enter your email address',
                'login_name.min:' => 'Your full name should be more than 3 characters',
                'login_email.max:' => 'Your email address should not exceed 70 characters',
                'login_pass.man:' => 'Your password should be more than 6 characters',
            ];
        }

        $user = new User();
        $user->name = $request->input('login_name');
        $user->email = $request->input('login_email');
        $user->password = $request->input('login_pass');
        $user->save();

        Auth::login($user,'true');
        return redirect()->route('account.layout')->with('success', 'Your account was successfully registered');

    }




}
