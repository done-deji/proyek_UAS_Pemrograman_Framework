@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4>Edit Booking Servis</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('booking-servis.update', $booking->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Pelanggan</label>

                <select name="pelanggan_id" class="form-control" required>

                    @foreach($pelanggans as $pelanggan)

                        <option value="{{ $pelanggan->id }}"
                            {{ $booking->pelanggan_id == $pelanggan->id ? 'selected' : '' }}>

                            {{ $pelanggan->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">
                <label>Kendaraan</label>

                <select name="kendaraan_id" class="form-control" required>

                    @foreach($kendaraans as $kendaraan)

                        <option value="{{ $kendaraan->id }}"
                            {{ $booking->kendaraan_id == $kendaraan->id ? 'selected' : '' }}>

                            {{ $kendaraan->merk }} - {{ $kendaraan->plat_nomor }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">
                <label>Tanggal Booking</label>

                <input
                    type="date"
                    name="tanggal_booking"
                    class="form-control"
                    value="{{ $booking->tanggal_booking }}"
                    required>

            </div>

            <div class="mb-3">
                <label>Keluhan</label>

                <textarea
                    name="keluhan"
                    class="form-control"
                    rows="4"
                    required>{{ $booking->keluhan }}</textarea>

            </div>

            <div class="mb-3">
                <label>Status</label>

                <select name="status" class="form-control">

                    <option value="Menunggu" {{ $booking->status=='Menunggu' ? 'selected' : '' }}>
                        Menunggu
                    </option>

                    <option value="Diproses" {{ $booking->status=='Diproses' ? 'selected' : '' }}>
                        Diproses
                    </option>

                    <option value="Selesai" {{ $booking->status=='Selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>

                    <option value="Batal" {{ $booking->status=='Batal' ? 'selected' : '' }}>
                        Batal
                    </option>

                </select>

            </div>

            <button class="btn btn-warning">
                Update
            </button>

            <a href="{{ route('booking-servis.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection