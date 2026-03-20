<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Formulario de contacto
Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');