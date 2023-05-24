<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
//Route::get('/contact', [SiteController::class, 'contact']);
//A rota é definida para a URL '/contact'. Quando um usuário acessa essa URL no navegador, a função 'contact' do controller 'SiteController' será executada.

Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/supports', [SupportController::class, 'index'])->name('/supports.index');

Route::get('/', function () {
    return view('welcome');
});
