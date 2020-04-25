<?php 
include '../koneksi.php';

if (isset($_POST['simpan'])) 
{
$id_anggota       = $_POST['id_anggota'];
$id_status        = $_POST['id_status'];
$id_vonis         = $_POST['id_vonis'];

$query1 =mysqli_query($kon,"INSERT INTO buku (id_anggota, id_status, id_vonis)
		VALUES ('$id_anggota','$id_status', '$id_vonis')");
		

		
if($query1>0){
	echo "
	<script>
	     alert('Data Berhasil Ditambahkan');
	     document.location.href='index.php';
</script>
	";
}else{
	
}
}




 ?>