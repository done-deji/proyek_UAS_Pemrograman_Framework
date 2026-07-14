<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
    ]);

    Pelanggan::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon,
    ]);

    return redirect()->route('pelanggan.index')
        ->with('success', 'Data pelanggan berhasil ditambahkan.');

    
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil dihapus.');
    }
}