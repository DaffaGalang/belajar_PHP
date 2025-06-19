<?php
// $fullName = $_GET["namaLengkap"];
// $ttl = $_GET["ttl"];
// echo "Nama yang dikirim adalah " . $fullName . " dan tempat tanggal lahirnya adalah " . $ttl;

// if(isset($_POST['name'])){
//     $name = $_POST['name'];
//         echo "Nama saya adalah " . $name;
//     } else {
//          $errors[] =  "Nama yang dikiriman bermasalah"; 
//         }


$errors = [];

if (isset($_POST['name']) && isset($_POST['ttl']) && isset($_POST['email']) 
    && !empty($_POST['name']) && !empty($_POST['ttl']) && !empty($_POST['email'])) {
    $name = $_POST['name'];
    $ttl = $_POST['ttl'];
    $email = $_POST['email'];
    // isset = memastika data dikirim dari form
    // !empty = memastikan data tidak kosong

    // Validasi email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    } else {
        echo "Nama saya adalah " . htmlspecialchars($name) . "<br>";
        echo "Tempat tanggal lahir saya adalah " . htmlspecialchars($ttl) . "<br>";
        echo "Email saya adalah " . htmlspecialchars($email);
    }
} else {
    $errors[] = "Semua data harus diisi / isi data dengan benar";
}

// Tampilkan error jika ada
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}


/*  Catatan !!!
  isset() → Cek apakah variabel ada.
  empty() → Cek apakah isi variabel kosong (kosong string, nol, array kosong, dll).
  Gunakan htmlspecialchars() untuk mencegah XSS saat menampilkan input user.
  filter_var() digunakan untuk menvalidasi email yang diinput usser  

  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian PHP</title>
</head>
<body>
    
    <h2>Cihuyyyy</h2>

</body>
</html>