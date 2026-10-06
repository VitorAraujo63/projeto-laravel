<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

Route::post('/produtos/criar', [ProdutoController::class, 'store'])->name('produtos.create');
Route::get('/produtos/criar', function () {
    return view('produtos.criar');
})->name('produtos.store');

Route::get("/produtos/{id}/editar", [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put("/produtos/{id}", [ProdutoController::class, 'update'])->name('produtos.update');

Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');