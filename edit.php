<?php 	
include('koneksi.php');
$db = new database();
$kunci = $_GET['id'];
if(! is_null($kunci))
{
	$data_identitas = $db->get_by_id($kunci);
}
else
{
	header('location:tampil.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Barang</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="nim" value="<?php echo $data_identitas['nim']; ?>"/>
<table>
	<tr>
		<td>Nama Mahasiswa</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_identitas['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="lahir" value="<?php echo $data_identitas['lahir']; ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
		<input type="radio" name="jk" value="Laki-Laki" <?php if($data_identitas['jk']=="Laki-Laki"){echo "checked";}?>>Laki-Laki
		<input type="radio" name="jk" value="Perempuan" <?php if($data_identitas['jk']=="Perempuan"){echo "checked";}?>>Perempuan
		</td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td>
			<select name="jurusan">
				<option value="D3 Manajemen Informatika" <?php if($data_identitas['jurusan']=="D3 Manajemen Informatika"){echo "selected";}?>>D3 Manajemen Informatika</option>
				<option value="D3 Teknik Komputer" <?php if($data_identitas['jurusan']=="D3 Teknik Komputer"){echo "selected";}?>>D3 Teknik Komputer</option>
				<option value="S1 Rekayasa Perangkat Lunak" <?php if($data_identitas['jurusan']=="S1 Rekayasa Perangkat Lunak"){echo "selected";}?>>S1 Rekayasa Perangkat Lunak</option>
				<option value="S1 Teknik Informatika" <?php if($data_identitas['jurusan']=="S1 Teknik Informatika"){echo "selected";}?>>S1 Teknik Informatika</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>