<?php 
include '../aset/header.php';
include '../koneksi.php';

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota INNER JOIN gender ON anggota.id_gender = gender.id_gender where id_anggota = $id_anggota ";

$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Anggota</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td width="100px"><strong>Nama</strong></td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Alamat</strong></td>
						<td width="500px"><?= $detail['Alamat'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>No.telpone</strong></td>
						<td width="500px"><?= $detail['telp'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Gender</strong></td>
						<td width="500px"><?= $detail['gender'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Gejala</strong></td>
						<td width="500px"><?= $detail['gejala'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Suhu Tubuh</strong></td>
						<td width="500px"><?= $detail['suhu_tubuh'] ?>°</td>
					</tr>
					<tr>
						<td></td>
						<td>
    						<a href="hapus.php?id_anggota=<?php echo $detail['id_anggota']; ?>" class="badge badge-danger">hapus</a>	
							<a href="index.php?id_anggota=<?php echo $detail['id_anggota']; ?>" class="badge badge-success">kembali</a>
						</td>
					</tr>
				</table>
				</th></tr></table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>