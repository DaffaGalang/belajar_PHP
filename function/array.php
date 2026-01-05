<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    
    <?php
    // Declarate Variabel

      // Basic array
      $arr = [0001,'Daffa Galang','A12.2021.06605','Sistem Informasi',2021];

      //Array assotiation
      $arrU = [
        "Daffa Galang" => 22,
        "Jihad Sawung" => 20,
        "Sarip" => 14
      ];

      // Array assotiation
      $ukur = [
        "benda" => "Cm",
        "jalan" => "Km",
        "dalam" => "M",
        "volum" => "Liter"
      ];

      // Array multidimention
      $univ = [
        ["UDINUS","6 Fakultas","873 Mahasiswa","325 Dosen","Akreditasi Unggul"],
        ["UNES","12 Fakultas","1320 Mahasiswa","435 Dosen","Akreditasi Unggul"],
        ["USM","7 Fakultas","593 Mahasiswa","298 Dosen","Akreditasi A"],
        ["UPGRIS","5","5 Fakultas","428 Mahasiswa","198 Dosen","Akreditasi A"] //nambah 1 data baru buat belajar
      ];


      // Executor
      echo "Hello nama saya " .$arr[1] . "<br>";
      echo "Umur saya adalah " .$arrU["Daffa Galang"]. " tahun<br>";

      echo "Hallo nama saya " . $arr[1] . " saya mahasiswa " . $univ[0][0] .". Saya salah satu dari " .
      $univ[0][2] . " yang ada dikampus saya. Jarak kost ke kampus saya adalah 19 " . $ukur["jalan"]. "<br>";

      if(in_array("A12.2021.06605", $arr)){
        echo "Data terdapat pada aray";
      } else{
        echo "Data tidak ditemukan";
      }

      echo "<br> Saya " .$arr[1] . ", saya sedang bekerja di pemerintahan dan saya alumni kampus " . $univ[0][0] . " angkatan tahun " . $arr[4] . "<br>";

      echo "saya berkuliah di " . $univ[0][0] . " pada jurusan " . $arr[3] . " dan NIM saya adalah " . $arr[2] . ".<br> Jarak antara kost dan kampus saya adala " . $univ[3][1] . $ukur["jalan"] . "<br>";

      
    ?>

</body>
</html>