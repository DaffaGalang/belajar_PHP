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

if (isset($_POST['name']) && isset($_POST['ttl'])) {
    $name = $_POST['name'];
    $ttl = $_POST['ttl'];
    echo "Nama saya adalah " . htmlspecialchars($name). 
    " dan tempat tanggal lahir saya adalah " . htmlspecialchars($ttl);
} else {
    $errors[] = "Nama yang dikirim bermasalah";
}

// Tampilkan error jika ada
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
} // test koemrnt

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