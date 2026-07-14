@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4>Edit Sparepart</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('sparepart.update', $sparepart->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Kode Sparepart</label>
                <input type="text"
                       name="kode"
                       class="form-control"
                       value="{{ $sparepart->kode }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Nama Sparepart</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ $sparepart->nama }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number"
                       name="harga"
                       class="form-control"
                       value="{{ $sparepart->harga }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number"
                       name="stok"
                       class="form-control"
                       value="{{ $sparepart->stok }}"
                       required>
            </div>

            <button class="btn btn-warning">
                Update
            </button>

            <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection