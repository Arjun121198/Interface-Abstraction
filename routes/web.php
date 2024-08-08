<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImplementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/interface', [ImplementController::class, 'index'])->name('interface');

Route::get('/abstraction', [ImplementController::class, 'sendNotification'])->name('abstraction');
