<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Data Mahasiswa Berhasil Di hapus !!!");  window.location.href = "view-mhs.php";
    </script>';
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "NIM tidak ditemukan";
}
?>
