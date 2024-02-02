<?php
session_start();
$username = $_SESSION["username"];
$pass = $_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 4</title>

</head>
<body>
    <?php   
    // Echo variabel sesi  yang telah dibuat sebelumnya
    echo "username : $username <br>";
    echo "password : $pass <br>";
    echo "<h2>cek session klik<a href='sesi4.php'>disini</a></h2>";
    ?>
</body>
</html>