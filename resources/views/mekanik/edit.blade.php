@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4>Edit Mekanik</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('mekanik.update', $mekanik->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ $mekanik->nama }}"
                       required>
            </div>

            <div class="mb-3">
                <label>No HP</label>
                <input type="text"
                       name="no_hp"
                       class="form-control"
                       value="{{ $mekanik->no_hp }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat"
                          class="form-control"
                          rows="3">{{ $mekanik->alamat }}</textarea>
            </div>

            <div class="mb-3">
                <label>Keahlian</label>
                <input type="text"
                       name="keahlian"
                       class="form-control"
                       value="{{ $mekanik->keahlian }}"
                       required>
            </div>

            <button type="submit" class="btn btn-warning">
                Update
            </button>

            <a href="{{ route('mekanik.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection