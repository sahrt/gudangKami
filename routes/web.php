<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;

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
    return view('landing-page');
})->name('beranda');

Route::get('/lowongan', [LowonganController::class,  'index'])->name('view-lowongan');
Route::get('/lowongan/detile/{id}', [LowonganController::class,  'detile']);
