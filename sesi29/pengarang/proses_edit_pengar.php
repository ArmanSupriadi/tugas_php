<?php 

    include "../config/config.php";

    $id_pengarang = $_GET['id_pengarang'];
    $nama_pengarang = $_POST['nama_pengarang'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    mysqli_query($con, "UPDATE pengarang SET nama_pengarang ='$nama_pengarang', email ='$email', telp ='$telp', 
                alamat ='$alamat' WHERE id_pengarang ='$id_pengarang'");


    header("location:pengarang.php");

?>