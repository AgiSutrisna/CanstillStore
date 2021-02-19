<h2>Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>harga</th>
			<th>kategori</th>
			<th>foto</th>
			<th>aksi</th>
		</tr>
	</thead>
	<body>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM kategori k, produk p where k.idkategori=p.idkategori order by id_produk ASC");?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['namakategori']; ?></td>
			<td>
				<img src ="../img/<?php echo $pecah['foto_produk']; ?>" width="100px">
			</td>
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-danger btn">hapus</a>
				<a href="" class="btn btn-warning">ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</body>

</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>
