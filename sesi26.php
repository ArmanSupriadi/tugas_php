<?php

//Grade Nilai Switch case
/* $nilai = 75;

switch ($nilai) {
    case (($nilai >= 90)):
        echo "Grade A <br>";
        break;
    case (($nilai >=80)):
        echo "Grade B <br>";
        break;
    case (($nilai >=70)):
        echo "Grade C <br>";
        break;
    case (($nilai >=60)):
        echo "Grade D <br>";
        break;
    default:
        echo "Grade E <br>";
        break;
        
} */

//Nomor 1
for ($i=1; $i <=10 ; $i++) { 
    if ($i % 2 == 0) {
        echo "Bilangan Genap ".$i;
    } else {
        echo "Bilangan Ganjil ".$i;
    }
    echo "<br>";
}
echo "<hr>";
//Nomor 2
for ($t=2000; $t <=2023 ; $t++) { 
    if ($t % 400 == 0) {
        echo "Tahun Kabisat".$t;
    } elseif ($t % 100 == 0) {
        echo "Bukan Tahun Kabisat".$t;
    } elseif ($t % 4 == 0) {
        echo "Tahun Kabisat".$t;
    } else {
        echo "Bukan Tahun Kabisat".$t;
    }
    echo "<br>";
}
 echo "<hr>";

//Nomor 3
for ($b=9; $b >=1 ; $b--) { 
    for ($a=1; $a <= $b; $a++) { 
       echo "$a";
    }
    echo "<br>";
}
?>