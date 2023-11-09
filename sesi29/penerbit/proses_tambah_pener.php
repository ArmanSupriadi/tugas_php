<?php 

    $id_penerbit = $_POST['id_penerbit'];
    $nama_penerbit= $_POST['nama_penerbit'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include "../config/config.php";

    $result = mysqli_query($con, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`)
                        VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
    
    echo '<div class="alert alert-success" role="alert">
    Data berhasil di simpan
            </div>'; 
    header("location:penerbit.php");

    

?>