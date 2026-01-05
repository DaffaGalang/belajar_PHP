<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure control</title>
</head>
<body>
    <?php
        $nilai = 60;
        $kehadiran = 80;

        /* Have 4 Logical Operators
        and  (&&), or (||), xor (xor) dan not(!$a)
        */

        if($nilai >= 85 && $kehadiran >= 80) {
            echo "<b>Selamat ... Anda lulus dan mendapatkan nilai A</b><br>";
        } elseif($nilai >= 70 && $kehadiran >= 80) {
            echo "<b>Selamat ... Anda lulus matakuliah Pemmrograman WEB mendapat nilai B</b><br><br>";
        } elseif($nilai >= 65 && $kehadiran >= 80){
            echo "<b>Selamat ... Anda lulus matakuliah Pemmrograman WEB mendapat nilai C</b><br><br>";
        } elseif($nilai >= 60 && $kehadiran >= 80){
            echo "<b>Selamat ... Anda lulus matakuliah Pemmrograman WEB mendapat nilai D</b><br><br>";
        }else {
            echo "<b>Maaf ... Anda harus mengulang matakuliah ini</b><br><br>";
        };
        

            echo "<h2>############### Batas if, elseif dan else #################</h2>";    
        
        $makananKesukaan = "mie goreng";

        switch($makananKesukaan){
            case "ayam goreng":
                echo "makanan kesukaanmu adalah ayam goreng<br><br>";
                    break;
            case "nasi goreng":
                echo "makanan kesukaanmu adalah nasi goreng<br><br>";
                break;
            case "mie goreng":
                echo "makanan kesukaanmu adalah mie goreng<br><br>";
                break;
            default:
                echo "makanan kesukaan anda tidak diketahui<br><br>";
        }

        $kondisi1 = "rajin";
        $kondisi2 = "pinter";
        $kondisi3 = "hoki";
        $hasil = compact ('kondisi1', 'kondisi2', 'kondisi3');

        if($kondisi1 == "rajin" && $kondisi2 == "pinter" && $kondisi3 == "hoki"){
            echo "Anda telah menamatkan dunia";
        }else {
                echo "anda kurang beruntung";
        }

        echo "<br>";

        switch(true){
            case ($kondisi1 == "rajin" && $kondisi2 == "pinter" && $kondisi3 == "hoki");
                echo "Anda telah menamatkan dunia 95% masalah hidup anda telah selesai";
                break;
            default:
                echo "Anda kurang beruntung, usaha lebih keras";
                break;
        }   

    ?>
</body>
</html>