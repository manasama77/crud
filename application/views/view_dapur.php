<h1><?php echo $judul; ?></h1>
<table border="1">
	<tr>
		<td>Nama Benda</td>
		<td>Harga</td>
		<td>Aksi</td>
	</tr>
	<?php foreach ($dapur->result_array() as $value) { ?>
		<tr>
			<td><?php echo $value['nama'] ?></td>
			<td>Rp.<?php echo $value['harga'] ?></td>
			<td>
				<a href="<?php echo site_url('form/edit/' . $value['id']); ?>">EDIT</a>
				DELETE
			</td>
		</tr>
	<?php } ?>
</table>
