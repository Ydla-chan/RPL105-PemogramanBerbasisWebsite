<?php 

// Menyimpan data kedalam variable 
$nama = "Gilang Bagus Ramadhan" ;
$nim  = 3311801026;
$Jurusan = "Teknik Informatika";
$makanan_favorit = ['Nasi Goreng ','Sate'];
$nilai_matakuliah = ['Basis Data' => 90 , 'Pemograman Web' => 100];


// Menampilkan data 
echo $nama; echo $nim; echo $Jurusan;
echo $makanan_favorit; echo $nilai_matakuliah;

echo "<br> <br>";  echo "print_r";echo "<br>";

// Tipe data dengan mengunakan print_r
print_r ($nama); print_r ($nim); print_r ($Jurusan);
print_r ($makanan_favorit); print_r ($nilai_matakuliah);


echo "<br> <br>"; echo "var_dump()";  echo "<br> ";

// Tipe data dengan mengunakan Var dump
var_dump ($nama); var_dump ($nim); var_dump ($Jurusan);
var_dump ($makanan_favorit); var_dump ($nilai_matakuliah);

?>