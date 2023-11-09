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

        $id_penerbit = $_GET['id_penerbit'];

        $penerbitt = mysqli_query($con, "SELECT * FROM penerbit WHERE id_penerbit ='$id_penerbit'");


        foreach ($penerbitt as $penerbit) {
            $id_penerbit = $penerbit['id_penerbit'];
            $nama_penerbit = $penerbit['nama_penerbit'];
            $email = $penerbit['email'];
            $telp = $penerbit['telp'];
            $alamat = $penerbit['alamat'];
        }
    ?>
<body>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-5">Edit Pengarang</h3>
            <form action="proses_edit_pener.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
                <table class="table">
                    <tr>
                        <td>ID Penerbit</td>
                        <td><input type="text" name="id_penerbit" class="form-control" autocomplete="off" value="<?php echo $id_penerbit;?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Penerbit</td>
                        <td><input type="text" name="nama_penerbit" class="form-control" autocomplete="off" value="<?php echo $nama_penerbit;?>"></td>
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