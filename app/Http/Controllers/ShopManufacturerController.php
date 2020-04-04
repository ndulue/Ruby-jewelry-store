<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ShopManufacturerController extends Controller
{
    public function getLayout($manufacturer){
        $maker = Product::where('manufacturer', $manufacturer)->inRandomOrder()->paginate(9);
        return view('layout.shopManufacturer',[
            'maker' => $maker
        ]);
    }

}
