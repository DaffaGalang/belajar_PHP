<?php
    //use Dom\Mysql;

    session_start();

    if( !isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }

    include("koneksi.php");

    //pagination konfigurasi
    $jml_data = 4;
    $jml_buku = count(query("SELECT * FROM perpus"));
    $jml_halaman = ceil($jml_buku / $jml_data);
    $page = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

    $awalData = ( $jml_data * $page ) - $jml_data;


    $link = query("SELECT * FROM perpus LIMIT $awalData, $jml_data");

    if (isset($_GET["cari"])) {
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

    <style>
        @media print {
            #navigasi{
                display: none;
            }
        }
    </style>

</head>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-6">

        <!-- Tampilan Tabel Data -->
        <div>
            <h2 class="text-3xl font-bold mb-4 flex justify-center px-4 py-4">Data Buku Perpustakaan</h2>

            <!-- Button Navigasi -->
            <div class="flex justify-between items-center mb-4">
                <!-- Navigasi -->
                <div class="flex gap-2" id="navigasi">
                    <a href="logout.php" class="px-2 py-2 bg-purple-800 text-white rounded hover:bg-purple-700"> LogOut ← </a>
                    <a href="tambahBuku.php" class="px-3 py-2 bg-violet-600 text-white rounded hover:bg-violet-500">Tambah Data Buku</a>
                </div>
                <!-- Pencarian -->
                <form action="" method="GET" class="flex items-center gap-2 mb-2" id="navigasi">
                    <a href="perpus.php" class="px-2 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"> Refresh ⟳ </a>
                    <input type="text" name="serch" class="border rounded px-2 py-2" placeholder="Cari data buku..." autocomplete="off" value="<?= htmlspecialchars($_GET['cari'] ?? '') ?>">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700" name="cari">Cari</button>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto">    
            <!-- Tabell Data -->
            <table class="min-w-full bg-white rounded shadow table-fixed">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-5 text-left w-12">No</th>
                        <th class="px-4 py-5 text-left w-36">No Registrasi</th>
                        <th class="px-4 py-5 text-left w-48">Judul Buku</th>
                        <th class="px-4 py-5 text-left w-64">Pengarang</th>
                        <th class="px-4 py-5 text-left w-48">Tema</th>
                        <th class="px-4 py-5 text-center w-40">Sampul</th>
                        <th class="px-4 py-5 text-center w-40">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = ($page - 1) * $jml_data + 1; ?>
                    <?php foreach ($link as $data) : ?>
                        <tr class="border-t">
                            <td class="px-4 py-5 w-12"><?= $no++ ?></td>
                            <td class="px-4 py-5 w-36"><?= htmlspecialchars($data['no_reg']) ?></td>
                            <td class="px-4 py-5 w-48"><?= htmlspecialchars($data['judul']) ?></td>
                            <td class="px-4 py-5 w-64"><?= htmlspecialchars($data['pengarang']) ?></td>
                            <td class="px-4 py-5 w-48"><?= htmlspecialchars($data['tema']) ?></td>
                            <td class="px-4 py-5 w-40 text-center">
                                <img src="uploads/<?= htmlspecialchars($data['sampul']) ?>" alt="Sampul" class="w-24 h-auto mx-auto rounded shadow">
                            </td>
                            <td class="px-7 py-12 w-40 flex justify-center gap-2">
                                <a href='edit.php?id_buku=<?= $data['id_buku'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600 transition'>
                                    ✏️ Edit
                                </a>
                                <a href='hapus.php?id_buku=<?= $data['id_buku'] ?>'
                                    class='inline-block px-3 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700 transition'
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    🗑️ Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            <!-- pagination -->
            <div class="flex justify-center mt-6 space-x-2">
                <?php if( $page > 1 ) :?>
                    <a href="?halaman=<?= $page - 1?>" class="px-3 py-2 border rounded-md 'bg-blue-600 text-white' : 'hover:bg-gray-100'"> ← </a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $jml_halaman; $i++) : ?>
                    <a href="?halaman=<?= $i; ?>"
                    class="px-3 py-2 border rounded-md <?= (isset($_GET['halaman']) && $_GET['halaman'] == $i) ? 'bg-blue-600 text-white' : 'hover:bg-gray-100' ?>">
                        <?= $i; ?>
                    </a>
                <?php endfor; ?>

                <?php if( $page < $jml_data ) :?>
                    <a href="?halaman=<?= $page + 1?>" class="px-3 py-2 border rounded-md 'bg-blue-600 text-white' : 'hover:bg-gray-100'"> → </a>
                <?php endif; ?>
            </div>
    </div>
</body>

</html>