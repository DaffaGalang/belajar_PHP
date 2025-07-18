<?php
include("koneksi.php");

// $link = query ("SELECT * FROM perpus ORDER BY id_buku ASC");

$no_reg = "";
$judul = "";
$pengarang = "";
$tema = "";
$sampul = "";

if (isset($_POST["submit"])) {

    $hasil = tambah($_POST); //Masukan fungsi tambah pada variabel $hasil
    if ($hasil > 0) {
        echo "✅ Data berhasil ditambahkan!";
        echo "<br>";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'perpus.php';
                }, 100);
            </script>";
    } else {
        echo "❌ Gagal menambahkan data: " . mysqli_error($koneksi);
    }
    // Reset field
    $no_reg = $judul = $pengarang = $tema = $sampul = "";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Tambah Data Buku</h1>
        <form action="" method="post" enctype="multipart/form-data" class="space-y-4">

            <!-- No Registrasi -->
            <div>
                <label for="no_reg" class="block mb-1 font-medium text-gray-700">No Registrasi</label>
                <input type="text" name="no_reg" id="no_reg" class="w-full border p-2 rounded" value="<?= htmlspecialchars($no_reg) ?>" required>

            </div>

            <!-- Judul Buku -->
            <div>
                <label for="judul" class="block mb-1 font-medium text-gray-700">Judul Buku</label>
                <input type="text" name="judul" id="judul" class="w-full border p-2 rounded" value="<?= htmlspecialchars($judul) ?>" required>

            </div>

            <!-- Pengarang -->
            <div>
                <label for="pengarang" class="block mb-1 font-medium text-gray-700">Pengarang</label>
                <input type="text" name="pengarang" id="pengarang" class="w-full border p-2 rounded" value="<?= htmlspecialchars($pengarang) ?>" required>

            </div>

            <!-- Tema -->
            <div>
                <label for="tema" class="block mb-1 font-medium text-gray-700">Tema</label>
                <input type="text" name="tema" id="tema" class="w-full border p-2 rounded" value="<?= htmlspecialchars($tema) ?>" required>

            </div>

            <!-- Sampul -->
            <div>
                <label for="sampul" class="block mb-1 font-medium text-gray-700">Sampul</label>
                <input type="text" name="sampul" id="sampul" class="w-full border p-2 rounded" value="<?= htmlspecialchars($sampul) ?>" required>

            </div>

            <!-- Tombol Navigasi -->
            <div class="pt-4 flex justify-between">
                <a href="perpus.php" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
                <button type="submit" name="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Data Buku</button>
            </div>
        </form>
    </div>
    </div>

</body>

</html>