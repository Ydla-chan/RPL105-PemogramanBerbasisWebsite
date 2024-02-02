<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_GET['NP'])) {
    $NP = $_GET['NP'];

    // Perform the deletion query
    $query = "DELETE FROM pengawai WHERE NP = '$NP'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Data Pengawai Berhasil Di hapus !!!");  window.location.href = "view-pengawai.php";
    </script>';
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "NIK tidak ditemukan";
}

?>
