<?php 
include 'koneksi.php';
$kode_pinjam = $_POST['kode_pinjam'];
$NIS = $_POST['NIS'];
$kode_buku = $_POST['kode_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$query = "INSERT INTO peminjaman SET
		  kode_pinjam = '$kode_pinjam',
		  NIS = '$NIS',
		  kode_buku = '$kode_buku',
		  tanggal_pinjam = '$tanggal_pinjam',
		  tanggal_kembali = '$tanggal_kembali'";
mysqli_query($koneksi, $query);
header("location:show_peminjaman.php");
 ?>