<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Villa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            background-color: #f1f1f1;
            /* Abu-abu terang */
            color: #333;
            /* Teks abu gelap */
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .table-dark {
            background-color: #6c757d;
            /* Abu-abu gelap */
        }

        .table-secondary {
            background-color: #e9ecef;
            /* Abu-abu terang untuk isi tabel */
        }

        .table-hover>tbody>tr:hover {
            background-color: #d6d8db;
            /* Abu-abu lebih terang untuk hover */
        }

        .navbar {
            background-color: #6c757d;
            /* Navbar abu-abu gelap */
        }

        .navbar .nav-link {
            color: #ffffff;
            /* Teks putih */
        }

        footer {
            background-color: #6c757d;
            /* Footer abu-abu gelap */
            color: #ffffff;
            /* Teks putih */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Sistem Reservasi Penginapan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active">Kelompok 5</a></li>
                </ul>
            </div>
        </div>
    </nav>