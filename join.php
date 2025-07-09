<?php

    $errors = [];
if($_SERVER ['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['id_pasien'], $_POST['nama_pasien'], $_POST['jadwal'], $_POST['no_hp']) 
    && !empty($_POST['id_pasien']) && !empty($_POST['nama_pasien']) && !empty($_POST['jadwal']) && !empty($_POST['no_hp'])){
        $id_pasien = $_POST['id_pasien'];
        $nama_pasien = $_POST['nama_pasien'];
        $no_hp = $_POST['no_hp'];
        $jadwal = $_POST['jadwal'];

                echo "Id Pasien " . htmlspecialchars($id_pasien) . "<br>";
                echo "Nama " . htmlspecialchars($nama_pasien). "<br>";
                echo "No HP " . htmlspecialchars($no_hp). "<br>";
                echo "jadwal saya " . htmlspecialchars($jadwal). "<br>";
    } else {
        $errors[] = "Semua data harus diisi / isi data dengan benar";
    }

    if (!empty($errors))
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}



// $errors = [];

// if (isset($_POST['name']) && isset($_POST['ttl']) && isset($_POST['email']) 
//     && !empty($_POST['name']) && !empty($_POST['ttl']) && !empty($_POST['email'])) {
//     $name = $_POST['name'];
//     $ttl = $_POST['ttl'];
//     $email = $_POST['email'];
//     // isset = memastika data dikirim dari form
//     // !empty = memastikan data tidak kosong

//     // Validasi email
//     if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//         $errors[] = "Format email tidak valid";
//     } else {
//         echo "Nama_pasien saya adalah " . htmlspecialchars($name) . "<br>";
//         echo "Tempat tanggal lahir saya adalah " . htmlspecialchars($ttl) . "<br>";
//         echo "Email saya adalah " . htmlspecialchars($email);
//     }
// } else {
//     $errors[] = "Semua data harus diisi / isi data dengan benar";
// }

// // Tampilkan error jika ada
// if (!empty($errors)) {
//     foreach ($errors as $error) {
//         echo "<p style='color:red;'>$error</p>";
//     }
// }
// ?>