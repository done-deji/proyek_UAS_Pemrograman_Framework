@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4>
            <i class="fa fa-edit"></i> Edit Kendaraan
        </h4>
    </div>

    <div class="card-body">

        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Pemilik Kendaraan</label>

                <select name="pelanggan_id" class="form-control" required>

                    @foreach($pelanggans as $pelanggan)

                        <option value="{{ $pelanggan->id }}"
                            {{ $kendaraan->pelanggan_id == $pelanggan->id ? 'selected' : '' }}>

                            {{ $pelanggan->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">
                <label>Merk</label>

                <input type="text"
                       name="merk"
                       class="form-control"
                       value="{{ $kendaraan->merk }}"
                       required>

            </div>

            <div class="mb-3">
                <label>Tipe</label>

                <input type="text"
                       name="tipe"
                       class="form-control"
                       value="{{ $kendaraan->tipe }}"
                       required>

            </div>

            <div class="mb-3">
                <label>Plat Nomor</label>

                <input type="text"
                       name="plat_nomor"
                       class="form-control"
                       value="{{ $kendaraan->plat_nomor }}"
                       required>

            </div>

            <div class="mb-3">
                <label>Tahun</label>

                <input type="number"
                       name="tahun"
                       class="form-control"
                       value="{{ $kendaraan->tahun }}"
                       required>

            </div>

            <button class="btn btn-warning">
                <i class="fa fa-save"></i> Update
            </button>

            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>

        </form>

    </div>

</div>

@endsection