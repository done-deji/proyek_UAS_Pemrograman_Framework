@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-12">

        <div class="alert alert-primary shadow">
            <h3>🚗 Smart Garage Management System</h3>
            <p class="mb-0">
                Selamat datang <b>{{ Auth::user()->name }}</b>,
                semoga harimu menyenangkan.
            </p>
        </div>

    </div>

</div>

<div class="row g-4">

    <div class="col-md-3">

        <div class="card text-white bg-primary shadow">

            <div class="card-body">

                <h5>Pelanggan</h5>

                <h2>{{ $totalPelanggan }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-success shadow">

            <div class="card-body">

                <h5>Kendaraan</h5>

                <h2>{{ $totalKendaraan }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-warning shadow">

            <div class="card-body">

                <h5>Mekanik</h5>

                <h2>{{ $totalMekanik }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-danger shadow">

            <div class="card-body">

                <h5>Sparepart</h5>

                <h2>{{ $totalSparepart }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-info shadow">

            <div class="card-body">

                <h5>Booking Servis</h5>

                <h2>{{ $totalBooking }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-secondary shadow">

            <div class="card-body">

                <h5>Servis</h5>

                <h2>{{ $totalServis }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-dark shadow">

            <div class="card-body">

                <h5>Pembayaran</h5>

                <h2>{{ $totalPembayaran }}</h2>

            </div>

        </div>

    </div>

</div>

@endsection