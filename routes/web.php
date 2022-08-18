<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', [LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

// prevent user access another access outside level
Route::group(['middleware' => ['auth'] ] ,function(){
    Route::group(['middleware' => ['cekLogin:1']], function() {
        Route::resource('beranda', Beranda::class);
    });

    Route::group(['middleware' => ['cekLogin:2']], function() {
        Route::resource('kasir', Kasir::class);
    });
});