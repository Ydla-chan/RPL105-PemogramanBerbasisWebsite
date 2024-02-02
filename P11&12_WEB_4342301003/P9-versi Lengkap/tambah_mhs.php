<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO mahasiswa (nim, nama, alamat, jurusan,prodi) VALUES ('$nim', '$nama', '$alamat', '$jurusan','$prodi')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script type="text/javascript">
        alert("Data Mahasiswa Berhasil Ditambahkan !!!");  window.location.href = "view-mhs.php";
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
        <h2>Tambah Data Mahasiswa</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" pattern="[0-9] {10}" maxlength="10" class="form-control" id="nim" name="nim"  placeholder="Masukan Nomor Induk Mahasiswa Anda "required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Rumah</label>
                <input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Masukan Alamat Rumah anda"required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Kelas</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="" >Kelas yang di ambil</option>
                    <option value="pagi">pagi</option>
                    <option value="malam">Malam</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan" required>
                    <option value="" >Pilih Jurusan yang diambil</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Elektronika">Teknik Elektronika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Manajemen Bisnis">Manajemen Bisnis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <select class="form-control" id="prodi" name="prodi" required>
                    <option value="" >Pilih Program Studi yang diambil</option>
                    <option value="" disabled >- Manajemen Bisnis -</option>
                    <option value=" D2 - Jalur Cepat Distribusi Barang">  D2 - Jalur Cepat Distribusi Barang </option>    
                    <option value="D3-Akuntasi"> D3 - Akuntasi </option>
                    <option value="D4 - Akuntasi Manajerial">D4 - Akuntasi Manajerial </option>
                    <option value="D4 - Administasi Bisnis Terapan">D4 - Administrasi Bisnis Terapan</option>
                    <option value="D4 - Administrasi Bisnis Terapan Internationl Class">D4 - Administrasi Bisnis Terapan (Internationl Class) </option>
                    <option value="" disabled >- Teknik Elektronika -</option>
                    <option value=" D3 - Teknik Elektronika Manufaktur">  D3 - Teknik Elektronika Manufaktur </option>  
                    <option value=" D3 - Teknik Instrumentasi ">  D3 - Teknik Instrumentasi  </option> 
                    <option value="D4 - Teknologi Rekayasa Elektronika" > D4 - Teknologi Rekayasa Elektronika </option>
                    <option value="D4 - Teknik Mekatronika " > D4 - Teknik Mekatronika  </option>
                    <option value="D4 - Teknologi Rekaya pembangkit Energi  " > D4 - Teknologi Rekaya pembangkit Energi   </option>
                    <option value="D4 - Teknik Robotika  " > D4 - Teknik Robotika   </option>
                    <option value="" disabled >- Teknik Informatika -</option>
                    <option value=" D3 - Informatika ">  D3 - Informatika  </option>
                    <option value=" D3 - Teknologi Geomatika ">  D3 - Teknologi Geomatika   </option>
                    <option value=" D4 - Teknologi Rekayasa Multimedia   ">  D4 - Teknologi Rekayasa Multimedia    </option>
                    <option value=" D4 - Rekayasa Keamanan Siber  ">  D4 - Rekayasa Keamanan Siber</option>
                    <option value=" D4 - Teknologi rekayasa Perangkat Lunak  ">  D4 - Teknologi rekayasa Perangkat Lunak   </option>
                    <option value=" " disabled> - Teknik Mesin - </option>
                    <option value=" D3 - Teknik Mesin  ">  D3 - Teknik Mesin   </option>
                    <option value=" D3 - Teknik Perawatan Pesawat udara  "> D3 - Teknik Perawatan Pesawat udara   </option>
                    <option value=" D4 - Teknologi Rekaya Konstruksi Perkapalan   ">  D4 - Teknologi Rekaya Konstruksi Perkapalan    </option>
                    <option value=" D4 - Teknologi Rekayasa Pengelasan fabrikasi">  D4 - Teknologi Rekayasa Pengelasan fabrikasi </option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="view-mhs.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8+uU9KL+ZI5B5ow2sBDYI5Pq4k3fZ5fM/w1p4FDOJw5erFpFwJ5baq5s5C6M" crossorigin="anonymous"></script>
</body>

</html>
