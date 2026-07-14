<?php

namespace App\Http\Controllers;

use App\Models\BookingServis;
use App\Models\Pelanggan;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class BookingServisController extends Controller
{
    public function index()
    {
        $bookings = BookingServis::with(['pelanggan','kendaraan'])->get();

        return view('booking-servis.index', compact('bookings'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        $kendaraans = Kendaraan::all();

        return view('booking-servis.create', compact('pelanggans','kendaraans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'kendaraan_id' => 'required',
            'tanggal_booking' => 'required',
            'keluhan' => 'required',
        ]);

        BookingServis::create([
            'pelanggan_id' => $request->pelanggan_id,
            'kendaraan_id' => $request->kendaraan_id,
            'tanggal_booking' => $request->tanggal_booking,
            'keluhan' => $request->keluhan,
            'status' => 'Menunggu',
        ]);

        return redirect()->route('booking-servis.index')
            ->with('success','Booking berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $booking = BookingServis::findOrFail($id);

        $pelanggans = Pelanggan::all();
        $kendaraans = Kendaraan::all();

        return view('booking-servis.edit', compact(
            'booking',
            'pelanggans',
            'kendaraans'
        ));
    }

    public function update(Request $request, string $id)
    {
        $booking = BookingServis::findOrFail($id);

        $booking->update($request->all());

        return redirect()->route('booking-servis.index')
            ->with('success','Booking berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        BookingServis::findOrFail($id)->delete();

        return redirect()->route('booking-servis.index')
            ->with('success','Booking berhasil dihapus.');
    }
}