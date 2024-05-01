<?php
include 'koneksi.php';
$kode=$_GET['kode_pinjam'];
$query="DELETE FROM peminjaman WHERE kode_pinjam='$kode'";
mysqli_query($koneksi, $query);
header("location:show_peminjaman.php");
 ?>