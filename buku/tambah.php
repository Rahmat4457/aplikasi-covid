<?php 
include '../koneksi.php';
include '../aset/header.php';


	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}

$id_anggota = $_GET['id_anggota'];
$sql = "SELECT * FROM anggota where id_anggota = $id_anggota";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

function ambilStatus($kon){
	$sql = "SELECT id_status, status FROM status";
	$res = mysqli_query($kon, $sql);

	$data_anggota = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_anggota[] = $data;
	}
	return $data_anggota;
	
}
$status 		= ambilStatus($kon);

function ambilKesehatan($kon){
	$sql = "SELECT id_vonis, vonis FROM type";
	$res = mysqli_query($kon, $sql);

	$data_anggota = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_anggota[] = $data;
	}
	return $data_anggota;
	
}
$kesehatan		= ambilKesehatan($kon);
 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
  <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<h2 class="card-header"><i class="fas fas fa-book"></i> Vonis Pasien </h2>
 </div>
 <div class="card-body"></div>

 <form action="proses-tambah.php" method="post">

 <table class="table">
 <tr>
 <td>Nama</td>
 <td>
	<select name="id_anggota" class="form-control">
								
									<option value="<?=$detail['id_anggota']?>"><?=$detail['nama']?></option>
								
							</select>
	</td>
</tr>
<tr>
 	<td>Kesehatan</td>
	 <td>
	<select name="id_status" class="form-control">
								<?php  
								foreach ($status as $s) {?>
									<option value="<?=$s['id_status']?>"><?=$s['status']?></option>
								<?php }
								?>
							</select>
	</td>
</tr>
<tr>
 	<td>Kesehatan</td>
	 <td>
	<select name="id_vonis" class="form-control">
								<?php  
								foreach ($kesehatan as $k) {?>
									<option value="<?=$k['id_vonis']?>"><?=$k['vonis']?></option>
								<?php }
								?>
							</select>
	</td>
    
<tr>
<td></td>
    <td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
</tr>
	 
</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
 </body>
 </html>


 <?php 
include '../aset/footer.php';
  ?>