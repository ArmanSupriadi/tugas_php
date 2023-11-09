<?php 
$con = mysqli_connect("localhost","root","","perpus_msib");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>