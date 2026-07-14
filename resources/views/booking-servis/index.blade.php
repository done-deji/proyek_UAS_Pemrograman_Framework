@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between">

        <h4>Data Booking Servis</h4>

        <a href="{{ route('booking-servis.create') }}" class="btn btn-light">
            Tambah Booking
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
                    <th>Kendaraan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($bookings as $booking)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $booking->pelanggan->nama }}</td>

                <td>{{ $booking->kendaraan->merk }}</td>

                <td>{{ $booking->tanggal_booking }}</td>

                <td>{{ $booking->status }}</td>

                <td>

                    <a href="{{ route('booking-servis.edit',$booking->id) }}"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ route('booking-servis.destroy',$booking->id) }}"
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

                    Belum ada booking

                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection