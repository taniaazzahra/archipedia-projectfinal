<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;


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
    return view('landingpage');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/legenda', function () {
        return view('characteristic.legenda');
});

Route::get('/wisata', function () {
    return view('characteristic.wisata');
});

Route::get('/fauna', function () {
    return view('characteristic.fauna');
});

Route::get('/makanan', function () {
    return view('characteristic.makanan');
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');