<?php
session_start();
if(!isset($_SESSION["name"])){
    header("Location: admin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
</head>
<body>

    <h1>Selamat Datang Admin <?= htmlspecialchars($_SESSION["name"]); ?></h1>

    <p><a href="login.php">Logout</a></p>
    
</body>
</html>

