<?php
    //Nomor 1
    $nomor =10;

    if ($nomor % 2 == 0){
        echo "Bilangan Genap <br>";
    } else {
        echo "Bilangan Ganjil <br>";
    }


    //Nomor 2
    $tahun = 2000;

    if ($tahun % 400 == 0) {
        echo " Tahun Kabisat <br>";
    } else if ($tahun % 100 == 0) {
        echo "Bukan Tahun Kabisat <br>";
    }else if ($tahun % 4 == 0) {
        echo " Tahun Kabisat <br>";
    } else {
    echo " Bukan Tahun Kabisat <br> ";
    }


    //Nomor 3
    $nilai =59;

    if ($nilai >= 90) {
        echo "Grade A";
    } else if ($nilai >= 80) {
        echo "Grade B";
    }else if ($nilai >= 70) {
        echo "Grade C";
    } else if ($nilai >= 60) {
        echo "Grade D";
    } else {
        echo "Grade E";
    }
 ?>

