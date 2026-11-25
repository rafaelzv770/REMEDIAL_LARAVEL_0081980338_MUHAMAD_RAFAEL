<?php

use App\Http\Controllers\KunjunganController;
use App\Models\kunjungan;
use Illuminate\Support\Facades\Route;

Route::get('index1', function () {
    return view('index1');
});
Route::get('/index1',[KunjunganController::class, 'index1']);
Route::get('/kunjungan',[KunjunganController::class, 'index1']);
Route::get('/kunjungan/tambah',[KunjunganController::class, 'tambah']);
Route::post('/kunjungan/simpan',[KunjunganController::class, 'simpan']);
Route::post('/kunjungan/hapus/{id}',[KunjunganController::class, 'hapus']);