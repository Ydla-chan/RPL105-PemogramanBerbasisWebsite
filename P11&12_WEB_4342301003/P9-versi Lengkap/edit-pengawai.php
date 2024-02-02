<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_GET['NP'])) {
    $NP = $_GET['NP'];

    $query = "SELECT * FROM pengawai WHERE NP = '$NP'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
        exit;
    }
} else {
    echo "Data Dosen tidak ditemukan";
    exit;
}

if (isset($_POST['submit'])) {
    $NP = $_POST['NP'];
    $nama = $_POST['nama'];
   $role = $_POST['role'];
    $gedung = $_POST['gedung'];


    $query = "UPDATE pengawai SET Nama = '$nama', role = '$role', gedung  = '$gedung' WHERE NP = '$NP'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Data Berhasil Di Perbarui !!!");  window.location.href = "view-pengawai.php";
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
    <title>Pembaruan Data Informasi Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Data Informasi Dosen</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="NP" class="form-label">Nomor Pengawai</label>
                <input type="text" class="form-control" id="NP" name="NP" value="<?= $data['NP']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Jabatan</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="Cleaning Service" <?php if ($data['role'] == 'Cleaning Service') echo 'selected'; ?>>Cleaning Service</option>
                    <option value="Pengamana Dalam"<?php if ($data['role'] == 'Pengamana Dalam') echo 'selected'; ?>>Pengaman Dalam</option>
                    <option value="Pustakawan"<?php if ($data['role'] == 'Pustakawan') echo 'selected'; ?>>Pustakawan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gedung" class="form-label">Tempat Penugasan</label>
                <select class="form-control" id="gedung" name="gedung" required>
                    <option value="Gedung Utama" <?php if ($data['gedung'] == 'Gedung Utama') echo 'selected'; ?>>Gedung Utama</option>
                    <option value="Tower A"<?php if ($data['gedung'] == 'Tower A') echo 'selected'; ?>>Tower A</option>
                    <option value="Workshop TPPU"<?php if ($data['gedung'] == 'Workshop TPPU') echo 'selected'; ?>>Workshop TPPU</option>
                    <option value="Technopark"<?php if ($data['gedung'] == 'Technopark') echo 'selected'; ?>>Technopark</option>
                    <option value="Gedung RTF"<?php if ($data['gedung'] == 'Gedung RTF') echo 'selected'; ?>>Gedung RTF</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="view-pengawai.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8+u0HTF5hYtO+YE03TW2nOTgDd6lUGT+5KuGQbhU+018kL5pVQVAAWT2w" crossorigin="anonymous"></script>
</body>

</html>
