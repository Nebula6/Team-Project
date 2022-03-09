<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;

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

Route::controller(PagesController::class)->group(function () {
    Route::get('/',                   'home');
    Route::get('about',               'about');
    Route::get('/products/{category}', 'products');
    Route::get('profile',             'profile');
    Route::get('settings',            'settings');
    Route::get('saved',               'saved');
});

Route::get('/register',             [RegisterController::class, 'create']       )->middleware('guest');
Route::post('/register',            [RegisterController::class, 'store']        )->middleware('guest');
Route::get('/verify',               [VerificationController::class, 'notice']   )->middleware('auth')->name('verification.notice');
Route::get('/verify/{id}/{hash}',   [VerificationController::class, 'verify']   )->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/login',                [LoginController::class, 'create']          )->middleware('guest')->name('login');
Route::get('/logout',               [LoginController::class, 'destroy']         )->middleware('auth')->name('logout');
Route::post('/sessions',            [LoginController::class, 'store']           )->middleware('guest')->name('session');

//Auth::routes();

//Route::get('home',     [PagesController::class, 'home']);
