<?php 

//Nomor 1
for($a=1;$a<=1;$a++)
{
    for($b=1;$b<=10;$b++)
    {
    $total=$a*$b;
    echo "<p> $a x $b=$total";
    }
}

echo "<hr>";

//Nomor 2
for ($i=0; $i < 10; $i++) { 
    for ($b=10; $b > $i ; $b--) { 
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";


//Nomor 3
for ($c=0; $c < 10; $c++) { 
    for ($d=0; $d < $c ; $d++) { 
        echo $d;
    }
    echo "<br>";
}
?>