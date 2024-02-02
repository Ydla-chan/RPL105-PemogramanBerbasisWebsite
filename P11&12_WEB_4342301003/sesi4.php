<?php
session_start();
// menghapus semua variabel sesi
session_unset();
// Menghancurkan sesi
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h3>Sesi Telah di hapus </h3>
</body>
</html>