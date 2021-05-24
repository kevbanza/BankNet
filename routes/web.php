<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('home');
});

Route::get('/registerPage', function () {
    return view('registerPage');
});

Route::get('/loginPage', function () {
    return view('loginPage');
});

Route::get('/loginFail', function () {
    return view('loginPage');
});

Route::get('/logout','LoginController@logout');

Route::post('/register','LoginController@register');

Route::post('/login','LoginController@login');


Route::get('/account', function () {
    return view('master');
});

Route::get('/account/deposit', function () {
    return view('deposit');
});

Route::get('/account/withdraw', function () {
    return view('withdraw');
});

Route::post('/deposit','AccountController@deposit');

Route::post('/withdraw','AccountController@withdraw');