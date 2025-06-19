<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="calculator-conteiner">
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
</div>

<?php
        // $num1 = $_GET["num1"];
        // $num2 = $_GET["num2"];

?>
    
</body>
</html>