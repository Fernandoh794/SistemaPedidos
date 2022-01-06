<?php

use Illuminate\Support\Facades\Route;





Route::group(['middleware'=> 'web'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/', function () {
        return view('auth.login');
    });
    Auth::routes();

});




