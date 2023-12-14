<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/socios', [SocioController::class, 'index'])->name('socios.index');
    Route::get('/socios/create', [SocioController::class, 'create'])->name('socios.create');
    Route::post('/socios', [SocioController::class, 'store'])->name('socios.store');
    Route::get('/socios/{socio}', [SocioController::class, 'show'])->name('socios.show');
    Route::get('/socios/{socio}/edit', [SocioController::class, 'edit'])->name('socios.edit');
    Route::put('/socios/{socio}', [SocioController::class, 'update'])->name('socios.update');
    Route::delete('/socios/{socio}', [SocioController::class, 'destroy'])->name('socios.destroy');
});

require __DIR__.'/auth.php';