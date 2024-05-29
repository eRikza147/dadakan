<?php

use App\Http\Controllers\Prakerja\PrakerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrakerjaController::class,'index'])->name('/');
Route::get('tambah',[PrakerjaController::class, 'tambah'])->name('tambah');
Route::post('save',[PrakerjaController::class,'save'])->name('save');
Route::get('hapus.data/{id}',[PrakerjaController::class,'hapus'])->name('hapus');