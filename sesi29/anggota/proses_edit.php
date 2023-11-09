<?php

    $id_anggota = $_GET['id_anggota'];
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

    mysqli_query($con, "UPDATE `anggota` SET `nama` ='$nama', `username` ='$username', `password` ='$password', `sex` = '$sex',
                `telp` = '$telp', `alamat` = '$alamat', `email` = '$email', `tgl_entry` = '$tgl_entry', `role` = '$role' WHERE `id_anggota` = '$id_anggota'");

    header("location:../index.php");

?>