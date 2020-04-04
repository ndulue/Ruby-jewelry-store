<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Wishlist;


class WishlistController extends Controller
{
    public function getWish(){
        $Mywish = Wishlist::where('userId', Auth::user()->id)->pluck('sku')->all();
        foreach ($Mywish as $wish) {
            $item = Product::where('sku', $wish)->get();
        }

        if(Auth::check()){
            return view('layout\wishlist',[
                'item' => $item
            ]);
        }else{
            return redirect()->back();
        }
    }

    public function postWish($sku){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $wishlist = new Wishlist();
            $wishlist->userId = $userId;
            $wishlist->sku = $sku;
            $wishlist->save();

            return redirect()->back();
        }else{
            return redirect()->route('loginRegister.layout');
        }
    }

    public function deleteWish($sku){
        if (Auth::check()) {
            $userId = Auth::user()->id;

            Wishlist::where('userId',$userId)->where('sku',$sku)->delete();

            return redirect()->back();
        }else{
            return redirect()->route('loginRegister.layout');
        }
    }
}
