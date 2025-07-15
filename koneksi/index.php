<?php
include("koneksi.php");

$limit = 7;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Tangkap keyword pencarian
$cari = isset($_GET['cari']) ? mysqli_real_escape_string($koneksi, $_GET['cari']) : "";

// Query pencarian + hitung total data
if ($cari) {
    $sqlTotal = "SELECT COUNT(*) as total FROM mhs 
                 WHERE nim LIKE '%$cari%' 
                    OR nama LIKE '%$cari%'
                    OR jk LIKE '%$cari%'
                    OR jurusan LIKE '%$cari%'";
    $sqlData = "SELECT * FROM mhs 
                WHERE nim LIKE '%$cari%' 
                   OR nama LIKE '%$cari%'
                   OR jk LIKE '%$cari%'
                   OR jurusan LIKE '%$cari%'
                ORDER BY id DESC 
                LIMIT $limit OFFSET $offset";
} else {
    $sqlTotal = "SELECT COUNT(*) as total FROM mhs";
    $sqlData = "SELECT * FROM mhs 
                ORDER BY id DESC 
                LIMIT $limit OFFSET $offset";
}

$totalQuery = mysqli_query($koneksi, $sqlTotal);
$totalRow = mysqli_fetch_assoc($totalQuery);
$totalPages = ceil($totalRow['total'] / $limit);

$query = mysqli_query($koneksi, $sqlData);
$no = $offset + 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-3xl font-bold mb-4 flex justify-center">Data Mahasiswa</h2>

        <!-- button navigasi -->
        <div class="flex justify-between items-center mb-4">
            <!-- Navigasi -->
            <div class="flex gap-2">
                <a href="#" class="px-2 py-2 bg-purple-800 text-white rounded hover:bg-purple-700">Kembali ←</a>
                <a href="tambah.php" class="px-5 py-2 bg-violet-600 text-white rounded hover:bg-violet-500">Tambah Data +</a>
            </div>

            <!-- Pencarian -->
            <form method="GET" action="" class="flex items-center gap-2 mb-4">
                <a href="index.php" class="px-2 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Refresh</a>
                <input type="text" name="cari" class="border rounded px-3 py-2" placeholder="Cari Data Mahasiswa..." value="<?= htmlspecialchars($_GET['cari'] ?? '') ?>">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cari</button>
            </form>
        </div>

        <!-- Tampilan Tabel Data -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded shadow">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">NIM</th>
                        <th class="px-4 py-2 text-left">Nama Mahasiswa</th>
                        <th class="px-4 py-2 text-left">Jenis Kelamin</th>
                        <th class="px-4 py-2 text-left">Tempat Tanggal Lahir</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Jurusan</th>
                        <th class="px-4 py-2 text-left">Foto</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($query)) : ?>
                        <tr class='border-t'>
                            <td class='px-4 py-2'><?= $no++ ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['nim']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['nama']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['jk']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['ttl']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['email']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['jurusan']) ?></td>
                            <td class='px-4 py-2'><?= htmlspecialchars($data['foto']) ?></td>
                            <td class='px-4 py-2 flex gap-2'>

                                <!-- tombol aksi -->
                                <a href='edit.php?id=<?= $data['id_mhs'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600 transition'>
                                    ✏️ Edit
                                </a>

                                <a href='hapus.php?id=<?= $data['id_mhs'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700 transition' onclick="return confirm('Yakin ingin menghapus?')">
                                    🗑️ Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <!-- pagination -->
            <div class="flex justify-center mt-6 space-x-1">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?page=<?= $i ?>" class="px-3 py-1 rounded border <?= $page == $i ? 'bg-blue-600 text-white' : 'bg-violet-300 text-white-700 hover:bg-blue-100' ?>">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    
</body>
</html>