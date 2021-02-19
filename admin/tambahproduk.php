<h2>Tambah Produk</h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div id="whatsapp" class="toggle">

<input class="tujuan" type="hidden" value="085974051546" />
<form method="post" enctype="multipart/form-data">
	<div class="form-grup">
		<label>nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-grup">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-grup">
		<label>Nama Kategori</label>
		<select name="idkategori" class="form-control">
		<option selected>Pilih Kategori</option>
		<?php
			$det=mysqli_query($koneksi,"select * from kategori order by namakategori ASC")or die(mysqli_error());
			while($d=mysqli_fetch_array($det)){
		?>
		<option value = "<?php echo $d['idkategori'] ?>"><?php echo $d['namakategori'] ?></option>
		
		<?php
			}
		?>	
		</select>
		
	</div>
	<div class="form-grup">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-grup">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
	if (isset($_POST['save']))
	{
		$nama = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, "../img/".$nama);
		$koneksi->query("INSERT INTO produk
			(nama_produk,harga_produk,foto_produk,deskripsi_produk,idkategori)
			VALUES ('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]','$_POST[idkategori]')");
		echo "<div class='alert alert-info'>Data sudah tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
	}
	?>
