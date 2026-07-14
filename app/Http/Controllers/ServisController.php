<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\BookingServis;
use App\Models\Mekanik;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function index()
    {
        $servis = Servis::with(['bookingServis','mekanik'])->get();

        return view('servis.index', compact('servis'));
    }

    public function create()
    {
        $bookings = BookingServis::all();
        $mekaniks = Mekanik::all();

        return view('servis.create', compact('bookings','mekaniks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_servis_id' => 'required',
            'mekanik_id' => 'required',
            'tanggal_servis' => 'required',
            'biaya_jasa' => 'required|numeric',
        ]);

        Servis::create([
            'booking_servis_id' => $request->booking_servis_id,
            'mekanik_id' => $request->mekanik_id,
            'tanggal_servis' => $request->tanggal_servis,
            'biaya_jasa' => $request->biaya_jasa,
        ]);

        return redirect()->route('servis.index')
            ->with('success', 'Data servis berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $servis = Servis::findOrFail($id);

        $bookings = BookingServis::all();
        $mekaniks = Mekanik::all();

        return view('servis.edit', compact(
            'servis',
            'bookings',
            'mekaniks'
        ));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'booking_servis_id' => 'required',
            'mekanik_id' => 'required',
            'tanggal_servis' => 'required',
            'biaya_jasa' => 'required|numeric',
        ]);

        $servis = Servis::findOrFail($id);

        $servis->update($request->all());

        return redirect()->route('servis.index')
            ->with('success', 'Data servis berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $servis = Servis::findOrFail($id);

        $servis->delete();

        return redirect()->route('servis.index')
            ->with('success', 'Data servis berhasil dihapus.');
    }
}