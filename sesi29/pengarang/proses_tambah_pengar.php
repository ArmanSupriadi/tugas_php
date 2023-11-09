<?php 

    $id_pengarang = $_POST['id_pengarang'];
    $nama_pengarang = $_POST['nama_pengarang'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include "../config/config.php";

    $result = mysqli_query($con, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`)
                        VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");
    
    echo '<div class="alert alert-success" role="alert">
    Data berhasil di simpan
            </div>'; 
    header("location:pengarang.php");

    

?>