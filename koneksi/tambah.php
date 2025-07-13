<?php
include("koneksi.php");

$sukses = "";$error = "";  $nim = ""; $nama = ""; $jk = ""; $ttl = ""; $email = ""; $jurusan = ""; $foto;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $jk = $_POST['jk'] ?? '';
    $ttl = $_POST['ttl'] ?? '';
    $email = $_POST['email'] ?? '';
    $jurusan = $_POST['jurusan'] ?? '';

    // Proses upload gambar
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
        $folder = "uploads/";
        $file_name = basename($_FILES["foto"]["name"]);
        $target_file = $folder . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ["jpg", "jpeg", "png", "gif"];

        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check !== false && in_array($imageFileType, $allowed_types)) {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                $foto = $file_name;
            } else {
                $error = "Gagal mengunggah file.";
            }
        } else {
            $error = "File bukan gambar valid atau format tidak didukung.";
        }
    } else {
        $error = "Silakan pilih file gambar.";
    }

    // Simpan ke database jika tidak ada error
    if (!$error && $nim && $nama && $jk && $ttl && $email && $jurusan && $foto) {
        $sql = "INSERT INTO mhs(nim, nama, jk, ttl, email, jurusan, foto)
                VALUES ('$nim', '$nama', '$jk', '$ttl', '$email', '$jurusan', '$foto')";
        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header("Location: index.php");
            echo "<script>
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 2000);
            </script>";
            // Reset field
            $nim = $nama = $jk = $ttl = $email = $jurusan = $foto = "";
        } else {
            $error = "Gagal menyimpan ke database.";
        }
    } elseif (!$error) {
        $error = "Semua data wajib diisi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <body"class="bg-gray-100">
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Tambah Data Mahasiswa</h2>

        <?php if ($error): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4"><?= $error ?></div>
        <?php elseif ($sukses): ?>
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4"><?= $sukses ?></div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data" class="space-y-4">
            <!-- NIM -->
            <div>
                <label class="block mb-1 font-medium text-gray-700">NIM</label>
                <input type="text" name="nim" class="w-full border p-2 rounded" value="<?= htmlspecialchars($nim) ?>" required>

            </div>

            <!-- Nama -->
            <div>
                <label class="block mb-1 font-medium text-gray-700">Nama Mahasiswa</label>
                <input type="text" name="nama" class="w-full border p-2 rounded" value="<?= htmlspecialchars($nama) ?>" required>
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label class="block mb-1 font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jk" class="w-full border p-2 rounded">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="laki laki" <?= $jk == 'laki laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="perempuan" <?= $jk == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>

            <!-- TTL -->
            <div>
                <label class="block mb-1 font-medium text-gray-700">Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" class="w-full border p-2 rounded" value="<?= htmlspecialchars($ttl) ?>" required>
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-1 font-medium text-gray-700">Email</label>
                <input type="text" name="email" class="w-full border p-2 rounded" value="<?= htmlspecialchars($email) ?>" required>
            </div>

            <!-- jurusan -->
            <div>
                <label class="block mb-1 font-medium text-gray-700">Jurusan</label>
                <input type="text" name="jurusan" class="w-full border p-2 rounded" value="<?= htmlspecialchars($jurusan) ?>" required>
            </div>

            <!-- Upload Foto -->
            <div>
                <label class="block mb-1 font-medium text-gray-700">Foto</label>
                <input type="file" name="foto" class="w-full border p-2 rounded">
            </div>

            <!-- Tombol -->
            <div class="pt-4 flex justify-between">
                <a href="index.php" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Kembali</a>
                <button type="submit" name="simpan" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>