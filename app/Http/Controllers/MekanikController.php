<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    public function index()
    {
        $mekaniks = Mekanik::all();
        return view('mekanik.index', compact('mekaniks'));
    }

    public function create()
    {
        return view('mekanik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'keahlian' => 'required',
        ]);

        Mekanik::create($request->all());

        return redirect()->route('mekanik.index')
            ->with('success', 'Data mekanik berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $mekanik = Mekanik::findOrFail($id);
        return view('mekanik.edit', compact('mekanik'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'keahlian' => 'required',
        ]);

        $mekanik = Mekanik::findOrFail($id);

        $mekanik->update($request->all());

        return redirect()->route('mekanik.index')
            ->with('success', 'Data mekanik berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $mekanik = Mekanik::findOrFail($id);

        $mekanik->delete();

        return redirect()->route('mekanik.index')
            ->with('success', 'Data mekanik berhasil dihapus.');
    }
}