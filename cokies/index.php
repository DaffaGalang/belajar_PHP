<?php
$a = "Hallo";

setcookie("login", "kl2o97gtxre", time() + (86400 * 1), "/");

if(isset($_COOKIE['login'])){
    echo "Cookie ditemukan " . $_COOKIE['login'];
} else {
    echo "Cookie tidak ditemukan / Terjadi kesalahan";
}

echo "<br><br>";

setcookie("mhs", "A12.2021.06605", time() + (84600 * 1), "/");
if(isset($_COOKIE['mhs'])){
    echo "Cookie ditemuka, Cookie terbaca saat ini adalah " . $_COOKIE['mhs'];
} else {
    echo "Cookie Bermasalah";
}


echo "<br><br>";
//refresh materi if else dan isset empty
if(isset($a)){
    echo "veriabel a yang berisi " . $a . " sudah didefinisikan";
} else {
    echo "terdapat kesalahan";
}

echo "<br><br>";

?>



