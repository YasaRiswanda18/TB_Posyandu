@extends('layouts.app')

@section('content')
<h1>Tambah Data Obat</h1>
<form action="{{ route('obat.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_obat" class="form-label">Nama Obat</label>
        <input type="text" name="nama_obat" class="form-control" id="nama_obat" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control" id="stok" required min="0">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection