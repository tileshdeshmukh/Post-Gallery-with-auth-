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

Route::get('/add', [App\Http\Controllers\UserController::class, 'add']);
Route::post('/add_data', [App\Http\Controllers\UserController::class, 'add_data']);

Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/edit_data/{id}', [App\Http\Controllers\UserController::class, 'edit_data']);

Route::get('/delete/{id}', [App\Http\Controllers\UserController::class, 'delete_data']);

Route::get('/view/{id}', [App\Http\Controllers\UserController::class, 'view_data']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
