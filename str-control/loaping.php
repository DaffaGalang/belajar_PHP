<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loaping</title>
</head>
<body>
    
    <?php

    $a = 8;
    // #while# loaping akan dilakukan jika kondisi tidak terpenuhi
    // while($a <= 8){
    //     echo "ayam $a <br>";
    //     $a++;
    // }

    //# do while # loaping akan tetap dilakuka minimal sekali jika kondisi tidak terpenuhi
    // do{
    //     echo "oyen $a <br>";
    //     $a++;
    // }while($a <= 6);


    // #for# loaping akandilakukan jika kondisi terpenuhi, variabel include pada proses pembuatan
    // for($a = 1; $a <= 9; $a++){
    //     echo "Love you bee $a <br>";
    // }

    // #foreach# perulangan yang digunakan untuk melihat isi aray
    // $kendaran = ['Motor','Mobil','Pesawat','kapal'];
    //     foreach( $kendaran as $pengganti){
    //          echo "ada kendaraan $pengganti <br>";   
    //     }

    // #break# menghentikan program loaping secara langsung dengan menggunakan bantuan if
    for($j = 1; $j <= 10; $j++){
        if($j == 8) {
            break; // menghentikan loaping dengan $j == 8
        }
        echo $j . "\n";
    }

    for($g = 1; $g <= 15; $g++){
        if($g == 11) {
            continue; // melewati statment $g == 11 dan tetap mengeksekusi perulangan awal
        }
        echo "Goodbye bee" . $g . "<br>";
    }
        

    // LATIHAN CONTINUE & BREAK
    for($k = 1; $k <= 9; $k++){
        if($k == 6) {
            break;
        } echo "ayo belajar ngoding" . $k . "<br>";
    }
    

    ?>

</body>
</html>