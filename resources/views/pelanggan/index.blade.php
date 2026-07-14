@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            <i class="fa fa-users"></i> Data Pelanggan
        </h4>

        <a href="{{ route('pelanggan.create') }}" class="btn btn-light">
            <i class="fa fa-plus"></i> Tambah Pelanggan
        </a>

    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

                <tr>
                    <th width="60">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th width="180">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @forelse($pelanggans as $pelanggan)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $pelanggan->nama }}</td>

                    <td>{{ $pelanggan->alamat }}</td>

                    <td>{{ $pelanggan->telepon }}</td>

                    <td>

                        <a href="{{ route('pelanggan.edit',$pelanggan->id) }}"
                           class="btn btn-warning btn-sm">

                            <i class="fa fa-edit"></i>

                        </a>

                        <form action="{{ route('pelanggan.destroy',$pelanggan->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin ingin menghapus data ini?')"
                                class="btn btn-danger btn-sm">

                                <i class="fa fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center">

                        Belum ada data pelanggan

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection