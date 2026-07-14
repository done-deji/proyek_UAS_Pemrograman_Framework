@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between">

        <h4>Data Servis</h4>

        <a href="{{ route('servis.create') }}" class="btn btn-light">
            Tambah Servis
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
                    <th>Booking</th>
                    <th>Mekanik</th>
                    <th>Tanggal</th>
                    <th>Biaya Jasa</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($servis as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>
                    {{ $item->bookingServis->pelanggan->nama }}
                </td>

                <td>
                    {{ $item->mekanik->nama }}
                </td>

                <td>
                    {{ $item->tanggal_servis }}
                </td>

                <td>
                    Rp {{ number_format($item->biaya_jasa,0,',','.') }}
                </td>

                <td>

                    <a href="{{ route('servis.edit',$item->id) }}"
                        class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ route('servis.destroy',$item->id) }}"
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

                    Belum ada data servis

                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection