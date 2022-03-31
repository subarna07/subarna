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
/*test*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test.index');
Route::get('/test/create', [App\Http\Controllers\TestController::class, 'create'])->name('test.create');
Route::post('/test', [App\Http\Controllers\TestController::class, 'store'])->name('test');
Route::get('/test/{id}', [App\Http\Controllers\TestController::class, 'show'])->name('test.show');
Route::get('/test/{id}/edit' , [App\Http\Controllers\TestController::class, 'edit'])->name('test.edit');
Route::put('/test/{id}/update' , [App\Http\Controllers\TestController::class, 'update'])->name('test.update');
Route::delete('/test/{id}/delete' , [App\Http\Controllers\TestController::class, 'delete'])->name('test.delete');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* route for categories*/
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::get('/category/{id}/edit' , [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}/update' , [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}/delete' , [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
