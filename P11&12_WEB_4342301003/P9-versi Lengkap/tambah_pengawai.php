<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_POST['submit'])) {
    $NP = $_POST['NP'];
    $nama = $_POST['nama'];
    $role = $_POST['role'];
    $gedung = $_POST['gedung'];

    $query = "INSERT INTO pengawai (NP, nama, role,gedung) VALUES ('$NP', '$nama', '$role', '$gedung')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Data Pengawai Berhasil Ditambahkan !!!");  window.location.href = "view-pengawai.php";
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
    <title>Tambah Data Pengawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Data Pengawai</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="NP" class="form-label">Nomor Karyawan</label>
                <input type="number" pattern="[0-9] {10}" maxlength="10" class="form-control" id="NP"  placeholder=" Masukan Nomor Pengawai"name="NP" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Posisi Perkerjaan</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="" >Posisi kerja yang diambil</option>
                    <option value="Cleaning Service">Cleaning Service</option>
                    <option value="Pengamana Dalam">Pengaman Dalam</option>
                    <option value="Pustakawan">Pustakawan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gedung" class="form-label">Tempat Penugasan</label>
                <select class="form-control" id="gedung" name="gedung" required>
                    <option value="" >Pilih Tempat Penugasan</option>
                    <option value="Gedung Utama">Gedung Utama</option>
                    <option value="Tower A">Tower A</option>
                    <option value="Workshop TPPU">Workshop TPPU</option>
                    <option value="Technopark">Technopark</option>
                    <option value="Gedung RTF">Gedung RTF</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="view-pengawai.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8+uU9KL+ZI5B5ow2sBDYI5Pq4k3fZ5fM/w1p4FDOJw5erFpFwJ5baq5s5C6M" crossorigin="anonymous"></script>
</body>

</html>
