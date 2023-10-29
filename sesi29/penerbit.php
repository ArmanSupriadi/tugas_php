<?php 
    include "config.php";
    $query = mysqli_query($con, "SELECT id_penerbit, nama_penerbit, telp, alamat FROM penerbit");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerbit</title>
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
                <h3>Data Penerbit</h3>
                    <table class="table table-striped" >
                        <tr>
                            <td width="50px">No</td>
                            <td width="100px">ID Penerbit</td>
                            <td width="100px">Nama Penerbit</td>
                            <td width="100px">Telepon</td>
                            <td width="100px">Alamat</td>
                        </tr>
                        <?php if(mysqli_num_rows($query)>0) { ?>
                            <?php $no = 1;
                                while ($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["id_penerbit"];?></td>
                                <td><?php echo $data["nama_penerbit"];?></td>
                                <td><?php echo $data["telp"];?></td>
                                <td><?php echo $data["alamat"];?></td>
                            </tr>
                        <?php $no++; }?>
                        <?php }  ?>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>
