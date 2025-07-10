<?php
session_start();

if (isset($_POST["submit"])) {
    // Cek username dan password
    if ($_POST["username"] == "admint" && $_POST["password"] == "ahoy") {
        // Simpan nama ke session
        $_SESSION["name"] = $_POST["name"];
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Login</title>
</head>
<body>
    
  <h1>Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">User / Password Salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br><br>

        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br><br>

        <button type="submit" name="submit">Kirim</button>
    </form>

</body>
</html>