@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>Tambah Servis</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('servis.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label>Booking Servis</label>

                <select name="booking_servis_id" class="form-control" required>

                    <option value="">-- Pilih Booking --</option>

                    @foreach($bookings as $booking)

                        <option value="{{ $booking->id }}">

                            {{ $booking->pelanggan->nama }}
                            -
                            {{ $booking->kendaraan->plat_nomor }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Mekanik</label>

                <select name="mekanik_id" class="form-control" required>

                    <option value="">-- Pilih Mekanik --</option>

                    @foreach($mekaniks as $mekanik)

                        <option value="{{ $mekanik->id }}">

                            {{ $mekanik->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Tanggal Servis</label>

                <input
                    type="date"
                    name="tanggal_servis"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>Biaya Jasa</label>

                <input
                    type="number"
                    name="biaya_jasa"
                    class="form-control"
                    required>

            </div>

            <button class="btn btn-success">

                Simpan

            </button>

            <a href="{{ route('servis.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection