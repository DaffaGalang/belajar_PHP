<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpdasar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

function query($query){
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    global $koneksi;

    $no_reg = $data["no_reg"];
    $judul = $data["judul"];
    $pengarang = $data["pengarang"];
    $tema = $data["tema"];

    // Tangani upload gambar
    $namaFile = $_FILES['sampul']['name'];
    $tmpName = $_FILES['sampul']['tmp_name'];

    // Simpan ke folder uploads
    $uploadDir = "uploads/";
    move_uploaded_file($tmpName, $uploadDir . $namaFile);

    $query = "INSERT INTO perpus (no_reg, judul, pengarang, tema, sampul) VALUES 
            ('$no_reg', '$judul', '$pengarang', '$tema', '$namaFile')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi); 
}

function hapus($id){
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM perpus  WHERE id_buku = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah (){
    
}


if (!$koneksi) {
    die("Koneksi Gagal / Bermasalah : " . mysqli_connect_error());
}
