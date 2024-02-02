<?php

// Inputan variabel
$nama_siswa = "aldy ";

// kode output PHP

echo "== Contoh Penggunaan Echo == <br />";
echo "Hello World !!";
echo "<br /> <br />";
echo "== Contoh Penggunaan print == <br />";
print 10.100;
echo "<br /> <br />";
echo "== Contoh Penggunaan Print_r == <br />";
print_r("Konniciha !!");
echo "<br /> <br />";
echo "== Contoh Penggunaan Var Dump == <br />";
var_dump ('aloha !!');


// mencoba pengunaan print_r   
$siswa = array(
    'nama' 		=> array ('Alfa', 'Beta', 'Charlie'),
    'jurusan' 	=> 'Informatika',
    'semester'	=> array (1, 3)
);
 
$result = print_r($siswa, true); 
echo '<pre>'; print_r($result); echo '</pre>';





echo "Penggunaan Arrray dengan petik satu <br />";
$name1 = "John";
$array1 = array('Hello, $name1');
print_r($array1);

echo "<br />";
echo "<br />";
$name2 = "John";
$array2 = array("Hello, $name2");
print_r($array2);

?>