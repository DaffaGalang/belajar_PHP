<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Materi</title>
</head>
<body>

    <h2>Test Buat Form</h2>
    <form action="join.php" method="post">
        <label for="id_pasien">Id Pasien</label>
        <input type="text" id="id_pasien" name="id_pasien"><br><br>

        <label for="nama_pasien">Nama Pasien</label>
        <input type="text" id="nama_pasien" name="nama_pasien"><br><br>

        <label for="jadwal">Jadwal Pemeriksaan</label>
        <input type="datetime-local" id="jadwal" name="jadwal"><br><br>

        <label for="no_hp">No HP</label>
        <input type="number" id="no_hp" name="no_hp"><br><br>

        <button type="submit" name="submit">Kirim</button>

    </form>
    
</body>
</html>