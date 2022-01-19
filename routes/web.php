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

// Route::prefix('admin')
// ->middleware(['auth','admin'])
// ->group(function(){

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/maps/index', [App\Http\Controllers\MapsController::class, 'index'])->name('maps');
Route::get('/maps/create', [App\Http\Controllers\MapsController::class, 'create'])->name('create-maps');
Route::post('/maps/store', [App\Http\Controllers\MapsController::class, 'store'])->name('store-maps');
Route::get('/maps/edit/{id}', [App\Http\Controllers\MapsController::class, 'edit'])->name('edit-maps');
Route::delete('/maps/destroy/{id}', [App\Http\Controllers\MapsController::class, 'destroy'])->name('destroy-maps');
Route::put('/maps/update/{id}', [App\Http\Controllers\MapsController::class, 'update'])->name('update-maps');

Route::get('/wifi/index', [App\Http\Controllers\WifiController::class, 'index'])->name('wifi');
Route::get('/wifi/create', [App\Http\Controllers\WifiController::class, 'create'])->name('create-wifi');
Route::post('/wifi/store', [App\Http\Controllers\WifiController::class, 'store'])->name('store-wifi');
Route::get('/wifi/edit/{id}', [App\Http\Controllers\WifiController::class, 'edit'])->name('edit-wifi');
Route::delete('/wifi/destroy/{id}', [App\Http\Controllers\WifiController::class, 'destroy'])->name('destroy-wifi');
Route::put('/wifi/update/{id}', [App\Http\Controllers\WifiController::class, 'update'])->name('update-wifi');

// });


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
