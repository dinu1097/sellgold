<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/logout', function () {
    session(['user_id' => null]);
});




    Route::get('calculator', array('before' => 'authuser', function()
    {
        // dd(session('user_id'));
        if(session('user_id') != null)
        {
            return view('calculator');
        }
        else
        {
            return view('login');
        }
    }));

    Route::get('/sell-calculator', function () {
        return view('sell');
    });
    Route::post('buy','App\Http\Controllers\gold@buystoresession');
    Route::post('sell','App\Http\Controllers\gold@sell');
    Route::post('confirmbuy','App\Http\Controllers\gold@buy');
    Route::get('phone-auth', 'App\Http\Controllers\phoneauthcontroller@index');
    Route::post('register-user', 'App\Http\Controllers\phoneauthcontroller@register');







Route::get('/register', function () {
    return view('register');
});
Route::get('/check-session', function () {
    dd(\Session::get('value'));
});

Route::get('/login', function () {
    return view('login');
});

Route::get('pendingOrders','App\Http\Controllers\OrdersController@read');
Route::get('delete-pending-orders/{id}','App\Http\Controllers\OrdersController@delete');
Route::get('users','App\Http\Controllers\Users@index');
Route::get('user-info/{id}','App\Http\Controllers\Users@orders');

Route::post('login', 'App\Http\Controllers\phoneauthcontroller@login');
Route::get('store-session', 'App\Http\Controllers\phoneauthcontroller@setlogin');