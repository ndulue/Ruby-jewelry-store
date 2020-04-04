<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class CartController extends Controller
{
    public function getCart(){
        if(Auth::check()){
            $items = Cart::getContent(Auth::user()->id);
            return view('layout\cart',[
                'items' => $items
            ]);
        }else{
            return redirect()->back();
        }

    }

    public function postCart($id){
        if(Auth::check()){
            $Pid = Product::where('id',$id)->first();
            $userId = Auth::user()->id;

            Cart::session($userId)->add(array(
                'id' => $Pid->id,
                'name' => $Pid->name,
                'price' => $Pid->price,
                'quantity' => 1,
                'associatedModel' => $Pid
            ));
        }else{
            return redirect()->route('loginRegister.layout')->with('query', 'Your are required to login');
        }
    }

    public function deleteCart($id){
        if(Auth::check()){
            $userId = Auth::user()->id;

            Cart::session($userId)->remove($id);
        }else{
            return redirect()->route('loginRegister.layout')->with('query', 'Your are required to login');
        }
    }
}
