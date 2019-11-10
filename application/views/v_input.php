<!DOCTYPE html>
<html>
<head>
	<title>UTS WB LANJUT</title>
</head>
<body>
	<center><h1>inputkan data yang sesuai cuy</h1></center>
	<center><h3>Tambah data baru</h3></center>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>nama_mahasiswa</td>
				<td><input type="text" name="nama_mahasiswa"></td>
			</tr>
			<tr>
			<td>jenis_kelamin</td>
				<td><input type='radio' name='jenis_kelamin' value='L' />laki_laki</td>
      				<td><input type='radio' name='jenis_kelamin' value='p' />Perempuan</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
			<td>no_hp</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>	
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>