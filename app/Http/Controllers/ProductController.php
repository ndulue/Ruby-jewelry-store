<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getProduct($sku){

        $actual = Product::where('sku', $sku)->first();
        Product::where('sku', $sku)->increment('view',1);
        return view('layout.product', [
            'actual' => $actual
        ]);
    }

}
