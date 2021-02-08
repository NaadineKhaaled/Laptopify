<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;
use App\Models\product_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::post('/store', 'App\Http\Controllers\ProductController@store');
//Route::get('/search', 'App\Http\Controllers\ProductController@show');

Route::get('/products', function () {
    return view('products');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/cart','App\Http\Controllers\ProductController@viewCart');

Route::get('/show', function() {
    $products= product::all();
    return view('laptopslayout')->with('products',$products);
});

Route::get('/productdetails', function(){
    if(Auth::check()){
        $products= product::where('model','Alienware')->get();
        return view('Product_Details')->with('products',$products);
    }
    else
        return view('auth/login');
});

Route::get('/delete/{product_id}', 'App\Http\Controllers\ProductController@destroy');

Route::post('/showSearch', 'App\Http\Controllers\ProductController@showSearch');

Route::get('/donecart/{product_id}', 'App\Http\Controllers\ProductController@storeAtDataBase');
Route::get('/productspage', function(){
    if(Auth::check()){
        return view('productspage');
    }
    else
        return view('auth/login');
});

Route::get('/getproducts/{brand}','App\Http\Controllers\ProductController@getbrands');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::redirect('/dashboard', '/');

Route::get('/getlaptop/{brand}/{model}','App\Http\Controllers\ProductController@getmodel');
Route::get('/search/{model}', 'App\Http\Controllers\ProductController@searchmodel');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
