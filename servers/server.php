<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>

<form action="" method="post">
    <label for="name"> Nama </label>
    <input type="text" name="name" id="name">
</form>
    
</body>
</html>

<?php
    echo $_POST["name"];
?>