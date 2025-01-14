<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(135deg, rgb(173, 216, 230) 0%, rgb(144, 202, 249) 100%); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="/">Posyandu Ceria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dataDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Management
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dataDropdown">
                            <li><a class="dropdown-item" href="{{ route('anak.index') }}">Data Anak</a></li>
                            <li><a class="dropdown-item" href="{{ route('obat.index') }}">Data Obat</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="p-4 bg-white rounded shadow-sm">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
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
        background-color: #E1F5FE;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .table th {
        background-color: #42A5F5;
        color: white;
    }

    .btn-primary {
        background-color: #29B6F6;
        border-color: #29B6F6;
    }

    .btn-primary:hover {
        background-color: #0288D1;
        border-color: #0288D1;
    }

    table td {
        vertical-align: middle;
    }

    .navbar-nav .dropdown-menu {
        background: #E3F2FD;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-nav .dropdown-menu .dropdown-item {
        color: #1E88E5;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #BBDEFB;
        color: #0D47A1;
    }
</style>
