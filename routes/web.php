<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalonsController;
use App\Http\Controllers\QrcodesController;
use App\Http\Controllers\DptsController;
use App\Http\Controllers\PemilihansController;
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
    return view('welcome');
});

#Home
Route::get('/home', [HomeController::class, 'index'] )->name('home.index');


Route::resource('calon', CalonsController::class);
Route::resource('qrcode', QrcodesController::class);
Route::resource('dpt', DptsController::class);
Route::resource('pemilihan', PemilihansController::class);



