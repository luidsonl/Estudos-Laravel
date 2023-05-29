<?php
//Route::get('/url', [SiteController::class, 'function']);
//A rota é definida para a URL '/url'. Quando um usuário acessa essa URL no navegador, a função 'function' do controller 'SiteController' será executada.

//O ->name() é usado para apelidar uma rota

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

//Rotas post
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::post('/login', [UserController::class, 'auth'])->name('user.auth');

//Rotas patch (atualização parcial de registros)
Route::patch('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

//Rotas delete
Route::delete('supports/{id}',[SupportController::class, 'destroy'])->name('supports.destroy');

//Rotas get
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/', [UserController::class, 'index'])->name('user.index');
//Rotas get dinâmicas
Route::get('/supports/{id}/edit',[SupportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');


