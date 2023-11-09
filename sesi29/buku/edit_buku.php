<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<?php
include "../config/config.php";

$isbn = $_GET['isbn'];

$books = mysqli_query($con, "SELECT * FROM buku JOIN pengarang ON buku.id_pengarang = pengarang.id_pengarang
JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit 
JOIN katalog ON buku.id_katalog = katalog.id_katalog WHERE isbn='$isbn'");

foreach ($books as $book) {
    $isbn = $book['isbn'];
    $judul = $book['judul'];
    $tahun = $book['tahun'];
    $id_penerbit = $book['id_penerbit'];
    $id_pengarang = $book['id_pengarang'];
    $id_katalog = $book['id_katalog'];
    $qty_stok = $book['qty_stok'];
    $harga_pinjam = $book['harga_pinjam'];

}
?>

<body>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-5">Edit Data Anggota</h3>
            <form action="proses_edit_buku.php?isbn=<?php echo $isbn; ?>" method="post">
                <table class="table">
                    <tr>
                        <td>ISBN</td>
                        <td><input type="text" name="isbn" class="form-control" autocomplete="off" value="<?php echo $isbn; ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Judul Buku</td>
                        <td><input type="text" name="judul" class="form-control" value="<?php echo $judul; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td><input type="text" name="tahun" class="form-control" value="<?php echo $tahun; ?>"></td>
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
                            <?php foreach ($books as $book) {?>
                                <option value="<?php echo $book['id_pengarang'];?>"><?php echo $book['id_pengarang'] .' - '.$book['nama_pengarang'] ?></option>
                            <?php } ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                    <td>Katalog</td>
                        <td>
                        <select name="id_katalog" class="form-control">
                        <option selected>Pilih Katalog</option>
                            <?php foreach ($books as $book) {?>
                                <option value="<?php echo $book['id_katalog'];?>"><?php echo $book['id_katalog'] .' - '.$book['nama'] ?></option>
                            <?php } ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Qty Stok</td>
                        <td><input type="text" name="qty_stok" class="form-control" value="<?php echo $qty_stok; ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga Pinjam</td>
                        <td><input type="text" name="harga_pinjam" class="form-control" value="<?php echo $harga_pinjam; ?>"></td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-primary" type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>