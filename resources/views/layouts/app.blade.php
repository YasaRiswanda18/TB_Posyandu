<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(135deg,rgb(166, 178, 255) 0%,rgb(147, 97, 255) 100%); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="/">Posyandu Ceria</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{ route('anak.index') }}">Data Anak</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('obat.index') }}">Data Obat</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="p-4 bg-white rounded shadow-sm">
            @yield('content')
        </div>
    </div>
</body>
</html>

<style>
    body {
        background: #E3F2FD;
        font-family: 'Poppins', sans-serif;
    }

    h1 {
        color: #42A5F5;
        text-align: center;
        margin-bottom: 20px;
    }

    .table {
        background-color: #BBDEFB;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .table th {
        background-color: #42A5F5;
        color: white;
    }

    .btn-primary {
        background-color: #42A5F5;
        border-color: #42A5F5;
    }

    .btn-primary:hover {
        background-color: #1E88E5;
        border-color: #1E88E5;
    }

    table td {
        vertical-align: middle;
    }
</style>


