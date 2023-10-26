<?php
$nama = "Arman";
$tgb = 162;
$bb = 68;

$hasil = $bb / pow(1.62,2) ;
    if ($hasil <= 18.5) {
        echo "Halo, $nama. Nilai BMI anda adalah $hasil, anda termasuk Kurus";
    } elseif ($hasil <= 24.9) {
        echo "Halo, $nama. Nilai BMI anda adalah $hasil, anda termasuk Sedang";
    }elseif ($hasil <= 29.9) {
        echo "Halo, $nama. Nilai BMI anda adalah $hasil, anda termasuk Gemuk";
    } elseif ($hasil >= 30) {
        echo "Halo, $nama. Nilai BMI anda adalah $hasil, anda termasuk Obesitas";
    }
?>