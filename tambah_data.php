<br/>
<html>
<head>
	<title>Belajar OOP Dasar</title>
</head>
<body>
	<h2 align="center">Tambah Data<br/>
	   				   Belajar OOP Dasar</h2>
<hr/>
<form method="post" action="proses.php?action=add">
<table align="center">
	<thead>
	<tr>
		<td>Nama Mahasiswa</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>

	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="lahir"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
			<input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki
			<input type="radio" name="jk" value="Perempuan">Perempuan
		</td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td>
			<select name="jurusan">
				<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
				<option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
				<option value="S1 Rekayasa Perangkat Lunak">S1 Rekayasa Perangkat Lunak</option>
				<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat" cols="30" rows="4"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
	</thead>
</table>
</form>
</body>
</html>