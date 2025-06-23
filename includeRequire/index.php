<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include dan Require</title>
</head>
<body>

<?php
    function diri(){
        echo "Hallo semua nama saya galang <br><br>";
    }

    /*
    - Penggunaan include akan tetap mengeksekusi kode
       dibawahnya walaupun penggunaan includenya salah

    - Penggunaann require akan menghentikan proses dan tidak 
      mengekseskusi kode dibawahnya apabila penggunaannya terdapat kesalahan  
    */

    include 'hallo.php';
    
    diri();
    echo " test";

?>
    
</body>
</html>