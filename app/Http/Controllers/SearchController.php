<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getSearch(Request $request){
        $request->validate([
            'find' => 'required|string|max20'
        ]);

        return[
            'find.required' => 'enter the name of the product you want to search for',
            'find.string' => 'Only alphabet and whitespaces are allowed for this field',
            'find.max:' => 'only 20 characters are allowed'
        ];

        $product = new Product;
        $result = $product::where('title', 'LIKE', '%'.$request->input('find').'%')->get();
        if(count($result) > 0){
            return view('layout\product')->withDetails($result)->withQuery($request->find);
        } else{
            return view('layout\product')->withMessage('Result not found');
        }
    }
}
