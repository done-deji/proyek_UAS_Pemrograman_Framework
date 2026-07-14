@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>Tambah Pembayaran</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('pembayaran.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label>Servis</label>

                <select name="servis_id" class="form-control" required>

                    <option value="">-- Pilih Servis --</option>

                    @foreach($servis as $item)

                        <option value="{{ $item->id }}">

                            {{ $item->bookingServis->pelanggan->nama }}
                            -
                            {{ $item->mekanik->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Total Bayar</label>

                <input type="number"
                       name="total_bayar"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Tanggal Bayar</label>

                <input type="date"
                       name="tanggal_bayar"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Metode Pembayaran</label>

                <select name="metode" class="form-control">

                    <option value="Tunai">Tunai</option>
                    <option value="Transfer">Transfer</option>
                    <option value="QRIS">QRIS</option>

                </select>

            </div>

            <button class="btn btn-success">

                Simpan

            </button>

            <a href="{{ route('pembayaran.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection