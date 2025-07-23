<?php
include("koneksi.php");

$link = query ("SELECT * FROM perpus");

if( isset ($_GET["cari"])) {
    $link = cari($_GET["serch"]);
}

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

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-6">

        <!-- Tampilan Tabel Data -->
        <div class="overflow-x-auto">
            <h2 class="text-3xl font-bold mb-4 flex justify-center px-4 py-4">Data Buku Perpustakaan</h2>
            
            <!-- Button Navigasi -->
            <div class="flex justify-between items-center mb-4">
                <!-- Navigasi -->
                <div class="flex gap-2">
                    <a href="#" class="px-2 py-2 bg-purple-800 text-white rounded hover:bg-purple-700">Kembali ←</a>
                    <a href="tambahBuku.php" class="px-5 py-2 bg-violet-600 text-white rounded hover:bg-violet-500">Tambah Data Buku</a>
                </div>
                <!-- Pencarian -->
                <form action="" method="GET" class="flex items-center gap-2 mb-4">
                    <a href="perpus.php" class="px-2 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Refresh</a>
                    <input type="text" name="serch" class="border rounded px-3 py-2" placeholder="Cari data buku..." autocomplete="off" value="<?= htmlspecialchars($_GET['cari'] ?? '') ?>">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700" name="cari">Cari</button>
                </form>
            </div>

            <table class="min-w-full bg-white rounded shadow">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">No Registrasi</th>
                        <th class="px-4 py-2 text-left">Judul Buku</th>
                        <th class="px-4 py-2 text-left">Pengarang</th>
                        <th class="px-4 py-2 text-left">Tema</th>
                        <th class="px-4 py-2 text-center">Sampul</th>
                        <th class="px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($link as $data) : ?>
                        <tr class='border-t'>
                            <td class='px-4 py-2'><?= $no++ ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['no_reg']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['judul']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['pengarang']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['tema']) ?></td>
                            <td class='px-4 py-2'>
                                <img src="uploads/<?= htmlspecialchars($data['sampul']) ?>" alt="Sampul" class="w-24 h-auto rounded shadow">
                            </td>
                            <td class='px-7 py-8 flex gap-2'>
                                <!-- tombol aksi -->
                                <a href='edit.php?id_buku=<?= $data['id_buku'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600 transition'>
                                     ✏️ Edit
                                </a>

                                <a href='hapus.php?id_buku=<?= $data['id_buku'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700 transition' onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    🗑️ Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>