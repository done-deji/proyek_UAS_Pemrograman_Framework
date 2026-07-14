@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data Mekanik</h3>

        <a href="{{ route('mekanik.create') }}" class="btn btn-primary">
            Tambah Mekanik
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($mekaniks as $mekanik)

        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $mekanik->nama }}</td>
            <td>{{ $mekanik->no_hp }}</td>
            <td>{{ $mekanik->alamat }}</td>
            <td>{{ $mekanik->keahlian }}</td>

            <td>

                <a href="{{ route('mekanik.edit',$mekanik->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('mekanik.destroy',$mekanik->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus?')">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="6" class="text-center">
                Belum ada data mekanik
            </td>

        </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection