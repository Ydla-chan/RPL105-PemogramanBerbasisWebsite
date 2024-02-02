<?php 

$nama = "Gilang Bagus Ramadhan";
$nim  = 3311801026 ;

echo "Nilai Pemograman Web $nim - $nama <br>";

$nilai = 90 ;

switch (true) {
    case ($nilai > 90 ):
        echo "Nilainya A ,Pertahankan Lagi !!";
        break ; 
      case ($nilai <=90 && $nilai >= 85):
        echo "Nilainya B, Pertahankan Lagi !!";
        break ; 
        case ($nilai <= 85&& $nilai >= 50):
            echo "Nilainya C, Perlu Peningkatan Lagi !!";
            break ;
        case ($nilai <= 50&& $nilai >= 0):
                echo "Nilainya D ,Tingkatkan lagi";
                break ;
        default :
        echo "Perlu masukan nilai";
      }