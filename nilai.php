<?php 
$nilai = 75;

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
    case (($nilai >= 0)):
        echo "Grade D <br>";
        break;
    default:
        echo "Grade E <br>";
        break;
        
}


?>