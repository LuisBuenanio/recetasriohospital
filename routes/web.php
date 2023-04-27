<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* use App\Http\Controllers\Admin\HomeController; */



Route::get('/', function () {
    return view('admin.index');
})->middleware('auth');

/* Route::get('admin', function () {
    return view('adminlte.home');
}); */


/* Route::get('/', [HomeController::class, 'index'])-> name('inicio'); */

/* Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
 */


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


