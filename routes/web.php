<?php

use Illuminate\Support\Facades\Route;


//?Rutas de las vistas.  

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/noticias', [App\Http\Controllers\HomeController::class, 'news']);

Route::get('/logIn', [App\Http\Controllers\HomeController::class, 'logIn']);

Route::get('/admin/dashBoard', [\App\Http\Controllers\AdminController::class, 'index']);



