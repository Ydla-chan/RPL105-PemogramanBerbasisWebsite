<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_POST['submit'])) {
    $kode_matkul = $_POST['kode_matkul'];
    $matkul = $_POST['matkul'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $jam = $_POST['jam'];
    $ruang = $_POST['ruang'];
    $dp = $_POST['dp'];

    $query = "INSERT INTO jadwal (tanggal, jam, matkul, kode_matkul,ruang,dp) VALUES ('$tanggal', '$jam', '$matkul', '$kode_matkul', '$ruang','$dp')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("jadwal Perkuliah Berhasil Ditambahkan !!!");  window.location.href = "view-jdwl.php";
    </script>';
    } else {
        echo "Gagal menambah data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah jadwal Perkuliahan</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="kode_matkul" class="form-label">Kode Mata Kuliah</label>
                <input type="text"  class="form-control" id="kode_matkul" name="kode_matkul" placeholder="Masukan kode Mata Kuliah" required>
            </div>
            <div class="mb-3">
                <label for="matkul" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" id="matkul" name="matkul" placeholder="Masukan Nama Mata Kuliah" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pembelajaran</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Waktu Pembelajaran</label>
                <input type="time" class="form-control" id="jam" name="jam" required>
            </div>
            <div class="mb-3">
                <label for="ruang" class="form-label">Ruang Pembelajaran</label>
                <input type="text   " class="form-control" id="ruang" name="ruang" placeholder="Masukan Nama Ruang" required>
            </div>
            <div class="mb-3">
                <label for="dp" class="form-label">Dosen Pengajaran</label>
                <input type="text" class="form-control" id="dp" name="dp" placeholder="Masukan Nama Dosen" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="view-jdwl.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8+uU9KL+ZI5B5ow2sBDYI5Pq4k3fZ5fM/w1p4FDOJw5erFpFwJ5baq5s5C6M" crossorigin="anonymous"></script>
</body>

</html>
