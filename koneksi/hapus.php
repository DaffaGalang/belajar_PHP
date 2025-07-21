<?php
include("koneksi.php");

$id = (int) $_GET["id_buku"];

if (hapus($id) > 0) {
    echo "
        <script>
          alert('✅ Data berhasil dihapus!');
           document.location.href = 'perpus.php';
        </script>
    ";
} else {
    echo "
        <script>
          alert('❌ Data Gagal dihapus!');
           document.location.href = 'perpus.php';
        </script>
    ";
}

?>