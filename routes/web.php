<?php

use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelians.index');
Route::get('/pembelian/create', [PembelianController::class, 'create'])->name('pembelians.create');
Route::post('/pembelian', [PembelianController::class, 'store'])->name('pembelians.store');
Route::get('/pembelian/{pembelian}', [PembelianController::class, 'show'])->name('pembelians.show');
Route::get('/pembelian/{pembelian}/edit', [PembelianController::class, 'edit'])->name('pembelians.edit');
Route::put('/pembelian/{pembelian}', [PembelianController::class, 'update'])->name('pembelians.update');
Route::delete('/pembelian/{pembelian}', [PembelianController::class, 'destroy'])->name('pembelians.destroy');