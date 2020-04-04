<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'IndexController@getIndex',
    'as' => 'index.layout'
]);

Route::post('/', [
    'uses' => 'IndexController@postIndex',
    'as' => 'index.inputs'
]);

Route::get('/shop', [
    'uses' => 'ShopController@getShop',
    'as' => 'shop.layout'
]);

Route::get('/wishlist', [
    'uses' => 'WishlistController@getWish',
    'as' => 'wishlist.layout'
]);

Route::post('/wishlist', [
    'uses' => 'WishlistController@postWish',
    'as' => 'wishlist.add'
]);

Route::delete('/wishlist', [
    'uses' => 'WishlistController@deleteWish',
    'as' => 'wishlist.delete'
]);

Route::get('/shop/price/min={min}&max={max}', [
    'uses' => 'ShopPriceController@getPrice',
    'as' => 'shopPrice.layout'
]);

Route::get('/shop/manufacturer={manufacturerer}', [
    'uses' => 'ShopManufacturerController@getLayout',
    'as' => 'shopManufacturer.layout'
]);

Route::any('/search', [
    'uses' => 'SearchController@getSearch',
    'as' => 'search.result'
]);

Route::get('/product/sku={sku}', [
    'uses' => 'ProductController@getProduct',
    'as' => 'product.layout'
]);

Route::get('/login-register', [
    'uses' => 'LoginRegisterController@getDetails',
    'as' => 'loginRegister.layout'
]);

Route::post('/login-register', [
    'uses' => 'LoginRegisterController@handleDetails',
    'as' => 'loginRegister.details'
]);

Route::get('/contact',[
    'uses' => 'ContactController@getContact',
    'as' => 'contact.layout'
]);

Route::post('/contact',[
    'uses' => 'ContactController@storeContact',
    'as' => 'contact.store'
]);

Route::get('/checkout',[
    'uses' => 'CheckoutController@getCheckout',
    'as' => 'checkout.layout'
]);

Route::get('/cart',[
    'uses' => 'CartController@getCart',
    'as' => 'cart.layout'
]);

Route::post('/cart',[
    'uses' => 'CartController@addCart',
    'as' => 'cart.add'
]);

Route::post('/cart',[
    'uses' => 'CartController@deleteCart',
    'as' => 'cart.delete'
]);

Route::get('/account',[
    'uses' => 'AccountController@showAccount',
    'as' => 'account.layout'
]);

Route::get('/account/logout',[
    'uses' => 'AccountController@logout',
    'as' => 'account.logout'
]);

Route::post('/account',[
    'uses' => 'AccountController@getAccount',
    'as' => 'account.details'
]);

Route::get('/404',[
    'uses' => 'ErrorController@getError',
    'as' => '404.layout'
]);

Route::get('/success',[
    'uses' => 'SuccessController@getSuccess',
    'as' => 'success.layout'
]);


