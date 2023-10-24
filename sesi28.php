<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
</head>
<body>
    <h1 bgcolor =#ffc107>Daftar Nilai</h1>

    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tanggal Lahir</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Kelas</td>
            <td>Nilai</td>
            <td>Hasil</td>
        </tr>
        <?php 
        $data = file_get_contents("data.json");
        $students = json_decode($data);
        foreach ($students as $student) {
         ?>
        <tr>
            <td> 
                <?php 
                ?>
            </td>
            <td> <?php echo $student -> nama ; ?></td>
            <td> <?php echo date('d F Y', strtotime($student -> tanggal_lahir)); ?></td>
            <td> 
                <?php
                $thn_skrg =date('Y');
                $tahun_lahir = date("Y", strtotime($student -> tanggal_lahir));
                $umur = $thn_skrg - $tahun_lahir;

                echo $umur;
                ?>
            </td>
            <td> <?php echo $student ->alamat; ?></td>
            <td> <?php echo $student -> kelas ?></td>
            <td> <?php echo $student -> nilai ?></td>
            <td> 
                <?php 
                    if ($student -> nilai >= 90) {
                        echo "A";
                    } elseif ($student -> nilai >= 80) {
                        echo "B";
                    }  elseif ($student -> nilai >= 70) {
                        echo "C";
                    } elseif ($student -> nilai >= 50) {
                        echo "D";
                    } 
                ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>