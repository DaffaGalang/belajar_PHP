<?php

// var_dump(session_start());

session_start();

$_SESSION['id'] = "Galang";
$_SESSION['status'] = "Menikah";

// unset($_SESSION['id']);
// session_destroy();
if(isset($_SESSION['id'])){
    echo "Sesion sudah ada, session saat ini adalah " . $_SESSION['id']; 
    echo "<br>";
} else {
    echo "Session tidak ditemukan <br>";
}

if(isset($_SESSION['status'])){
    echo "Sesion ditemukan, session yang digunaka saat ini adalah " . $_SESSION['status'];
    echo "<br>";
} else {
    echo "Session Gone";
}
    
    // echo $_SESSION['status'];
    // session_destroy();
    // $_SESSION =[];

    // unset($_SESSION['id']);
    echo $_SESSION['id'];
    echo "<br>";
    echo $_SESSION['status'];
    echo "<br><br>";

    echo $_SERVER['SERVER_NAME']

?>