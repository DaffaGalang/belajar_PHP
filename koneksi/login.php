<?php
include "koneksi.php";

$username = "";
$password = "";

if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $cekdata = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1 ){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            header("location: perpus.php");
            exit;
        }
    }

    $error = true;

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Administrasi Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-2xl mx-auto mt-20 bg-white p-10 rounded shadow">
        <h1 class="text-3xl font-semibold mb-4 text-center"> LOGIN</h1>
        <?php if( isset($error)) : ?>
                <h2 style="color: red; font-style: italic"> Username / Password Salah </h2>
        <?php endif ?>
        <form action="" method="post" enctype="multipart/form-data" class="space-y-4">

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

            <!-- Tombol -->
            <div class="pt-1 flex center">
                <a href="registrasi.php" class="px-2 py-1 bg-gray-200 text-balck rounded hover:bg-gray-300">Belum Punya Akun</a>
            </div>

            <div class="pt-4 flex flex-col sm:flex-row justify-center items-center sm:space-x-4 space-y-2 sm:space-y-0">
                <button type="submit" name="login" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"> Login </button>
            </div>
        </form>
    </div>
    
</body>
</html>