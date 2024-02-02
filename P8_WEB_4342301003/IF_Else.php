<?php 

$nama = "Gilang Bagus Ramadhan";
$nim  = 3311801026 ;

echo "Nilai Pemograman Web $nim - $nama <br>";

$nilai = 90 ;

if ($nilai > 90) {
    echo "Nilai nya A, Pertahanakan !!";
} else if ( $nilai <= 90 && $nilai >=85){
    echo "Nilainya B, Pertahankan !!";
}else if ( $nilai <= 85 && $nilai >=50){
    echo "Nilainya C, Tingkatkan Lagi !!";
}else if ( $nilai <= 50 && $nilai >=0){
    echo "Nilainya D, Tingkatkan lagi  !!";
}else{
    echo "Nilai Nya E, Tingkatkan lagi !!";
}


?>