<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;


class ShopController extends Controller
{
    public function getShop(){
        if(Auth::check()){
            $Mywish = Wishlist::select('sku')->where('userId', Auth::user()->id)->get();
            foreach ($Mywish as $sku) {
                $WishProd = Product::where('sku', $sku)->get();
            }

        }
        $prod = Product::inRandomOrder()->paginate(9);
        $dolce = Product::where('manufacturer', 'Dolce')->count();
        $nike = Product::where('manufacturer', 'Nike')->count();
        $gucci = Product::where('manufacturer', 'Gucci')->count();
        $versace = Product::where('manufacturer', 'Versace')->count();
        $gabbana = Product::where('manufacturer', 'Gabbana')->count();
        $tenk = Product::where('price', '<' , '10000')->count();
        $twofivek = Product::whereBetween('price', ['10000', '25000'] )->count();
        $fiftyk = Product::whereBetween('price', ['25000', '50000'] )->count();
        $sevenfivek = Product::whereBetween('price', ['50000', '75000'] )->count();
        $hundk = Product::whereBetween('price', ['75000', '100000'] )->count();
        $abovehund = Product::where('price', '>', '100000')->count();
        $views = Product::orderBy('view', 'desc')->take(3)->get();
        return view('layout\shop',[
            'prod' => $prod,
            'dolce' => $dolce,
            'nike' => $nike,
            'gucci' => $gucci,
            'versace' => $versace,
            'gabbana' => $gabbana,
            'tenk' => $tenk,
            'WishProd' => $WishProd,
            'twofivek' => $twofivek,
            'fiftyk' => $fiftyk,
            'sevenfivek' => $sevenfivek,
            'hundk' => $hundk,
            'abovehund' => $abovehund,
            'views' => $views
        ]);
    }

    public function postShop(){

    }
}
