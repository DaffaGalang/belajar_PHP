<?php

    $errors = [];

    if(isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['prodi']) && isset($_POST['email']) 
    && !empty($_POST['nim']) && !empty($_POST['nama']) && !empty($_POST['prodi']) && !empty($_POST['email'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $prodi = $_POST['prodi'];
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Format email tidak valid";
                } else {
                echo "NIM Saya adalah " . htmlspecialchars($nim) . "<br>";
                echo "Nama Saya adalah " . htmlspecialchars($nama). "<br>";
                echo "Dengan Email " . htmlspecialchars($email). "<br>";
                echo "Prodi saya adalah " . htmlspecialchars($prodi). "<br>";
        }
    } else {
        $errors[] = "Semua data harus diisi / isi data dengan benar";
    }

    if (!empty($errors))
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
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
//         echo "Nama saya adalah " . htmlspecialchars($name) . "<br>";
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