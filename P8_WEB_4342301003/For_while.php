<?php 

echo "Peluncuran Rokect " ;

for ($i = 3 ; $i >=0 ; $i--){
    if ($i == 0){
        echo "Meluncur !!!! <br />";
    } else {
        echo "<br /> ".$i."<br />";
    }
}

echo "<br /> ";
echo "segitiga siku <br />";
$i = 5 ; 
while ($i > 0){
    for ($j = 0 ; $j < $i; $j++){
        print_r ("*");
    }
    echo '<br>';
    $i --;
}
?>