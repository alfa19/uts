<!DOCTYPE html>
<html>
<head>
	<title>UTS WB LANJUT</title>
</head>
<body>
	<center><h1>Membuat CRUD TRIGGER</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:30px auto;" border="1">
		<tr>
			<th>no</th>
			<th>nim</th>
			<th>nama_mahasiswa</th>
			<th>jenis_kelamin</th>
			<th>alamat</th>
			<th>no_hp</th>
			<th>action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($mahasiswa as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->nama_mahasiswa ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->no_hp ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->nim,'Edit'); ?>
                   <?php echo anchor('crud/hapus/'.$u->nim,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>