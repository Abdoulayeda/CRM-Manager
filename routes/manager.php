<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\ManagerController;

Route::get('/manager', [ManagerController::class, 'index'])->name('manager.index');