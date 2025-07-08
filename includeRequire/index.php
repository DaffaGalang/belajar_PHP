<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include dan Require</title>
</head>
<body>

<?php

    //function
    function diri(){
        echo "Hallo semua nama saya galang <br><br>";
    }

    /*
    - Penggunaan include akan tetap mengeksekusi kode
       dibawahnya walaupun penggunaan includenya salah

    - Penggunaann require akan menghentikan proses dan tidak 
      mengekseskusi kode dibawahnya apabila penggunaannya terdapat kesalahan  
    */

    // test include dan require (kode di bawah incude tetap jalan walau include error) 
    // (kode di bawah require berhenti jalan ketika require error)
    include 'hallo.php';
    require '../handling/test.php'; //contoh akses file lain
    echo "<br>";
    
    diri();
    echo " test";

?>
    
</body>
</html>