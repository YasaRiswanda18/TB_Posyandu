@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #E3F2FD;
        padding: 20px;
    }

    .form-container {
        background: #BBDEFB;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 600px;
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #42A5F5;
    }

    .btn-primary {
        background-color: #42A5F5;
        border-color: #42A5F5;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #1E88E5;
        border-color: #1E88E5;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }

    .form-control {
        border-radius: 8px;
        padding: 10px;
    }
</style>


<div class="form-container">
    <h1>Tambah Data Anak</h1>
    <form action="{{ route('anak.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_orangtua" class="form-label">Nama Orang Tua</label>
            <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('anak.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
