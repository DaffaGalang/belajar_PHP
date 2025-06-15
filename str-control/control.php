<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure control</title>
</head>
<body>
    <?php
        $nilai = 85;
        $kehadiran = 85;

        /* Have 4 Logical Operators
        and  (&&), or (||), xor (xor) dan not(!$a)
        */

        if($nilai >= 85 && $kehadiran >= 80) {
            echo "<b>Selamat ... Anda lulus dan mendapatkan nilai A</b><br>";
        } elseif($nilai >= 65 && $kehadiran >= 75) {
            echo "<b>Selamat ... Anda lulus matakuliah Pemmrograman WEB</b><br><br>";
        } else {
            echo "<b>Maaf ... Anda harus mengulang matakuliah ini</b><br><br>";
        };

            echo "<h2>############### Batas if, elseif dan else #################</h2>";    
        
        $makananKesukaan = "ayam goreng";

        switch($makananKesukaan){
            case "ayam goreng":
                echo "makanan kesukaanmu adalah ayam goreng<br><br>";
                    break;
            case "nasi goreng":
                echo "makanan kesukaanmu adalah nasi goreng<br><br>";
                break;
            default:
                echo "makanan kesukaan anda tidak diketahui<br><br>";
        }

    ?>
</body>
</html>