@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>
            <i class="fa fa-plus"></i>
            Tambah Sparepart
        </h4>

    </div>

    <div class="card-body">

        <form action="{{ route('sparepart.store') }}" method="POST">

            @csrf

           <div class="mb-3">
               <label>Kode Sparepart</label>
               <input type="text"
           name="kode"
           class="form-control"
           placeholder="Contoh: SP001"
           required>
           </div>

                <label>Nama Sparepart</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Harga</label>

                <input type="number"
                       name="harga"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Stok</label>

                <input type="number"
                       name="stok"
                       class="form-control"
                       required>

            </div>

            <button class="btn btn-success">
                <i class="fa fa-save"></i> Simpan
            </button>

            <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection