<html>
<head>
	<title>Belajar OOP Dasar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div class="container">
	<div id="merk">
		<h1>Ngoding Sakit Kepala Sebelah</h1>
	</div>
	<nav>
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="tampil.php">Lihat Data</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</nav>
	</div>
</header>
<h2 align="center">Tambah Data</h2>
<form method="post" action="proses.php?action=add">
<table align="center">
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
</table>
<br/>
<section id="baru">
	<div class="container">
		<h1> Jangan ngoding kalo gamau pusing ! </h1>
	</div>
</section>
<section id="boxes">
	<div class="container">
		<div class="box">
			<img src="img/admin.png">
			<h3>Data Admin</h3>
			<p>
				Kalau mau melihat data admin secara lengkap? klik aja gambar di atas ini. Tapi ingat, hanya data yang boleh di lihat karena adminnya cewek, kalau mau melihat secara keseluruhan ketemu orang tuanya, lamar dia, nafkahi dia, anda bebas mau ngapain aja. 
			</p>
		</div>
		
	<div class="kotak">
			<img src="img/org3.png">
			<h3>Mahasiswa Ngoding</h3>
			<p>
				Bisa Anda bayangkan bagaimana malasnya mahasiswa itu ngoding, jangan anda bilang kalau ngoding itu gampang. Yang gampang itu hanyalah berharap tanpa adanya balasan perasaan. :( 
			</p>
		</div>
		</div>
</section>
<footer>
	<p>
		<i>Ngoding Dapat Menyebabkan Sakit Kapala Sebelah, Copyright @2019</i>
	</p>
</footer>
</form>
</body>
</html>