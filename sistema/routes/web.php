<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\HomeController;

//Rota inicial
Route::get('/', [HomeController::class, 'index']);

// Rotas relacionadas aos produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/produto/{produtoId}', [ProdutoController::class, 'show'])->name('produto.show');

// Rotas relacionadas às vendas
Route::get('/venda/create/{produtoId}', [VendaController::class, 'create'])->name('venda.create');
Route::get('/venda', [VendaController::class, 'index'])->name('venda.index');
Route::post('/venda/{produtoId}', [VendaController::class, 'store'])->name('venda.store');
Route::get('/venda/show/{vendaId}', [VendaController::class, 'show'])->name('venda.show');










