<?php 	
include('koneksi.php');
$db = new database();
$data_identitas = $db->tampil_data();
?>
<html>
<head>
	<title>Ngoding Sakit Kepala Sebelah | Welcome</title>
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
			<li class="sugul"><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	</div>
</header>
<head>
	<h2 align="center">Tampil Data </h2>
</head>
<body>
<table border="0" align="center" cellpadding="1" cellspacing="0" width="800px">
</table>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="800px">
		<thead id="tampilan">
		<tr>
			<th>No</th>
			<th>Nama Mahasiswa</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<?php 
		$no = 1;
		foreach($data_identitas as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['lahir']; ?></td>
				<td><?php echo $row['jk']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['nim']; ?>">Update</a> ||
					<a href="proses.php?action=delete&id=<?php echo $row['nim']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
<br/>
<section id="baru">
	<div class="container">
		<h1> Ngapain kesini? Udah konsul dosen atau belum?</h1>
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
</body>
</html>