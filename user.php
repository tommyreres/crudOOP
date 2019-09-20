<!DOCTYPE html>
<html>
<head>
	<title>Ngoding Sakit Kepala Sebelah | Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div class="container">
	<div id="merk">
		<h1>Ngoding Sakit Kepala Sebelah <br/>
		 <?php
			session_start();
			if ($_SESSION['level'] != "user") {
				header("Location: login.php");
			}
		 	echo $_SESSION['level']; 
		 ?></h1>
	</div>
	<nav>
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="tampil2.php">Lihat Data</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	</div>
</header>
<section id="lihatini">
	<div class="container">
		<h1>MAHASISWA</h1>
		<p>
			Mahasiswa adalah sebutan bagi orang yang sedang menempuh pendidikan tinggi di sebuah perguruan tinggi yang terdiri atas sekolah tinggi, akademi, dan yang paling umum adalah universitas.

			Sepanjang sejarah, mahasiswa di berbagai negara mengambil peran penting dalam sejarah suatu negara. Misalnya, di Indonesia pada 1965, ribuan mahasiswa berhasil mendesak Presiden Soekarno untuk mundur dari jabatannya. Dan pada pada Mei 1998, ratusan ribu mahasiswa berhasil mendesak Presiden Soeharto untuk melakukan hal yang sama. 
		</p>
	</div>
</section>
<section id="baru">
	<div class="container">
		<h1>Ngapain kesini? Udah konsul dosen atau belum?  </h1>
	</div>
</section>
<section id="boxes">
	<div class="container">
		<div class="box">
			<img src="img/admin.png">
			<h3>Admin</h3>
			<p>
				Admin adalah orang yang mengatur semua data yang ada disini. Kalau anda bukan Admin, jangan sok mau masukin data kesini, karena anda bukan siapa-siapa !!! 
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