@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning">

        <h4>
            <i class="fa fa-edit"></i>
            Edit Pelanggan
        </h4>

    </div>

    <div class="card-body">

        <form action="{{ route('pelanggan.update',$pelanggan->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Nama</label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ $pelanggan->nama }}"
                    required>

            </div>

            <div class="mb-3">

                <label>Alamat</label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="4"
                    required>{{ $pelanggan->alamat }}</textarea>

            </div>

            <div class="mb-3">

                <label>Telepon</label>

                <input
                    type="text"
                    name="telepon"
                    class="form-control"
                    value="{{ $pelanggan->telepon }}"
                    required>

            </div>

            <button class="btn btn-warning">

                <i class="fa fa-save"></i>
                Update

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