<?php 
$kon = mysqli_connect("localhost","root","","corona");

// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>