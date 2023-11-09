<?php 

    include "../config/config.php";

    $id_pengarang = $_GET['id_pengarang'];

    mysqli_query($con, "DELETE FROM pengarang WHERE id_pengarang ='$id_pengarang'");

    header("location:pengarang.php");

?>