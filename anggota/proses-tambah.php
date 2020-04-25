<?php

include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $gejala = $_POST['gejala'];
    $suhu_tubuh = $_POST['suhu_tubuh'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $id_gender=$_POST['id_gender'];
    
    $query =mysqli_query($kon,"INSERT INTO anggota (nama, gejala, suhu_tubuh, telp, alamat, id_gender)
		VALUES ('$nama','$gejala', '$suhu_tubuh', '$telp', '$alamat', '$id_gender')");

    if ($query > 0) {
        header("location:index.php");
    }
    else{
        header("location:tambah.php");    
    }
}else{
    header("location:tambah.php");
}
?>