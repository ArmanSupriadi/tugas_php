<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <?php
        include "../config/config.php";

        $books = mysqli_query($con, "SELECT * FROM penerbit");
        
    ?>
    <?php 
        include "../config/config.php";

        $pengarangg = mysqli_query($con, "SELECT * FROM pengarang");
    ?>
    <?php 
        include "../config/config.php";

        $katalogg = mysqli_query($con, "SELECT * FROM katalog");
    ?>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-5">Tambah Data Buku</h3>
            <form action="proses_tambah_buku.php" method="post">
                <table class="table">
                    <tr>
                        <td>ISBN</td>
                        <td><input type="text" name="isbn" class="form-control" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td><input type="text" name="judul"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td><input type="text" name="tahun"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nama Penerbit</td>
                        <td>
                        <select name="id_penerbit" class="form-control">
                        <option selected>Pilih Penerbit</option>
                            <?php foreach ($books as $book) {?>
                                <option value="<?php echo $book['id_penerbit'];?>"><?php echo $book['id_penerbit'] .' - '.$book['nama_penerbit'] ?></option>
                            <?php } ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Pengarang</td>
                        <td>
                        <select name="id_pengarang" class="form-control">
                            <option selected>Pilih Pengarang</option>
                            <?php foreach ($pengarangg as $pengarang) {?>
                                <option value="<?php echo $pengarang['id_pengarang'];?>"><?php echo $pengarang['id_pengarang'] .' - '.$pengarang['nama_pengarang'] ?></option>
                            <?php } ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Katalog</td>
                        <td>
                        <select name="id_katalog" class="form-control">
                            <option selected>Pilih Katalog</option>
                            <?php foreach ($katalogg as $katalog) {?>
                                <option value="<?php echo $katalog['id_katalog'];?>"><?php echo $katalog['id_katalog'] .' - '.$katalog['nama'] ?></option>
                            <?php } ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>QTY Stok</td>
                        <td><input type="text" name="qty_stok"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Harga Pinjam</td>
                        <td><input type="text" name="harga_pinjam" class="form-control"></td>
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