<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_GET['kode_matkul'])) {
    $kode_matkul = $_GET['kode_matkul'];

    $query = "SELECT * FROM jadwal WHERE kode_matkul = '$kode_matkul'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
        exit;
    }
} else {
    echo "NIM tidak ditemukan";
    exit;
}

if (isset($_POST['submit'])) {
    $kode_matkul = $_POST['kode_matkul'];
    $matkul = $_POST['matkul'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $jam = $_POST['jam'];
    $ruang = $_POST['ruang'];
    $dp = $_POST['dp'];

    $query = "UPDATE jadwal SET tanggal = '$tanggal', jam = '$jam',matkul='$matkul', kode_matkul = '$kode_matkul',ruang = '$ruang', dp = '$dp' WHERE kode_matkul = '$kode_matkul'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
	alert("Pembaruan Data Berhasil Dilakukan");  window.location.href = "view-jdwl.php";
</script>';
    } else {
        echo "Gagal mengupdate data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Data Mahasiswa</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="kode_matkul" class="form-label">Kode mata kuliah </label>
                <input type="text" class="form-control" id="kode_ matkul" name="kode_matkul" value="<?= $data['kode_matkul']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="matkul" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" id="matkul" name="matkul" value="<?= $data['matkul']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pembelajaran</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Waktu Pembelajaran</label>
                <input type="time" class="form-control" id="jam" name="jam" value="<?= $data['jam']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ruang" class="form-label">Ruangan Pembelajaran</label>
                <input type="text" class="form-control" id="ruang" name="ruang" value="<?= $data['ruang']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="dp" class="form-label">Dosen Pengajar</label>
                <input type="text" class="form-control" id="dp" name="dp" value="<?= $data['dp']; ?>" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="view-jdwl.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/boot
