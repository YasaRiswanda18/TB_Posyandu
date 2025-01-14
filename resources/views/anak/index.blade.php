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

    .summary-container {
        display: flex;
        gap: 20px;
        justify-content: center;
        margin: 20px 0;
    }

    .summary-card {
        flex: 1;
        min-width: 200px;
        background: linear-gradient(135deg, #FFC1A1 0%, #FFDAC1 100%);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        color: #5A4E4D;
        text-align: center;
        transition: all 0.3s ease;
    }

    .summary-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }

    .add-card {
        flex: 1;
        background: #FFE4B3;
        border: 2px dashed #FFC107;
        border-radius: 15px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #5A4E4D;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .add-card:hover {
        background: #FFDCA8;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .data-card {
        background: #E9F7FF;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .data-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .data-card h4 {
        color: #5F80E5;
        font-size: 18px;
        font-weight: bold;
    }

    .data-card p {
        color: #5A4E4D;
        margin: 5px 0;
        font-size: 14px;
    }

    .actions {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 10px;
    }

    .btn-edit, .btn-delete {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }

    .btn-edit {
        background: #FFB6C1;
        color: #5A4E4D;
    }

    .btn-edit:hover {
        background: #FF91A1;
    }

    .btn-delete {
        background: #FF867C;
        color: #FFFFFF;
    }

    .btn-delete:hover {
        background: #E57373;
    }
</style>

<div class="summary-container">
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

<div class="card-container">
    <a href="{{ route('anak.create') }}" class="add-card">
        + Tambah Data Anak
    </a>
</div>

<div class="card-container">
    @foreach ($anaks as $anak)
        <div class="data-card">
            <h4>{{ $anak->nama }}</h4>
            <p><strong>Tanggal Lahir:</strong> {{ $anak->tanggal_lahir }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $anak->jenis_kelamin }}</p>
            <p><strong>Nama Orang Tua:</strong> {{ $anak->nama_orangtua }}</p>
            <p><strong>Alamat:</strong> {{ $anak->alamat }}</p>
            <div class="actions">
                <a href="{{ route('anak.edit', $anak->id) }}" class="btn-edit">Edit</a>
                <form action="{{ route('anak.destroy', $anak->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data anak ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<form action="{{ route('logout') }}" method="POST" style="text-align: center; margin-top: 20px;">
    @csrf
    <button type="submit" class="logout-btn">Keluar ✨</button>
</form>
@endsection
