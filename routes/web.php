<?php

use App\Http\Controllers\OnlineClassController;
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

Route::get('/zoom', [OnlineClassController::class, 'index'])->name('zoom');

Route::get('/create', [OnlineClassController::class, 'create'])->name('create');

Route::post('/zoom', [OnlineClassController::class, 'store'])->name('store');
