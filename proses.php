<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['lahir'],$_POST['jk'],$_POST['jurusan'],$_POST['alamat']);
	header('location:tampil.php');
}
elseif($action=="update")
{
	$koneksi->edit($_POST['nama'],$_POST['lahir'],$_POST['jk'],$_POST['jurusan'],$_POST['alamat']);
	header('location:tampil.php');
}
elseif($action=="delete")
{
	$kunci = $_GET['id'];
	$koneksi->delete_data($kunci);
	header('location:tampil.php');
}
?>