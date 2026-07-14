@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Kendaraan</h3>

    <form action="{{ route('kendaraan.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Pemilik</label>

            <select name="pelanggan_id" class="form-control" required>

                <option value="">-- Pilih Pelanggan --</option>

                @foreach($pelanggans as $pelanggan)

                    <option value="{{ $pelanggan->id }}">
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
                   required>

        </div>

        <div class="mb-3">

            <label>Tipe</label>

            <input type="text"
                   name="tipe"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Plat Nomor</label>

            <input type="text"
                   name="plat_nomor"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Tahun</label>

            <input type="number"
                   name="tahun"
                   class="form-control"
                   required>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('kendaraan.index') }}"
            class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection