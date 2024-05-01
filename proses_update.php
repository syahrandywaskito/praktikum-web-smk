<?php
include 'koneksi.php';
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$query = "UPDATE buku SET kode_buku ='$kode_buku',
						  judul_buku = '$judul_buku',
						  penerbit = '$penerbit'
		  WHERE kode_buku = '$kode_buku'"; 
mysqli_query($koneksi, $query);
header("location:show_buku.php");
 ?>