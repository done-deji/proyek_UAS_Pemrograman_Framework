@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4>Edit Servis</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('servis.update', $servis->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Booking Servis</label>

                <select name="booking_servis_id" class="form-control" required>

                    @foreach($bookings as $booking)

                        <option value="{{ $booking->id }}"
                            {{ $servis->booking_servis_id == $booking->id ? 'selected' : '' }}>

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

                    @foreach($mekaniks as $mekanik)

                        <option value="{{ $mekanik->id }}"
                            {{ $servis->mekanik_id == $mekanik->id ? 'selected' : '' }}>

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
                    value="{{ $servis->tanggal_servis }}"
                    required>

            </div>

            <div class="mb-3">

                <label>Biaya Jasa</label>

                <input
                    type="number"
                    name="biaya_jasa"
                    class="form-control"
                    value="{{ $servis->biaya_jasa }}"
                    required>

            </div>

            <button class="btn btn-warning">
                Update
            </button>

            <a href="{{ route('servis.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection