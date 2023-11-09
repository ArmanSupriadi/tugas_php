<?php 

    include "../config/config.php";

    $id_anggota = $_GET['id_anggota'];

    mysqli_query($con, "DELETE FROM `anggota` WHERE id_anggota ='$id_anggota'");

    header("location:../index.php");

?>