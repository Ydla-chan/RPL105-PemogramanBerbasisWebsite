<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_GET['NIK'])) {
    $NIK = $_GET['NIK'];

    // Perform the deletion query
    $query = "DELETE FROM dosen WHERE NIK = '$NIK'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Data Dosen Berhasil Di hapus !!!");  window.location.href = "view-dsn.php";
    </script>';
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "NIK tidak ditemukan";
}

?>
