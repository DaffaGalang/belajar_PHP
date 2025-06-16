<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hendling</title>
</head>
<body>
    
    <!-- <form action="aye.php" method="$_GET">
        <label for="namaLengkap">Nama Lengkap</label><br>
        <input type="test" id="namaLengkap" name="namaLengkap"><br><br>

        <label for="ttl">Tempat Tanggal Lahir</label><br>
        <input type="test" id="ttl" name="ttl"><br><br>

        <input type="submit" value="kirim"><br><br>
    </form> -->

    <form action="aye.php" method="POST">
        <label for="name">Nama</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="ttl">Tanggal Lahir</label><br>
        <input type="text" id="ttl" name="ttl"><br><br>

        <label for="email">Email</label><br> 
        <input type="text" id="email" name="email"><br><br>
        <!-- type"email" membantu browser user untuk mengisi email sesuai ketemtuann penulisan
         dan apabila ingin mencoba untuk melihat cara kerja validasai email pada php maka ganti type menjadi "text "--> 

        <input type="submit" value="Kirim">
    </form>

    <!-- test koment -->


</body>
</html>