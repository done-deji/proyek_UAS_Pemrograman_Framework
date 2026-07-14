@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between">

        <h4>Data Pembayaran</h4>

        <a href="{{ route('pembayaran.create') }}" class="btn btn-light">
            Tambah Pembayaran
        </a>

    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Bayar</th>
                    <th>Total</th>
                    <th>Metode</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($pembayarans as $pembayaran)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $pembayaran->servis->bookingServis->pelanggan->nama }}</td>

                <td>{{ $pembayaran->tanggal_bayar }}</td>

                <td>
                    Rp {{ number_format($pembayaran->total_bayar,0,',','.') }}
                </td>

                <td>{{ $pembayaran->metode }}</td>

                <td>

                    <a href="{{ route('pembayaran.edit',$pembayaran->id) }}"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ route('pembayaran.destroy',$pembayaran->id) }}"
                          method="POST"
                          style="display:inline">

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

                <td colspan="6" class="text-center">

                    Belum ada data pembayaran

                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection