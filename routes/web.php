<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('#', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'home']);

Route::get('dashboard', [HomeController::class, 'dashboard']);

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('datalogin', [LoginController::class, 'datalogin'])->name('datalogin');

Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

