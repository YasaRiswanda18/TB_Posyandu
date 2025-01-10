@extends('layouts.app')

@section('content')
<h1>Data Obat</h1>
<a href="{{ route('obat.create') }}" class="btn btn-primary mb-3">Tambah Data Obat</a>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($obats as $obat)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $obat->nama_obat }}</td>
            <td>{{ $obat->deskripsi }}</td>
            <td>{{ $obat->stok }}</td>
            <td>
                <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $obats->links() }}
@endsection