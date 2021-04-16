<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Offers;

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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/offerList', [App\Http\Controllers\Offers::class, 'offerList'])->name('offerList');
Route::get('/createOffer', [App\Http\Controllers\Offers::class, 'createOffer'])->name('createOffer');
Route::post('/createOffer', [App\Http\Controllers\Offers::class, 'createOffer'])->name('createOffer');