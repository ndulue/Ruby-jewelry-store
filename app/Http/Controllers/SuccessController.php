<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function getSuccess(){
        return view('layout\success');
    }
}
