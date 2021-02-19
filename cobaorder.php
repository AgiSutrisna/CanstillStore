<?php

$host="localhost";
$user="root";
$password="";
$db="canstore";

$kon = mysqli_connect($host,$user,$password);
if ($kon){
	echo "Database MYSQL <b>berhasil</b> dikoneksikan<br>";
}else {
	echo"Database  MYSQL <b>gagal</b> dikoneksikan<br>";
}

$hasil=mysqli_select_db($kon,$db);
if ($hasil){
	echo "Database $db berhasil dipilih";
}else {
	echo "Database $db gagal dipilih";
}


?>
<h2>tambah produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-grup">
		<label>nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-grup">
		<label>alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-grup">
		<label>telepon</label>
		<input type="number" class="form-control" name="telepon">
	</div>
	<div class="form-grup">
		<label>jumlah</label>
		<input type="number" class="form-control" name="jumlah">
	</div>

	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
  $nama  = $_POST["nama"];
  $alamat  = $_POST['alamat'];
  $telepon  = $_POST['telepon'];
  $jumlah = $_POST['jumlah'];
  $mysqli  = "INSERT INTO order (nama, alamat, telepon, jumlah) VALUES ('$nama', '$alamat', '$telepon', $jumlah)";
  $result  = mysqli_query($kon, $mysqli);
  if ($result) {
    echo "Input berhasil";
    exit;
  } else {
    echo "Input gagal";
    exit;
  }

?>