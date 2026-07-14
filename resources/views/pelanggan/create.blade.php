@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>
            <i class="fa fa-user-plus"></i>
            Tambah Pelanggan
        </h4>

    </div>

    <div class="card-body">

        <form action="{{ route('pelanggan.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Nama Pelanggan
                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    placeholder="Masukkan Nama"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Alamat
                </label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="4"
                    placeholder="Masukkan Alamat"
                    required></textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Nomor Telepon
                </label>

                <input
                    type="text"
                    name="telepon"
                    class="form-control"
                    placeholder="08xxxxxxxxxx"
                    required>

            </div>

            <button class="btn btn-success">

                <i class="fa fa-save"></i>
                Simpan

            </button>

            <a href="{{ route('pelanggan.index') }}"
               class="btn btn-secondary">

                <i class="fa fa-arrow-left"></i>
                Kembali

            </a>

        </form>

    </div>

</div>

@endsection