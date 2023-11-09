<?php 

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $tgl_entry = $_POST['tgl_entry'];
    $role = $_POST['role'];

    include "../config/config.php";

    $result = mysqli_query($con, "INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`,`email`, `tgl_entry`, `role`)
                        VALUES ('$nama','$username','$password','$sex','$telp','$alamat','$email','$tgl_entry','$role');");
    
    echo '<div class="alert alert-success" role="alert">
    Data berhasil di simpan
            </div>'; 
    header("location:../index.php");

    

?>