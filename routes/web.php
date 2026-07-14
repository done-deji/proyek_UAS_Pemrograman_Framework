<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\BookingServisController;
use App\Http\Controllers\ServisController;
use App\Http\Controllers\DetailServisController;
use App\Http\Controllers\DetailSparepartController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('pelanggan', PelangganController::class);
    Route::resource('kendaraan', KendaraanController::class);
    Route::resource('mekanik', MekanikController::class);
    Route::resource('sparepart', SparepartController::class);

    Route::resource('booking-servis', BookingServisController::class);
    Route::resource('servis', ServisController::class);
    Route::resource('detail-servis', DetailServisController::class);
    Route::resource('detail-sparepart', DetailSparepartController::class);
    Route::resource('pembayaran', PembayaranController::class);

});

require __DIR__.'/auth.php';