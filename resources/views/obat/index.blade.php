@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #FFF8E1;
        padding-top: 0px; /* Berikan jarak untuk memastikan navbar tidak tertutup */
    }

    .btn-card {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        border: none;
        background-color: #FFD54F;
        color: #5D4037;
        font-weight: bold;
        height: 100%;
        padding: 20px;
        text-align: center;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .btn-card:hover {
        background-color: #FFC107;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .card-obat {
        border-radius: 15px;
        border: none;
        background-color: #FFF8E1;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
        padding-top: 20px;
    }

    .card-obat:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        position: relative;
        margin-bottom: 15px;
    }

    .icon-obat {
        width: 60px;
        height: auto;
    }

    .card-title {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        color: #FF6F00;
    }

    .card-text {
        font-family: 'Roboto', sans-serif;
        color: #5D4037;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .btn-warning {
        background-color: #FFC107;
        border-color: #FFC107;
        font-weight: bold;
    }

    .btn-danger {
        background-color: #F4511E;
        border-color: #F4511E;
        font-weight: bold;
    }

    .card-obat::before {
        content: '';
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 30px;
        background-color: #FFB300;
        border-radius: 15px 15px 0 0;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <!-- Button Tambah Data Obat -->
        <div class="col-md-4 mb-4">
            <a href="{{ route('obat.create') }}" class="btn-card">
                + Tambah Data Obat
            </a>
        </div>

        <!-- Loop Kartu Obat -->
        @foreach ($obats as $obat)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm card-obat">
                <div class="card-header text-center">
                    <img src="{{ asset('images/medicine-icon.png') }}" alt="Obat" class="icon-obat">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $obat->nama_obat }}</h5>
                    <p class="card-text">
                        <strong>Deskripsi:</strong> {{ $obat->deskripsi }} <br>
                        <strong>Stok:</strong> {{ $obat->stok }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" style="display:inline-block;" 
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data obat ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
