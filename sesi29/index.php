<?php 
    include "config.php";
    $query = mysqli_query($con, "SELECT * FROM anggota");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center  mb-5 mt-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Data Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buku.php">Data Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengarang.php">Data Pengarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penerbit.php">Data Penerbit</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <h3>Data Anggota</h3>
                    <table class="table table-striped" >
                        <tr>
                            <td width="50px">No</td>
                            <td width="100px">Nama</td>
                            <td width="100px">Username</td>
                        </tr>
                        <?php if(mysqli_num_rows($query)>0) { ?>
                            <?php $no = 1;
                                while ($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["nama"];?></td>
                                <td><?php echo $data["username"];?></td>
                            </tr>
                        <?php $no++; }?>
                        <?php }  ?>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>
