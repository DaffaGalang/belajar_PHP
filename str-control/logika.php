<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = true;
        $b = true;
        $c = false;

        var_dump($a && $b); echo "<br>"; //Kedua variabelnya harus bernilai true agar outputnya True
        var_dump($a || $c); echo "<br>"; // Hanya butuh satu variabel saja yang bernilai true  agar outputnya = True
        var_dump(!$b); echo "<br>"; // membalikan nilai sebuah variael = membalikan nilai sebuah variabel
        var_dump($a xor $b); echo "<br>"; // Salah satu variabelnya harus bernilai true  agar outputnya = True

    ?>
</body>
</html>