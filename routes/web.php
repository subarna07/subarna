<?php

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

Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test.index');


Route::get('/test/create', [App\Http\Controllers\TestController::class, 'create'])->name('test.create');

Route::post('/test', [App\Http\Controllers\TestController::class, 'store'])->name('test');
