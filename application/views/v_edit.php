<!DOCTYPE html>
<html>
<head>
	<title>UTS WB LANJUT</title>
</head>
<body>
	<center><h1>inputkan data yang sesuai cuy</h1></center>
	<center><h3>Edit Data</h3></center>
	</center>
	
	<?php foreach($mahasiswa as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>nama_mahasiswa</td>
				<td><input type="text" name="nama_mahasiswa" value="<?php echo $u->nama_mahasiswa ?>"></td>
			</tr>
			<tr>
			<td>jenis_kelamin</td>
				<td><input type='radio' name='jenis_kelamin' value='L' />laki_laki</td>
      				<td><input type='radio' name='jenis_kelamin' value='p' />Perempuan</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat"value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
			<td>no_hp</td>
				<td><input type="text" name="no_hp"value="<?php echo $u->no_hp ?>"></td>
			</tr>
			<tr>	
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>