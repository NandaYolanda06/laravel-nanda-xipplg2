<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('asset/images backgrounds/background.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <h2><strong>LOGIN</strong></h2> <!-- Teks LOGIN ditebalkan -->
                <span>Silakan isi terlebih dahulu!</span>
            </div>
            <form id="loginForm">
                <div>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password"> <!-- menambahkan fitur show/hide password -->
                </div>
                <button type="submit"><strong>LOGIN</strong></button> <!-- Teks LOGIN ditebalkan -->
            </form>
        </div>
    </div>
    <script src="asset/js/script.js"></script>
</body>
</html>