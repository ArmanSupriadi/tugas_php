<?php 
    include "config.php";
    $query = mysqli_query($con, "SELECT isbn,judul,tahun,nama_pengarang,nama_penerbit FROM buku JOIN pengarang ON buku.id_pengarang = pengarang.id_pengarang
    JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center  mb-5 mt-5">
                <a href="index.php">Data Anggota</a>|
                <a href="buku.php">Data Buku</a>|
                <a href="pengarang.php">Data Pengarang</a>|
                <a href="penerbit.php">Data Penerbit</a>
            </div>
            <div class="col-md-12">
                <h3>Data Buku</h3>
                    <table class="table table-striped" >
                        <tr>
                            <td width="50px">No</td>
                            <td width="100px">ISBN</td>
                            <td width="100px">Judul Buku</td>
                            <td width="100px">Tahun</td>
                            <td width="100px">Nama Pengarang</td>
                            <td width="100px">Nama Penerbit</td>
                        </tr>
                        <?php if(mysqli_num_rows($query)>0) { ?>
                            <?php $no = 1;
                                while ($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["isbn"];?></td>
                                <td><?php echo $data["judul"];?></td>
                                <td><?php echo $data["tahun"];?></td>
                                <td><?php echo $data["nama_pengarang"];?></td>
                                <td><?php echo $data["nama_penerbit"];?></td>
                            </tr>
                        <?php $no++; }?>
                        <?php }  ?>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>
