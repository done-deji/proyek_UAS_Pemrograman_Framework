<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::with('pelanggan')->get();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        return view('kendaraan.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'plat_nomor' => 'required|unique:kendaraans',
            'tahun' => 'required',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $pelanggans = Pelanggan::all();

        return view('kendaraan.edit', compact('kendaraan','pelanggans'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'plat_nomor' => 'required',
            'tahun' => 'required',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil dihapus.');
    }
}