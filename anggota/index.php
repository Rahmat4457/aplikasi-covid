<?php
include '../koneksi.php';

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	
$sql = "SELECT * FROM anggota INNER JOIN gender ON anggota.id_gender=gender.id_gender ORDER BY nama";

        
$res=mysqli_query($kon, $sql);

$pinjam=array();

while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[]=$data;
}

include '../aset/header.php'
?>

<center><a href="tambah.php"><span class="badge badge-info">Tambah Pasien</span></a></center>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-edit"></i>Data </h2>
                    </div>
                    <div class="card-body">
                    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Info</th>
      
    </tr>
  </thead>
  <tbody>
     <?php
          $no=1;
          foreach($pinjam as $p){
              ?>
              <tr>
                  <th scope="row"><?=$no;?></th>
                  <td><?=$p['nama'];?></td>
                  <td><?= $p['gender'];?></td>
                  <td>
                  <a href="detail.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
                  <a href="hapus.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a> 
      </td>
                 </tr>
          <?php
          $no++;
          
                        }
                        
     ?>
       
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include '../aset/footer.php';
?>