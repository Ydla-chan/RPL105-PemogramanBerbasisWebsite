<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_GET['kode_matkul'])) {
    $kode_matkul = $_GET['kode_matkul'];

    $query = "DELETE FROM jadwal WHERE kode_matkul = '$kode_matkul'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Jadwal Mata Kuliah Berhasil Di hapus !!!");  window.location.href = "view-jdwl.php";
    </script>';
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "NIM tidak ditemukan";
}
?>
