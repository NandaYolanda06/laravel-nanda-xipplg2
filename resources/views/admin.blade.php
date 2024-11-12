<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Mengenali Dirimu Sendiri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .profile-container {
            text-align: center;
            margin-top: 20px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-name {
            font-size: 24px;
            font-weight: bold;
        }
        .profile-desc {
            font-style: italic;
        }
        .nav-links {
            margin: 10px 0;
        }
        .nav-links a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
        }
        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container profile-container">
        <!-- Foto profil -->
        <img src="https://via.placeholder.com/150" alt="Nanda Yolanda" class="profile-img">

        <!-- Nama dan deskripsi -->
        <h1 class="profile-name">Nanda Yolanda</h1>
        <p class="profile-desc">Mengenali Dirimu Sendiri</p>

        <!-- Menu navigasi -->
        <div class="nav-links">
            <a href="#">Gallery</a> | 
            <a href="#">Data</a> | 
            <a href="#">About</a> | 
            <a href="#"><strong>Login</strong></a>
        </div>

        <!-- Data pribadi -->
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Data Pribadi</h5>
                <p><strong>a. Data Saya</strong></p>
                <p>Nama Lengkap: Nanda Yolanda</p>
                <p>Tempat, Tanggal Lahir: Cilacap, 6 Agustus 2007</p>
                <p>No. Telp: 085702135810</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>