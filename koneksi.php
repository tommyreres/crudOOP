<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "identitas";
	// var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function login($username,$password,$level)
	{
		$query =mysqli_query($this->koneksi,"insert into test values ('','$username','$password','$level')");
	}

	function get($id)
	{
		$query =mysqli_query($this->koneksi,"select * from test where id='$id'");
		return $query->fetch_array();
	}

	function tambah_data($nama,$lahir,$jk,$jurusan,$alamat)
	{
		$quesry =mysqli_query($this->koneksi,"insert into mahasiswa values ('','$nama','$lahir','$jk','$jurusan','$alamat')");
	}

	function get_by_id($nim)
	{
		$query = mysqli_query($this->koneksi,"select * from mahasiswa where nim='$nim'");
		return $query->fetch_array();
	}

	function update_data($nim,$nama,$lahir,$jk,$jurusan,$alamat)
	{
		$query = mysqli_query($this->koneksi,"update mahasiswa set nama='$nama',lahir='$jlahir',jk='$jk',jurusan='$jurusan',alamat='$alamat' where nim='$nim'");
	}

	function delete_data($nim)
	{
		$query = mysqli_query($this->koneksi,"delete from mahasiswa where nim='$nim'");
	}
}
?>