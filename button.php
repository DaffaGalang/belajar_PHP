<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tebak Umur</title>
    <style>
        body {
            margin: 0;
            height: 100vh; /* Agar tinggi body sama dengan tinggi layar */
            display: flex;
            justify-content: center; /* Horizontal center */
            align-items: center;     /* Vertical center */
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        input[type="number"],
        input[type="submit"] {
            margin: 8px 0;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

    <!-- FORM 3 -->
    <form method="POST">
        <label>Tebak Umur Orang Pertama</label><br>
        <input type="number" name="umurDaffa" required><br>

        <label>Tebak Umur Orang Kedua</label><br>
        <input type="number" name="umurJihad" required><br><br>

        <input type="submit" name="umur" value="Cek Status"><br><br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["umur"])) {
            $umurDaffa = (int) $_POST["umurDaffa"];
            $umurJihad = (int) $_POST["umurJihad"];

            if($umurDaffa == $umurJihad) {
                echo "Orang Pertama dan Kedua memiliki Umur yang Sama<br><br>";
            } elseif($umurDaffa >= $umurJihad) {
                echo "Orang Pertama Lebih Tua <br><br>";
            } else {
                echo "Orang Kedua Lebih Tua <br><br>";
            }
        }    
        ?>
    </form>

</body>
</html>
