<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cookie;
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

Route::get('/', function () {
    return view('main/index');
})->middleware('Token_Check');

Route::get('/setting',function (){
    return view('main/setting');
})->middleware('Token_Check');

Route::get('/transaction',function (){
    return view('/main/transaction_history');
})->middleware('Token_Check');

Route::get('/login', function () {
    return view('sign/user-login');
});
Route::get('/register', function () {
    return view('sign/user-register');
});


