<?php
include "koneksi.php";

$email = "";
$username = "";
$password = "";
$password2 = "";

if( isset ($_POST["submit"])) {

    if( Registrasi($_POST) > 0){
        echo "<script>
            alert('Data User Baru Berhasil ditambahkan ✅');
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman Registrasi </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-2xl mx-auto mt-20 bg-white p-10 rounded shadow">
        <h1 class="text-2xl font-semibold mb-4 text-center"> REGISTRASI</h1>
        <form action="" method="post" enctype="multipart/form-data" class="space-y-4">

            <!-- Email -->
            <div>
                <label for="email" class="block mb-1 font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full border p-2 rounded" value="<?= htmlspecialchars($email) ?>" required>

            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block mb-1 font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" class="w-full border p-2 rounded" value="<?= htmlspecialchars($username) ?>" required>

            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-1 font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full border p-2 rounded" value="<?= htmlspecialchars($password) ?>" required>

            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label for="password2" class="block mb-1 font-medium text-gray-700">Konfirmasi Password</label>
                <input type="password" name="password2" id="password2" class="w-full border p-2 rounded" value="<?= htmlspecialchars($password2) ?>" required>

            </div>

            <!-- Tombol -->
            <div class="pt-4 flex flex-col sm:flex-row justify-center items-center sm:space-x-4 space-y-2 sm:space-y-0">
                <a href="login.php" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
                <button type="submit" name="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Buat Akun</button>
            </div>
        </form>
    </div>
    
</body>
</html>