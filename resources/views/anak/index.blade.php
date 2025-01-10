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
        background-color: #64B5F6;
        border-color: #64B5F6;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #42A5F5;
        border-color: #42A5F5;
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




<div class="dashboard-container">
    <div class="summary-card">
        <h3>Laki-laki</h3>
        <p>{{ $anaks->where('jenis_kelamin', 'Laki-laki')->count() }}</p>
    </div>
    <div class="summary-card">
        <h3>Total Anak</h3>
        <p>{{ $anaks->count() }}</p>
    </div>
    <div class="summary-card">
        <h3>Perempuan</h3>
        <p>{{ $anaks->where('jenis_kelamin', 'Perempuan')->count() }}</p>
    </div>
</div>

<div class="table-container">
    <h1>Data Anak Posyandu</h1>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('anak.create') }}" class="btn btn-primary">+ Tambah Data Anak</a>
    </div>

    <!-- Filter Jenis Kelamin -->
    <form method="GET" action="{{ route('anak.index') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <select name="jenis_kelamin" class="form-control">
                    <option value="">Semua</option>
                    <option value="Laki-laki" {{ request('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ request('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <table class="table custom-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nama Orang Tua</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anaks as $anak)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $anak->nama }}</td>
                <td>{{ $anak->tanggal_lahir }}</td>
                <td>{{ $anak->jenis_kelamin }}</td>
                <td>{{ $anak->nama_orangtua }}</td>
                <td>{{ $anak->alamat }}</td>
                <td>
                    <a href="{{ route('anak.edit', $anak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('anak.destroy', $anak->id) }}" method="POST" style="display:inline-block;" 
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data anak ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $anaks->links() }}
    </div>
</div>
@endsection
