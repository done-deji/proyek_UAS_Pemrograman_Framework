@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data Kendaraan</h3>

        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">
            Tambah Kendaraan
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
                <th>Pemilik</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Plat Nomor</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            @forelse($kendaraans as $kendaraan)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $kendaraan->pelanggan->nama }}</td>

                <td>{{ $kendaraan->merk }}</td>

                <td>{{ $kendaraan->tipe }}</td>

                <td>{{ $kendaraan->plat_nomor }}</td>

                <td>{{ $kendaraan->tahun }}</td>

                <td>

                    <a href="{{ route('kendaraan.edit',$kendaraan->id) }}"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('kendaraan.destroy',$kendaraan->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin?')">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="7" class="text-center">
                    Belum ada data kendaraan
                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection