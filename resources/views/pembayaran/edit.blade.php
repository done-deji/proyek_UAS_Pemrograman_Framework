@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4>Edit Pembayaran</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Servis</label>

                <select name="servis_id" class="form-control" required>

                    @foreach($servis as $item)

                        <option value="{{ $item->id }}"
                            {{ $pembayaran->servis_id == $item->id ? 'selected' : '' }}>

                            {{ $item->bookingServis->pelanggan->nama }}
                            -
                            {{ $item->mekanik->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Total Bayar</label>

                <input
                    type="number"
                    name="total_bayar"
                    class="form-control"
                    value="{{ $pembayaran->total_bayar }}"
                    required>

            </div>

            <div class="mb-3">

                <label>Tanggal Bayar</label>

                <input
                    type="date"
                    name="tanggal_bayar"
                    class="form-control"
                    value="{{ $pembayaran->tanggal_bayar }}"
                    required>

            </div>

            <div class="mb-3">

                <label>Metode Pembayaran</label>

                <select name="metode" class="form-control">

                    <option value="Tunai"
                        {{ $pembayaran->metode == 'Tunai' ? 'selected' : '' }}>
                        Tunai
                    </option>

                    <option value="Transfer"
                        {{ $pembayaran->metode == 'Transfer' ? 'selected' : '' }}>
                        Transfer
                    </option>

                    <option value="QRIS"
                        {{ $pembayaran->metode == 'QRIS' ? 'selected' : '' }}>
                        QRIS
                    </option>

                </select>

            </div>

            <button type="submit" class="btn btn-warning">
                Update
            </button>

            <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection