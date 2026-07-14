<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Kendaraan;
use App\Models\Mekanik;
use App\Models\Sparepart;
use App\Models\BookingServis;
use App\Models\Servis;
use App\Models\Pembayaran;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalPelanggan'  => Pelanggan::count(),
            'totalKendaraan'  => Kendaraan::count(),
            'totalMekanik'    => Mekanik::count(),
            'totalSparepart'  => Sparepart::count(),
            'totalBooking'    => BookingServis::count(),
            'totalServis'     => Servis::count(),
            'totalPembayaran' => Pembayaran::count(),
        ]);
    }
}