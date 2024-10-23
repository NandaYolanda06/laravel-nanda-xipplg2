<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tambahkan Vite jika diperlukan -->
    @vite('resources/css/app.css')
    <!-- Menggunakan font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-cover bg-center min-h-screen flex justify-center items-center" style="background-image: url('asset/images backgrounds/background.jpg');">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-900"><strong>LOGIN</strong></h2> <!-- Teks LOGIN ditebalkan -->
            <span class="text-gray-600">Silakan isi terlebih dahulu!</span>
        </div>

        <form id="loginForm" action="#" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="Nanda" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" value="Nda" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 font-semibold">Login</button>
            </div>
        </form>
    </div>
</body>
</html>