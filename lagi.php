<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

    <?php

        function suratIzin (){
            echo "Mohon maaf, hari ini saya tidak dapat masuk kantor karena cuaca tidak mendukung<br>";
        }

        function tidakKerja (){
            echo "Mohon maaf, hari ini saya bukan hari kerja saya<br>";
        }

        $cuaca = "cerah";
        $jam = 7.15;
        $hari = ['senin','selasa','rabu','kamis','jumat'];
        $hari_skrng = "sabtu";

        if($cuaca == "cerah" && $jam <= 7.15 && in_array($hari_skrng, $hari)){
            echo "Saya akan pergi bekerja hari ini"; 
        } elseif(($cuaca == "berawan" || $cuaca == "mendung") && $jam >= 7.15 && in_array($hari_skrng, $hari)){
            echo "Saya akan pergi bekerja namun agak telat karena cuaca<br>"; 
            suratIzin(); 
        } elseif($cuaca == "hujan" && $jam >= 7.15 && in_array($hari_skrng, $hari)){
            echo "Saya kemungkin2an besar tidak pergi bekerja <br>"; 
            suratIzin();
        } else{
            echo "Saya tidak pergi bekerja hari ini <br>"; 
            tidakKerja();
        }
    ?>
    
</body>
</html>