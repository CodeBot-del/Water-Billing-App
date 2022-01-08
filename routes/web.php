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
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/{id}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/{id}/delete', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');


