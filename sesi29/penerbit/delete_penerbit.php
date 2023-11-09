<?php 

    include "../config/config.php";

    $id_penerbit = $_GET['id_penerbit'];

    mysqli_query($con, "DELETE FROM penerbit WHERE id_penerbit ='$id_penerbit'");

    header("location:penerbit.php");

?>