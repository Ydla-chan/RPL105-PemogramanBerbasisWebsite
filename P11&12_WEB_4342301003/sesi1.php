<?php
// memulai sessi
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 1 </title>
</head>
<body>
    <?php
    // mendefinisikan variabel sesi
    $_SESSION["username"] = "admin";
    $_SESSION["password"] = "admin123";

    echo "variabel sesi telah di ciptakan ";
    echo "<h2>cek session klik<a href='sesi2.php'>disini</a></h2>";
    ?>
</body>
</html>