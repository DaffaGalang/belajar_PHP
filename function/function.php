<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>

        <h2>Form Menghitung Luas Segitiga</h2>
            <form method="POST">
                Alas: <input type="number" name="alas" required><br><br>
                Tinggi: <input type="number" name="tinggi" required><br><br>
                Pembagi (biasanya 2): <input type="number" name="pembagi" value="2" required><br><br>
                <input type="submit" name="hitung" value="Hitung Luas">
            </form>
    
<?php

    if (isset($_POST['hitung'])) {
    $a = $_POST['alas'];
    $t = $_POST['tinggi'];
    $bg = $_POST['pembagi'];

    function SegitTigas($a, $t, $bg){
        return ($a * $t) / $bg;
    }

    $luasSegiTiga = SegitTigas($a, $t, $bg);
        echo "<h3>Luas segitiga adalah: $luasSegiTiga</h3>";
}

    function salam() {
        echo "assalamualaikum wr. wb mamank";
    }

    echo "A : co basalah dulu ko <br>";
    echo "B : "; salam(); echo "<br>";
    echo "A : nah bgtu kok klo mo mso rumah <br><br>";

    // ------------------------------BATASSSSSSSSS------------------------------------------

    function penjumlahan($a, $b){
        $hasil = $a + $b;
        echo "hasi penjumlahannya dari $a dan $b adalah $hasil <br><br>";
    }
    penjumlahan(21, 6);

    // ------------------------------BATASSSSSSSSS------------------------------------------

    // function SegitTigas($a, $t, $bg){
    //     return $a * $t / $bg;
    // }

    // $luasSegiTiga = SegitTigas(14, 23, 2);
    // echo "luas segitiga adalah $luasSegiTiga";

    function zakat($harta, $persenan){
        return ($harta * $persenan) / 100;
    }

    $zakatlMal = zakat(1000000, 2.5);
    echo "Zakat yang harus anda keluarkan adalah " . $zakatlMal . "<br>"; 

    for($g = 1; $g <= 10; $g++){
        echo "Saya memiliki kua kura $g <br>";
    }

    echo "<h1> ~~~~~~~ Batasss ~~~~~~~~</h1>";

    for($z = 1; $z <= 7; $z++){
        if($z == 4 ) {
            break;
        }echo "Ini adalah angka $z <br>";
    }

    function persegi($s){
        // bisa juga 'return  = $s*$s;' tanpa membuat variabel baru
        $luas =  $s*$s;
        return $luas;
    }

    echo persegi(4) . "<br><br>";

    function kucing(){
        echo "uyen";
    }

    for($v = 1; $v <= 5; $v++){
        echo kucing() . $v . "<br>";
    }

?>


</body>
</html>