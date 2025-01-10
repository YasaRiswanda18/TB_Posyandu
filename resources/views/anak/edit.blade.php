@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #E3F2FD;
        padding: 20px;
    }

    .dashboard-container {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        margin: 20px auto;
    }

    .summary-card {
        flex: 1;
        min-width: 200px;
        background: linear-gradient(135deg, #64B5F6 0%, #42A5F5 100%);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        color: white;
        text-align: center;
    }

    .summary-card h3 {
        margin: 0;
    }

    .table-container {
        background: #BBDEFB;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .table-container h1 {
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

    .custom-table thead th {
        background-color: #42A5F5;
        color: white;
    }

    .custom-table tbody tr td {
        padding: 15px;
        vertical-align: middle;
    }
</style>


<div class="form-container">
    <h1 class="text-center mb-4">Edit Data Anak</h1>

    <form action="{{ route('anak.update', $anak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="{{ $anak->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $anak->tanggal_lahir }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki" {{ $anak->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $anak->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_orangtua">Nama Orang Tua</label>
            <input type="text" name="nama_orangtua" value="{{ $anak->nama_orangtua }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $anak->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('anak.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
