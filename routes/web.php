<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/backens/users', [App\Http\Controllers\Backends\UserController::class, 'index'])->name('user.index');
Route::get('/backens/users/create', [App\Http\Controllers\Backends\UserController::class, 'create'])->name('user.create');
Route::post('/backens/users', [App\Http\Controllers\Backends\UserController::class, 'store'])->name('user.store');
