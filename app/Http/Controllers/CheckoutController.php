<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function getCheckout(){
        return view('layout\checkout');
    }

    public function postCheckout(){
        
    }
}
