<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik Individu 2</title>
</head>
<body>
    <?php 

        //Nomor 1
        for ($i=0; $i < 10; $i++) { 
            for ($a=0; $a < $i; $a++) { 
            echo "$a";
        }
        echo "<br>";
        }

        echo "<hr>";
    ?>

    <table border="1">
        <tr bgcolor ="#4287f5">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php
            for ($no = 1, $nm=1, $kls=10; $nm<=10, $kls>=1  ; $nm++, $kls--){
                if ($no % 2 == 0) {
                echo "<tr style = 'background-color:white'>";
                    echo "<td>$no</td>";
                    echo "<td>Nama Ke .$nm</td>";
                    echo "<td>Kelas .$kls</td>";
                echo "</tr>";
                }else {
                    echo "<tr style = 'background-color:gray'>";
                    echo "<td>$no</td>";
                    echo "<td>Nama Ke .$nm</td>";
                    echo "<td>Kelas .$kls</td>";
                echo "</tr>";
                }
        ?>

        <?php 
           $no++; }
        ?>
    </table>
</body>
</html>
