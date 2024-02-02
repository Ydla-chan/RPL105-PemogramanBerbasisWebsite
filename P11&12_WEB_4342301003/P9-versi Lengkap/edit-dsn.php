<?php
include 'koneksi.php';


if (isset($_GET['NIK'])) {
    $NIK = $_GET['NIK'];

    $query = "SELECT * FROM dosen WHERE NIK = '$NIK'";
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
    $NIK = $_POST['NIK'];
    $nama = $_POST['nama'];
    $email = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];
    $unit_kerja =$_POST['unit_kerja'];
    $prodi =$_POST['prodi'];

    $query = "UPDATE dosen SET Nama = '$nama', email = '$email', jabatan = '$jabatan',unit_kerja='$unit_kerja' ,prodi = '$prodi' WHERE NIK = '$NIK'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Data Berhasil Di Perbarui !!!");  window.location.href = "view-dsn.php";
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
                <label for="NIK" class="form-label">NIK</label>
                <input type="text" class="form-control" id="NIK" name="NIK" value="<?= $data['NIK']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['Nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Email</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jabatan</label>
                <select class="form-control" id="jabatan" name="jabatan" required>
                <option value="Dosen Pengajar"<?php if ($data['jabatan'] == 'Dosen Pengajar') echo 'selected'; ?>>Dosen Pengajar</option>
                    <option value="Kepala Program Studi"<?php if ($data['jabatan'] == 'Kepala Program Studi') echo 'selected'; ?>>Kepala Program Studi</option>
                    <option value="Kepala Jurusan"<?php if ($data['jabatan'] == 'Kepala Jurusan') echo 'selected'; ?>>Kepala Jurusan </option>
                    <option value="Assisten Dosen"<?php if ($data['jabatan'] == 'Assisten Dosen') echo 'selected'; ?>>Assisten Dosen </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="unit_kerja" class="form-label">Unit Kerja</label>
                <select class="form-control" id="unit_kerja" name="unit_kerja" required>
                    <option value="Teknik Informatika" <?php if ($data['unit_kerja'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                    <option value="Teknik Elektronika" <?php if ($data['unit_kerja'] == 'Teknik Elektronika') echo 'selected'; ?>>Teknik Elektronika</option>
                    <option value="Teknik Mesin"<?php if ($data['unit_kerja'] == 'Teknik Mesin') echo 'selected'; ?>>Teknik Mesin</option>
                    <option value="Manajemen Bisnis"<?php if ($data['unit_kerja'] == 'Manajemen Bisnis') echo 'selected'; ?>>Manajemen Bisnis</option>
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
            <a href="view-dsn.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8+u0HTF5hYtO+YE03TW2nOTgDd6lUGT+5KuGQbhU+018kL5pVQVAAWT2w" crossorigin="anonymous"></script>
</body>

</html>
