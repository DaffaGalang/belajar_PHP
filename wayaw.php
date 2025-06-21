<?php
$error = [];

if(isset($_POST['name']) && isset($_POST['nim']) && isset($_POST['semester']) && isset($_POST['matkul'])
&& !empty($_POST['name']) && !empty($_POST['nim']) && !empty($_POST['semester']) && !empty($_POST['matkul'])){
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $semester = $_POST['semester'];
    $matkul = $_POST['matkul'];
        echo "Nama saya adalah <b>" . htmlspecialchars($name) . "</b><br>";
        echo "NIM saya adalah <b>" . htmlspecialchars($nim) . "</b><br>";
        echo "Saya adalah mahasiswa semester  <b>" . htmlspecialchars($semester) . "</b><br>";
        echo "Matkul yang ingin ditambahkan adalah <b>" . htmlspecialchars($matkul) . "</b><br><br>";
} else {
    $errors[] = "Semua data harus diisi / isi data dengan benar <br>";
}

for ($k = 1; $k <= 4; $k++) {
    echo "Data ke-$k:<br>";
    echo "Nama     : " . htmlspecialchars($name) . "<br>";
    echo "NIM      : " . htmlspecialchars($nim) . "<br>";
    echo "Semester : " . htmlspecialchars($semester) . "<br>";
    echo "Matkul   : " . htmlspecialchars($matkul) . "<br><br>";
}
   


?>