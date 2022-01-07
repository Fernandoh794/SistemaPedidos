<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pedidos;





Route::group(['middleware'=> 'web'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.index');
    Route::get('/', function () {
        return view('auth.login');
    });
    Auth::routes();

});


// Rotas para os Usuarios
Route::get('home/create',[App\Http\Controllers\HomeController::class, 'create'])->name('user.create');
Route::post('home/create', [App\Http\Controllers\HomeController::class, 'store'])->name('user.store');
Route::delete('home/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('user.destroy');
Route::get('home/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit');
Route::put('/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('user.update');
Route::post('/home/search', [App\Http\Controllers\HomeController::class, 'search'])->name('usuario.search');

// Produtos
Route::post('/produtos/create', [\App\Http\Controllers\ProdutosController::class, 'store'])->name('produtos.store');
Route::get('/produtos/create', [\App\Http\Controllers\ProdutosController::class, 'create']);
Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'index'])->name('produtos.index');
Route::delete('produtos/delete/{id}', [App\Http\Controllers\ProdutosController::class, 'destroy'])->name('produtos.destroy');
Route::get('produtos/{id}/edit', [App\Http\Controllers\ProdutosController::class, 'edit'])->name('produtos.edit');
Route::put('/product/{id}', [App\Http\Controllers\ProdutosController::class, 'update'])->name('produtos.update');
Route::post('/produtos/search', [App\Http\Controllers\ProdutosController::class, 'search'])->name('produtos.search');


// Pedidos
Route::get('/pedidos', [\App\Http\Controllers\PedidosController::class, 'index'])->name('pedidos.index');

//User Eloquent
Route::get('/onetoone', [\App\Http\Controllers\PedidosController::class, 'umparamuitos']
);













