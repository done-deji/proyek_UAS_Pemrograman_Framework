<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('sparepart.index', compact('spareparts'));
    }

    public function create()
    {
        return view('sparepart.create');
    }

    public function store(Request $request)
    {
         $request->validate([
        'kode' => 'required|unique:spareparts,kode',
        'nama' => 'required',
        'stok' => 'required',
        'harga' => 'required',
    ]);

        Sparepart::create($request->all());

        return redirect()->route('sparepart.index')
            ->with('success', 'Data sparepart berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $sparepart = Sparepart::findOrFail($id);

        return view('sparepart.edit', compact('sparepart'));
    }

    public function update(Request $request, string $id)
    {
       Sparepart::create([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'stok' => $request->stok,
        'harga' => $request->harga,
    ]);

        $sparepart = Sparepart::findOrFail($id);

        $sparepart->update($request->all());

        return redirect()->route('sparepart.index')
            ->with('success', 'Data sparepart berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $sparepart = Sparepart::findOrFail($id);

        $sparepart->delete();

        return redirect()->route('sparepart.index')
            ->with('success', 'Data sparepart berhasil dihapus.');
    }
}