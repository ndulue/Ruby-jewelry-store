<?php

namespace App\Http\Controllers;

use App\Jobs\indexSearch;
use App\Jobs\indexSub;
use App\Product;
use App\Subscription;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex(){
        $featured = Product::where('label', 'Featured')->inRandomOrder()->take(5)->get();
        $new = Product::where('label','New')->inRandomOrder()->take(5)->get();
        $new_product_display = Product::orderBy('created_at')->inRandomOrder()->get();
        $sale = Product::where('label','Sale')->inRandomOrder()->take(5)->get();
        return view('layout\index',[
            'featured' => $featured,
            'new' => $new,
            'sale' => $sale,
            'new_product_display' => $new_product_display
        ]);
    }

    public function postIndex(Request $request){
        $request->validate([
            'subscribe' => 'required|email|max:255'
        ]);

        $sub = new Subscription();
        $sub->email = $request->input('subscribe');
        $sub->save();

        return redirect()->route('success.layout', with([
            'success' => 'Thank for subscribing to our new letter, you will be updated on our lastest product'
        ]));

        return[
            'subscribe.required' => 'filling in your email address',
            'subscribe.email' => 'enter email address',
            'subscribe.max:' => 'Maximum of 50 characters'
        ];
    }
}
