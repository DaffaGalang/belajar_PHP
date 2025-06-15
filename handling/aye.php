<?php
// $fullName = $_GET["namaLengkap"];
// $ttl = $_GET["ttl"];
// echo "Nama yang dikirim adalah " . $fullName . " dan tempat tanggal lahirnya adalah " . $ttl;

if(isset($_POST['name'])){
    $name = $_POST['name'];
        echo "Nama saya adalah " . $name;
    } else {
         $errors[] =  "Nama yang dikiriman bermasalah"; 
        }


$errors = [];

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    echo "Nama saya adalah " . htmlspecialchars($name);
} else {
    $errors[] = "Nama yang dikirim bermasalah";
}

// Tampilkan error jika ada
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}


?>