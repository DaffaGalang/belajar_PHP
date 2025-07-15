<?php
include("koneksi.php");

// $host = "localhost"; $user = "root"; $pass = ""; $db = "phpdasar";

// $aye = mysqli_connect($koneksi);

$query = mysqli_query($koneksi, "SELECT * FROM perpus ORDER BY id_buku DESC");

$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Perpustakaan Ghanesa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <!-- Tampilan Tabel Data -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded shadow">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">ID Buku</th>
                        <th class="px-4 py-2 text-left">No Regristrasi</th>
                        <th class="px-4 py-2 text-left">Judul Buku</th>
                        <th class="px-4 py-2 text-left">Pengarang</th>
                        <th class="px-4 py-2 text-left">Tema</th>
                        <th class="px-4 py-2 text-left">Sampul</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($query)) : ?>
                        <tr class='border-t'>
                            <td class='px-4 py-2'><?= $no++ ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['id_buku']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['no_reg']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['judul']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['pengarang']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['tema']) ?></td>
                            <td class='px-4 py-2'><img src="uploads/<?= htmlspecialchars($data['sampul']) ?>" alt="Sampul" class="h-16"></td>
                            <td class='px-4 py-2 flex gap-2'>

                                <!-- tombol aksi -->
                                <a href='edit.php?id=<?= $data['id_buku'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600 transition'>
                                    ✏️ Edit
                                </a>

                                <a href='hapus.php?id=<?= $data['id_buku'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700 transition' onclick="return confirm('Yakin ingin menghapus?')">
                                    🗑️ Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
</body>
</html>