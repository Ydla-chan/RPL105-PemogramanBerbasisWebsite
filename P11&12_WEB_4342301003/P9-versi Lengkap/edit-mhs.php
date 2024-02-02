<?php
include 'koneksi.php';
include 'cek-sesi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
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
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $prodi =  $_POST['prodi'];

    $query = "UPDATE mahasiswa SET nama = '$nama', alamat = '$alamat', jurusan = '$jurusan' , kelas = '$kelas', prodi = '$prodi' WHERE nim = '$nim'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
	alert("Pembaruan Data Berhasil Dilakukan");  window.location.href = "view-mhs.php";
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
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['nim']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Rumah </label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Kelas</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="Pagi"  <?php if ($data['kelas'] == 'Pagi') echo 'selected'; ?>>pagi</option>
                    <option value="Malam">Malam</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan" required>
                    <option value="Teknik Elektronika" <?php if ($data['jurusan'] == 'Teknik Elektronika') echo 'selected'; ?>>Teknik Elektronika</option>
                    <option value="Teknik Informatika" <?php if ($data['jurusan'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                    <option value="Teknik Mesin" <?php if ($data['jurusan'] == 'Teknik Mesin') echo 'selected'; ?>>Teknik Mesin</option>
                    <option value="Manajemen Bisnis" <?php if ($data['jurusan'] == 'Manajemen Bisnis') echo 'selected'; ?>>Manajemen Bisnis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <select class="form-control" id="prodi" name="prodi" required>
                    <option value="" disabled >- Manajemen Bisnis -</option>
                    <option value=" D2 - Jalur Cepat Distribusi Barang" <?php if ($data['prodi'] == ' D2 - Jalur Cepat Distribusi Barang') echo 'selected'; ?>>  D2 - Jalur Cepat Distribusi Barang </option>    
                    <option value="D3-Akuntasi" <?php if ($data['prodi'] == 'D3-Akuntasi') echo 'selected'; ?>> D3 - Akuntasi </option>
                    <option value="D4 - Akuntasi Manajerial" <?php if ($data['prodi'] == 'D4 - Akuntasi Manajerial') echo 'selected'; ?>>D4 - Akuntasi Manajerial </option>
                    <option value="D4 - Administasi Bisnis Terapan" <?php if ($data['prodi'] == 'D4 - Administasi Bisnis Terapan') echo 'selected'; ?>>D4 - Administrasi Bisnis Terapan</option>
                    <option value="D4 - Administrasi Bisnis Terapan Internationl Class" <?php if ($data['prodi'] == 'D4 - Administrasi Bisnis Terapan Internationl Class') echo 'selected'; ?>>D4 - Administrasi Bisnis Terapan (Internationl Class) </option>
                    <option value="" disabled >- Teknik Elektronika -</option>
                    <option value=" D3 - Teknik Elektronika Manufaktur" <?php if ($data['prodi'] == ' D3 - Teknik Elektronika Manufaktur') echo 'selected'; ?>>  D3 - Teknik Elektronika Manufaktur </option>  
                    <option value=" D3 - Teknik Instrumentasi "<?php if ($data['prodi'] == ' D3 - Teknik Instrumentasi ') echo 'selected'; ?>>  D3 - Teknik Instrumentasi  </option> 
                    <option value="D4 - Teknologi Rekayasa Elektronika" <?php if ($data['prodi'] == 'D4 - Teknologi Rekayasa Elektronika') echo 'selected'; ?> > D4 - Teknologi Rekayasa Elektronika </option>
                    <option value="D4 - Teknik Mekatronika " <?php if ($data['prodi'] == 'D4 - Teknik Mekatronika ') echo 'selected'; ?> > D4 - Teknik Mekatronika  </option>
                    <option value="D4 - Teknologi Rekaya pembangkit Energi  "<?php if ($data['prodi'] == 'D4 - Teknologi Rekaya pembangkit Energi ') echo 'selected'; ?> > D4 - Teknologi Rekaya pembangkit Energi   </option>
                    <option value="D4 - Teknik Robotika  "<?php if ($data['prodi'] == 'D4 - Teknik Robotika ') echo 'selected'; ?> > D4 - Teknik Robotika   </option>
                    <option value="" disabled >- Teknik Informatika -</option>
                    <option value=" D3 - Informatika " <?php if ($data['prodi'] == ' D3 - Informatika ') echo 'selected'; ?>>  D3 - Informatika  </option>
                    <option value=" D3 - Teknologi Geomatika "<?php if ($data['prodi'] == ' D3 - Teknologi Geomatika ') echo 'selected'; ?>>  D3 - Teknologi Geomatika   </option>
                    <option value=" D4 - Teknologi Rekayasa Multimedia"<?php if ($data['prodi'] == ' D4 - Teknologi Rekayasa Multimedia') echo 'selected'; ?>>  D4 - Teknologi Rekayasa Multimedia    </option>
                    <option value=" D4 - Rekayasa Keamanan Siber"<?php if ($data['prodi'] == ' D4 - Rekayasa Keamanan Siber') echo 'selected'; ?>>  D4 - Rekayasa Keamanan Siber</option>
                    <option value=" D4 - Teknologi rekayasa Perangkat Lunak" <?php if ($data['prodi'] == ' D4 - Teknologi rekayasa Perangkat Lunak') echo 'selected'; ?>>  D4 - Teknologi rekayasa Perangkat Lunak   </option>
                    <option value=" " disabled> - Teknik Mesin - </option>
                    <option value=" D3 - Teknik Mesin  " <?php if ($data['prodi'] == ' D3 - Teknik Mesin  ') echo 'selected'; ?>>  D3 - Teknik Mesin   </option>
                    <option value=" D3 - Teknik Perawatan Pesawat udara  "<?php if ($data['prodi'] == ' D3 - Teknik Perawatan Pesawat udara  ') echo 'selected'; ?>> D3 - Teknik Perawatan Pesawat udara   </option>
                    <option value=" D4 - Teknologi Rekaya Konstruksi Perkapalan"<?php if ($data['prodi'] == ' D4 - Teknologi Rekaya Konstruksi Perkapalan') echo 'selected'; ?>>  D4 - Teknologi Rekaya Konstruksi Perkapalan    </option>
                    <option value=" D4 - Teknologi Rekayasa Pengelasan fabrikasi"<?php if ($data['prodi'] == ' D4 - Teknologi Rekayasa Pengelasan fabrikasi') echo 'selected'; ?>>  D4 - Teknologi Rekayasa Pengelasan fabrikasi </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="view-mhs.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/boot
