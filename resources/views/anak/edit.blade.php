@extends('layouts.app')

@section('content')
<style>
    .logout-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        font-weight: bold;
        background: linear-gradient(135deg, #FFB6C1, #FF91A1);
        color: #FFF;
        cursor: pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .logout-btn:hover {
        background: linear-gradient(135deg, #FF91A1, #FFB6C1);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .logout-btn:active {
        background: #FF6B6B;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: scale(0.95);
    }

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
    <h1>Edit Data Anak</h1>

    <form action="{{ route('anak.update', $anak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{ $anak->nama }}" class="form-control" required>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ $anak->tanggal_lahir }}" class="form-control" required>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" required>
            <option value="Laki-laki" {{ $anak->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $anak->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>

        <label for="nama_orangtua">Nama Orang Tua</label>
        <input type="text" name="nama_orangtua" value="{{ $anak->nama_orangtua }}" class="form-control" required>

        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" required>{{ $anak->alamat }}</textarea>

        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('anak.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<form action="{{ route('logout') }}" method="POST" style="text-align: center; margin-top: 20px;">
    @csrf
    <button type="submit" class="logout-btn">Keluar ✨</button>
</form>
@endsection
