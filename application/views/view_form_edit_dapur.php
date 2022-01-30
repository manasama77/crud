<form action="<?php echo site_url('form/update'); ?>" method="post">
	<p>Nama Benda</p>
	<input type="text" name="nama_benda" value="<?php echo $dapur['nama'] ?>" required />

	<p>Harga</p>
	<input type="number" name="harga" value="<?php echo $dapur['harga'] ?>" required />

	<button type="submit">Simpan</button>
</form>
