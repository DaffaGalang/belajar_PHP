<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- <div class="calculator-conteiner">
        <h1>Kalkulator Sederhana</h1>

        <form action="index.php" class="calculator-form" method="post">
            <input type="number" name="num1", id="num1" placeholder="Inputan Angka Pertama">
            <input type="number" name="num2", id="num2" placeholder="Inputan Angka Kedua"> 

            <select name="opperator" id="oppertor">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">:</option>
            </select>

            <button type="submit" name="calculate" class="cal-btn"> = </button><br><br>
            
            <div> Hasil = </div>
        </form>
</div> -->

<div class="calculator-container">
    <h1>Kalkulator Sederhana</h1>

    <form action="index.php" class="calculator-form" method="post">
        <input type="number" name="num1" id="num1" placeholder="Angka Pertama" required> <br>
        <input type="number" name="num2" id="num2" placeholder="Angka Kedua" required> <br>

        <select name="operator" id="operator" required> <br>
            <option value="">Pilih Operasi</option>
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">×</option>
            <option value="bagi">÷</option>
        </select>

        <button type="submit" name="calculate" class="cal-btn">Hitung</button><br>

        <div class="hasil">Hasil =
        <?php
            if (isset($_POST['calculate'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];

                switch ($operator) {
                    case 'tambah': $result = $num1 + $num2; break;
                    case 'kurang': $result = $num1 - $num2; break;
                    case 'kali':   $result = $num1 * $num2; break;
                    case 'bagi':
                        $result = ($num2 != 0) ? $num1 / $num2 : 'Tidak bisa dibagi 0';
                        break;
                    default: $result = 'Operator tidak valid'; break;
                }

                echo "<strong>$result</strong>";
            }
            ?>
        </div>
    </form>
</div>

<?php
        // $num1 = $_GET["num1"];
        // $num2 = $_GET["num2"];

?>
    
</body>
</html>