<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage',function(){
    return view('homepage');
});

Route::post('/salva-contatto', [ContactController::class, 'save'])->name('contatti.salva');

Route::get('/response',[ContactController::class,'thankYouPage'])->name('contatti.thankYou');