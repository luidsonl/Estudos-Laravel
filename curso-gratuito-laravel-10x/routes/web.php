<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/contact', [SiteController::class, 'contact']);
//A rota é definida para a URL '/contact'. Quando um usuário acessa essa URL no navegador, a função 'contact' do controller 'SiteController' será executada.

Route::get('/', function () {
    return view('welcome');
});
