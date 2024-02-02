<?php 

echo "Variabel didalam PHP <br />";

$makanan_pokok = "Nasi" ;

echo "Deklarasi awal = " .$makanan_pokok. "<br />";

$makanan_pokok = "Roti" ;

echo "Setelah diganti ".$makanan_pokok. "<br />";

echo "<br />";

echo "Konstanta didalam PHP <br />";

// Mendefinisikan Konstanta 
define ("MAKANAN_POKOK","NASI");

// Mengakses
print "Deklarasi Awal = ".MAKANAN_POKOK. "<br />";

define ("MAKANAN_POKOK" , "ROTI");

print "Setelah diganti = ".MAKANAN_POKOK. "<br />";
?>
