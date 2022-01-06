<?php

use Illuminate\Support\Facades\Route;





Route::group(['middleware'=> 'web'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.index');
    Route::get('/', function () {
        return view('auth.login');
    });
    Auth::routes();

});

Route::get('home/create',[App\Http\Controllers\HomeController::class, 'create'])->name('user.create');
Route::post('home/create', [App\Http\Controllers\HomeController::class, 'store'])->name('user.store');
Route::delete('home/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('user.destroy');
Route::get('home/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit');
Route::put('/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('user.update');






