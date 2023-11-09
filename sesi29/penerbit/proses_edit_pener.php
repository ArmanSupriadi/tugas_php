<?php 

    include "../config/config.php";

    $id_penerbit = $_GET['id_penerbit'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    mysqli_query($con, "UPDATE penerbit SET nama_penerbit ='$nama_penerbit', email ='$email', telp ='$telp', 
                alamat ='$alamat' WHERE id_penerbit ='$id_penerbit'");


    header("location:penerbit.php");

?>