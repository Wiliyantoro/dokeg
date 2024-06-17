<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::post('/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
Route::put('/kegiatan/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
Route::delete('/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
Route::get('/kegiatan/print/{id}', [KegiatanController::class, 'print'])->name('kegiatan.print'); // Route untuk cetak PDF