<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TraceController;
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


// Routing Login & register
Route::get('/login', [UserController::class,  'login'])->name('login');
Route::post('/process-login', [UserController::class,  'processLogin'])->name('process-login');

Route::get('/logout', [UserController::class,  'logout'])->name('logout');

Route::get('/registration', [UserController::class,  'registration'])->name('register');
Route::post('/process-registration', [UserController::class,  'processRegistration'])->name('process-register');
// end Routing Login & register


// routing lowongan
Route::get('/lowongan', [LowonganController::class,  'index'])->name('view-lowongan');
Route::get('/lowongan/detile/{id}', [LowonganController::class,  'detile']);
// end routing lowongan
