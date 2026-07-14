@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-success text-white">
        <h4>Tambah Booking Servis</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('booking-servis.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label>Pelanggan</label>

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

                <label>Kendaraan</label>

                <select name="kendaraan_id" class="form-control" required>

                    <option value="">-- Pilih Kendaraan --</option>

                    @foreach($kendaraans as $kendaraan)

                        <option value="{{ $kendaraan->id }}">
                            {{ $kendaraan->merk }} - {{ $kendaraan->plat_nomor }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Tanggal Booking</label>

                <input type="date"
                       name="tanggal_booking"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Keluhan</label>

                <textarea name="keluhan"
                          class="form-control"
                          rows="4"
                          required></textarea>

            </div>

            <button class="btn btn-success">
                Simpan
            </button>

            <a href="{{ route('booking-servis.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection