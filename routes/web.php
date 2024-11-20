<?php

use App\Models\gaji;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gajiController;

Route::get('/', function () {
    return view('components.dashboard', ['title' => 'Dashboard']);
});
Route::get('/list', function () {
    return view('components.data-pegawai', ['title' => 'Data Pegawai']);
});
Route::get('/inputpegawai', function () {
    return view('components.input-pegawai', ['title' => 'Input Data Pegawai']);
});
Route::get('/formpinjaman', function () {
    return view('components.form-pinjaman', ['title' => 'Form Pinjaman']);
});
Route::get('/pengajuancuti', function () {
    return view('components.pengajuan-cuti', ['title' => 'Form Pengajuan Cuti']);
});
Route::get('/formcuti', function () {
    return view('components.form-cuti', ['title' => 'Form Cuti']);
});
Route::get('/formpenggajian', function () {
    return view('components.form-penggajian', ['title' => 'Form Penggajian']);
});
Route::get('/formizin', function () {
    return view('components.form-izin', ['title' => 'Form Izin']);
});

Route::post('gaji', [gajiController::class, 'store'])->name('gaji.store');
