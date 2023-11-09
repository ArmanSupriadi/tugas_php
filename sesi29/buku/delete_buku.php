<?php 

    include "../config/config.php";

    $isbn = $_GET['isbn'];

    mysqli_query($con, "DELETE FROM `buku` WHERE isbn ='$isbn'");

    header("location:buku.php");

?>