<?php
//Route::get('/url', [SiteController::class, 'function']);
//A rota é definida para a URL '/url'. Quando um usuário acessa essa URL no navegador, a função 'function' do controller 'SiteController' será executada.

//O ->name() é usado para apelidar uma rota

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

//Rotas post
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

//Rotas get
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
//Rotas get dinâmicas
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

Route::get('/', function () {
    return view('welcome');
});
