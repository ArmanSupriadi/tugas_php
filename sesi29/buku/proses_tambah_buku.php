<?php 

    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $id_katalog = $_POST['id_katalog'];
    $qty_stok = $_POST['qty_stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    include "../config/config.php";

    $result = mysqli_query($con, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`,`qty_stok`, `harga_pinjam`)
                        VALUES ('$isbn','$judul','$tahun','$id_penerbit','$id_pengarang','$id_katalog','$qty_stok','$harga_pinjam');");
    
    echo '<div class="alert alert-success" role="alert">
    Data berhasil di simpan
            </div>'; 
    header("location:buku.php");
    

?>