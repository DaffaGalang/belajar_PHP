<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpdasar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

//function koneksi utama & tampilin data
function query($query){
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



//function koneksi tambah data
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

//function koneksi hapus data
function hapus($id){
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM perpus  WHERE id_buku = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah ($data){
    global $koneksi;

    $id_buku = $data["id_buku"];
    $no_reg = $data["no_reg"];
    $judul = $data["judul"];
    $pengarang = $data["pengarang"];
    $tema = $data["tema"];

     // Tangani upload gambar
    $namaFile = $_FILES['sampul']['name'];
    $tmpName = $_FILES['sampul']['tmp_name'];
    $uploadDir = "uploads/";

    //buat nama unik
    $namaBaru = uniqid() . "_" . $namaFile;

    // Jika ada file diupload
    if ($tmpName != "") {
        // 🧹 Hapus gambar lama dari folder
        unlink("uploads/" . $data["sampul_lama"]);

        move_uploaded_file($tmpName, $uploadDir . $namaBaru);
        $sampul = $namaBaru;
    } else {
        // Jika tidak ada upload baru, ambil gambar lama
        $sampul = $data["sampul_lama"];
    }

    $query = "UPDATE perpus SET
                no_reg = '$no_reg',
                judul = '$judul',
                pengarang = '$pengarang',
                tema = '$tema',
                sampul = '$sampul'
                WHERE id_buku = $id_buku ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi); 
}

function cari ($serch) {
    global $koneksi;
    $serch = mysqli_real_escape_string($koneksi, $serch);

    $query = "SELECT * FROM perpus WHERE 
        judul LIKE '%$serch%' OR
        no_reg LIKE '%$serch%' OR
        pengarang LIKE '%$serch%' OR
        tema LIKE '%$serch%'
    ";

    return query($query);
}


function registrasi ($data){
    global $koneksi;

    $email = $data["email"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //cek apakah usernamae sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('❌ Gunakan username lain, username ini sudah terdaftar !');
        </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    // endkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan ke database
    mysqli_query($koneksi, "INSERT INTO user (email, username, password) VALUES('$email', '$username', '$password')");
    return mysqli_affected_rows($koneksi);
}



// Test koneksi
if (!$koneksi) {
    die("Koneksi Gagal / Bermasalah : " . mysqli_connect_error());
}
