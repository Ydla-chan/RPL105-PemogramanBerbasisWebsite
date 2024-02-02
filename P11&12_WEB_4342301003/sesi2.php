<?php
session_start();
$user = $_SESSION["username"];
$pass = $_SESSION["password"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 2 </title>
</head>
<body>
    <?php   
    // Echo variabel sesi  yang telah dibuat sebelumnya 
    echo "username : $user <br>";
    echo "password : $pass <br>";

    echo "<h2>cek session klik<a href='sesi3.php'>disini</a></h2>";
    ?>
</body>
</html>