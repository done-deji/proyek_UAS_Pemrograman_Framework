@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            <i class="fa fa-gears"></i> Data Sparepart
        </h4>

        <a href="{{ route('sparepart.create') }}" class="btn btn-light">
            <i class="fa fa-plus"></i> Tambah Sparepart
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
                    <th>Nama Sparepart</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            @forelse($spareparts as $sparepart)

            <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{ $sparepart->nama }}</td>
                <td>Rp {{ number_format($sparepart->harga,0,',','.') }}</td>
                <td>{{ $sparepart->stok }}</td>

                <td>

                    <a href="{{ route('sparepart.edit',$sparepart->id) }}"
                       class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>

                    <form action="{{ route('sparepart.destroy',$sparepart->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">

                            <i class="fa fa-trash"></i>

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="5" class="text-center">
                    Belum ada data sparepart
                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection