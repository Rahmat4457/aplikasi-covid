<?php
include 'koneksi.php';
include 'aset/header1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<br/>



	 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
  <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<h2 class="card-header"><i class="fas fas fa-book"></i> LOGIN </h2>
 </div>
 <div class="card-body"></div>

 <form action="cek-login.php" method="post">

 <table class="table">
 <tr>
 	<td>Nama</td>
    <td><input type="text" name="username"></input></td>
</tr>
<tr>
 	<td>Password</td>
    <td><input type="password"name="password"></input></td>
</tr>
		</select>
	</td>

</tr>
<tr>
 	<td></td>
    <td><button type="submit" class="btn btn-primary" name="login">Login Untuk Perawat</button> 
    </td>
    <tr>
    <td></td>
    <td><a href="tambah.php"><span class="badge badge-info">Lapor Untuk Pasien</span></a>
    </td>
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
include 'aset/footer.php';
?>