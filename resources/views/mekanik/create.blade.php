@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Mekanik</h3>

    <form action="{{ route('mekanik.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text"
                   name="no_hp"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat"
                      class="form-control"
                      required></textarea>
        </div>

        <div class="mb-3">
            <label>Keahlian</label>

            <select name="keahlian"
                    class="form-control">

                <option value="Mesin">Mesin</option>
                <option value="Kelistrikan">Kelistrikan</option>
                <option value="Body Repair">Body Repair</option>
                <option value="AC Mobil">AC Mobil</option>

            </select>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('mekanik.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection