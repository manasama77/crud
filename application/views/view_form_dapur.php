<form action="<?php echo site_url('form/simpan'); ?>" method="post">
	<p>Nama Benda</p>
	<input type="text" name="nama_benda" required />

	<p>Harga</p>
	<input type="number" name="harga" required />

	<button type="submit">Simpan</button>
</form>
