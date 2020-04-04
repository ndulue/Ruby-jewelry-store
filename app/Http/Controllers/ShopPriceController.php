<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopPriceController extends Controller
{
    public function getPrice($min, $max){
        $prices = Product::whereBetween('price', [$min, $max])->inRandomOrder()->paginate(9);
        return view('layout\shopPrice',[
            'prices' => $prices
        ]);
    }
}
