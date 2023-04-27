<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Commerciale\ActionController;
use App\Http\Controllers\Commerciale\ContactController;
use App\Http\Controllers\Commerciale\CommercialeController;

Route::get('/commerciale', [CommercialeController::class, 'index'])->name('commerciale.index');

Route::get('/commerciale/contact/index', [ContactController::class, 'index'])->name('commerciale.contact.index');


Route::post('/commerciale/contact/store', [ContactController::class,'store'])->name('commerciale.contact.store');

Route::get('/commerciale/contact/{id}', [ContactController::class,'show'])->name('commerciale.contact.show');

Route::post('commerciale/contact/action', [ActionController::class,'store'])->name('commerciale.action.store');