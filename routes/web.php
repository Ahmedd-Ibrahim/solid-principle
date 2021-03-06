<?php

use App\Http\Controllers\SalesController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('test', [SalesController::class, 'index']);

Route::get('user-data', [SalesController::class, 'getUserData']);

Route::get('user-data-liskov', [SalesController::class, 'getUserDataLiskov']);

Route::get('segregation', [SalesController::class, 'Segregation']);
