<?php 
include '../koneksi.php';

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}

$sql = "SELECT * FROM buku INNER JOIN anggota ON buku.id_anggota=anggota.id_anggota INNER JOIN status ON buku.id_status=status.id_status INNER JOIN type ON buku.id_vonis=type.id_vonis";
$res = mysqli_query($kon, $sql);
$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
	$pinjam[] = $data; 
}

include '../aset/header.php';
?>

<div class="container">
<div class="row mt-4">
<div class="col-md">
	</div>
</div>
</div>

  <div class="card">
  <div class="card-header">
         <h2 class="card-title"><i class="fas fa-edit"></i> Keadaan Pasien </h2>
         </div>
                        <div class="card-body">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Status</th>
      <th scope="col">Kesehatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <?php 

    $no = 1;
    foreach ($pinjam as $p) { ?>
    
    <tr>
    	<th scope="row"><?= $no ?></th>
    	<td><?= $p['nama']?></th>
    	<td><?= $p['vonis']?></th>
    	<td><?= $p['status']?></th>

    	<td>
       <a href="detail.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
      <a href="edit.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-warning">Edit</a>
      <a href="hapus.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-danger">Hapus</a> 
      </td>
    </tr>
    <?php  
    $no++;
    }
     ?>
  
 </table>
  </div>
  </div>


<?php 
include  '../aset/footer.php';
?>
