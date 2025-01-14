@extends('layouts.app')

@section('content')
<style>
    .form-container {
        background: #E9F7FF;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 600px;
        margin: 0 auto;
    }

    .form-container h1 {
        text-align: center;
        color: #5F80E5;
        margin-bottom: 20px;
    }

    .form-container label {
        font-weight: bold;
        color: #5A4E4D;
    }

    .form-container .form-control {
        border-radius: 8px;
        border: 1px solid #CCC;
        padding: 10px;
        margin-bottom: 15px;
    }

    .btn-primary {
        background-color: #5F80E5;
        border-color: #5F80E5;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #4C6FD4;
        border-color: #4C6FD4;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }

    .btn-secondary {
        background-color: #FFC1A1;
        border-color: #FFC1A1;
        color: #5A4E4D;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: #FFDAC1;
        border-color: #FFDAC1;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="form-container">
    <h1>Tambah Data Obat</h1>
    <form action="{{ route('obat.store') }}" method="POST">
        @csrf
        <label for="nama_obat">Nama Obat</label>
        <input type="text" name="nama_obat" class="form-control" id="nama_obat" required>

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>

        <label for="stok">Stok</label>
        <input type="number" name="stok" class="form-control" id="stok" required min="0">

        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<form action="{{ route('logout') }}" method="POST" style="text-align: center; margin-top: 20px;">
    @csrf
    <button type="submit" class="logout-btn">Keluar ✨</button>
</form>
@endsection
