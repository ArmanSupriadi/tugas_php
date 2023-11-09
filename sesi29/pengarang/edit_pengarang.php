<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengarang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
    <?php 
        include "../config/config.php";

        $id_pengarang = $_GET['id_pengarang'];

        $pengarangg = mysqli_query($con, "SELECT * FROM pengarang WHERE id_pengarang ='$id_pengarang'");


        foreach ($pengarangg as $pengarang) {
            $id_pengarang = $pengarang['id_pengarang'];
            $nama_pengarang = $pengarang['nama_pengarang'];
            $email = $pengarang['email'];
            $telp = $pengarang['telp'];
            $alamat = $pengarang['alamat'];
        }
    ?>
<body>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-5">Edit Pengarang</h3>
            <form action="proses_edit_pengar.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
                <table class="table">
                    <tr>
                        <td>ID Pengarang</td>
                        <td><input type="text" name="id_pengarang" class="form-control" autocomplete="off" value="<?php echo $id_pengarang;?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Pengarang</td>
                        <td><input type="text" name="nama_pengarang" class="form-control" autocomplete="off" value="<?php echo $nama_pengarang;?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"  class="form-control" value="<?php echo $email;?>"></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><input type="number" name="telp"  class="form-control" value="<?php echo $telp;?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat"  class="form-control" rows="5"><?php echo $alamat;?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input  class="btn btn-primary" type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>