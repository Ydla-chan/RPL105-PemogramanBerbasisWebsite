<?php
include 'koneksi.php';
include 'navbar.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <br>
    <div class="container mt-5">
      <center>  <h2>Data Informasi Mahasiswa</h2> </center>
      <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $data['nim']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['kelas']; ?></td>
                        <td><?= $data['jurusan']; ?></td>
                        <td><?= $data['prodi']; ?></td>
                       
                        <td>
                            <a href="edit-mhs.php?nim=<?= $data['nim']; ?>" class="fas fa-edit bg-success p-2 text-white rounded">Edit </a>
                            <a href="hapus-mhs.php?nim=<?= $data['nim']; ?>" class="fas fa-trash-alt bg-danger p-2 text-white rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="tambah_mhs.php" class="btn btn-primary mb-3">Tambah Data</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8+uU9KL+ZI5B5ow2sBDYI5Pq4k3fZ5fM/w1p4FDOJw5erFpFwJ5baq5s5C6M" crossorigin="anonymous"></script>
</body>

</html>
