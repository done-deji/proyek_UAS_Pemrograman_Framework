<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Servis;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with('servis')->get();

        return view('pembayaran.index', compact('pembayarans'));
    }

    public function create()
    {
        $servis = Servis::all();

        return view('pembayaran.create', compact('servis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'servis_id' => 'required',
            'total_bayar' => 'required|numeric',
            'tanggal_bayar' => 'required',
            'metode' => 'required',
        ]);

        Pembayaran::create([
            'servis_id' => $request->servis_id,
            'total_bayar' => $request->total_bayar,
            'tanggal_bayar' => $request->tanggal_bayar,
            'metode' => $request->metode,
        ]);

        return redirect()->route('pembayaran.index')
            ->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $servis = Servis::all();

        return view('pembayaran.edit', compact('pembayaran','servis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'servis_id' => 'required',
            'total_bayar' => 'required|numeric',
            'tanggal_bayar' => 'required',
            'metode' => 'required',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update($request->all());

        return redirect()->route('pembayaran.index')
            ->with('success', 'Pembayaran berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->delete();

        return redirect()->route('pembayaran.index')
            ->with('success', 'Pembayaran berhasil dihapus.');
    }
}