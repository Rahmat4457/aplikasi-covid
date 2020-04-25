<?php
include 'koneksi.php';
include 'aset/header.php';

$query = mysqli_query($kon, "SELECT * FROM gender");
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
 	<h2 class="card-header"><i class="fas fas fa-book"></i> Formulir Pasien</h2>
 </div>
 <div class="card-body"></div>

 <form action="prosess-tambah.php" method="post">

 <table class="table">
 <tr>
 	<td>Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
 	<td>Gejala</td>
    <td><textarea style="width:100%; height: 100px;" type="textarea"name="gejala"></textarea></td>
</tr>
<tr>
 	<td>Suhu Tubuh</td>
    <td><input type="number" name="suhu_tubuh"></td>
</tr>
<tr>
 	<td>No.telpone</td>
    <td><input type="text" name="telp"></td>
</tr>
<tr>
 	<td>Alamat</td>
    <td><textarea style="width:100%; height: 100px;" type="textarea"name="alamat"></textarea></td>
</tr>
<tr>
	<td>Gender</td>
	<td>
		<select style="width: 200px" name="id_gender">
			<option value="">-- Pilih Kategori --</option>

			<?php 

			while ($level = mysqli_fetch_assoc($query)):

			 ?>
			<option value="<?php echo $level['id_gender']; ?>"><?php echo $level['gender'];?></option>

			<?php
			 endwhile;
			?>
		</select>
	</td>

</tr>
<tr>
 	<td></td>
    <td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
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
include 'aset/footer.php';
  ?>