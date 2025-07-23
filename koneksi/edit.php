<?php
include("koneksi.php");

//ambil data dari ID Bukudari URL
$id = $_GET["id_buku"];

// query data buku berdasarkan id buku
$book = query("SELECT * FROM perpus WHERE id_buku = $id")[0];
// var_dump($book[0]["judul"]);


// $link = query ("SELECT * FROM perpus ORDER BY id_buku ASC");
$id_buku = "";
$no_reg = "";
$judul = "";
$pengarang = "";
$tema = "";
$sampul = "";

if (isset($_POST["submit"])) {

    $edit = ubah($_POST); //Masukan fungsi tambah pada variabel $hasil
    if ($edit > 0) {
        echo "
            <script>
                alert('✅ Data berhasil diubah!');
                document.location.href = 'perpus.php';
            </script>
        ";


        // echo "✅ Data berhasil ditambahkan!";
        // echo "<br>";
        // echo "<script>
        //         setTimeout(function() {
        //             window.location.href = 'perpus.php';
        //         }, 100);
        //     </>";

    } else {
        echo "
            <script>
                alert('❌ Gagal mengubah data!');
                document.location.href = 'edit.php';
            </script>
        ";

        // echo "❌ Gagal menambahkan data: " . mysqli_error($koneksi);
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
    <title>Edit Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Edit Data Buku</h1>
        <form action="" method="post" enctype="multipart/form-data" class="space-y-4">

            <!-- Id Buku -->
            <input type="hidden" name="id_buku" id="id_buku" value="<?= htmlspecialchars($id_buku), $book["id_buku"] ?>">
            
            <!-- No Registrasi -->
            <div>
                <label for="no_reg" class="block mb-1 font-medium text-gray-700">No Registrasi</label>
                <input type="text" name="no_reg" id="no_reg" class="w-full border p-2 rounded" value="<?= htmlspecialchars($no_reg), $book["no_reg"] ?>" required>

            </div>

            <!-- Judul Buku -->
            <div>
                <label for="judul" class="block mb-1 font-medium text-gray-700">Judul Buku</label>
                <input type="text" name="judul" id="judul" class="w-full border p-2 rounded" value="<?= htmlspecialchars($judul), $book["judul"] ?>" required>

            </div>

            <!-- Pengarang -->
            <div>
                <label for="pengarang" class="block mb-1 font-medium text-gray-700">Pengarang</label>
                <input type="text" name="pengarang" id="pengarang" class="w-full border p-2 rounded" value="<?= htmlspecialchars($pengarang), $book["pengarang"] ?>" required>

            </div>

            <!-- Tema -->
            <div>
                <label for="tema" class="block mb-1 font-medium text-gray-700">Tema</label>
                <input type="text" name="tema" id="tema" class="w-full border p-2 rounded" value="<?= htmlspecialchars($tema), $book["tema"] ?>" required>

            </div>

            <!-- Sampul -->
            <div>
                <label for="sampul" class="block mb-1 font-medium text-gray-700">Sampul</label>

                <!-- Preview Gambar Lama -->
                <input type="hidden" name="sampul_lama" value="<?= $book['sampul'] ?>">
                <?php if (!empty($book['sampul'])): ?>
                    <img src="uploads/<?= htmlspecialchars($book['sampul']) ?>" alt="Sampul Lama" class="mb-2 w-32 rounded shadow">
                    <input type="hidden" name="sampul_lama" value="<?= htmlspecialchars($book['sampul']) ?>">
                <?php endif; ?>

                <input type="file" name="sampul" id="sampul" accept="image/*" class="w-full border p-2 rounded">
                <p class="text-sm text-gray-500 mt-1">Pilih gambar lain yang ingin digunakan</p>
            </div>

            <!-- Tombol Navigasi -->
            <div class="pt-4 flex justify-between">
                <a href="perpus.php" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
                <button type="submit" name="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Edit Data Buku</button>
            </div>
        </form>
    </div>
    </div>

</body>

</html>