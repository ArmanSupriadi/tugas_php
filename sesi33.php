<?php 
//Nomor 1
echo "NOMOR 1<br><hr>";
$angka = array("satu", "dua", "tiga", "empat", "lima");
    $angkaa = array_reverse($angka);
        foreach ($angkaa as $n) {
            echo "$n <br>";
        }    
    

        echo "<br>";
//Nomor 2
echo "NOMOR 2<br><hr>";
$buah = array("apel", "mangga", "nanas", "jeruk");

    $jml_buah = count($buah);
    echo "<br> Terdapat $jml_buah buah";

    echo "<br>";
    echo "<br>";
//Nomor 3
echo "NOMOR 3 <br><hr>";
    $nilai = array("7", "3", "4", "9");
    $jml_nilai = array_sum($nilai);


        echo "<br> Totalnya adalah $jml_nilai";
        echo "<br>";
        echo "<br>";
//Nomor 4
echo "NOMoR 4<br><hr>";
for($a=1;$a<=1;$a++)
{
    for($b=1;$b<=10;$b++)
    {
    $total=$a*$b;
    echo "<p> $a x $b=$total";
    }
}

?>