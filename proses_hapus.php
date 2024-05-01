<?php
include 'koneksi.php';
$kode=$_GET['kode_buku'];
$query="DELETE FROM buku WHERE kode_buku='$kode'";
mysqli_query($koneksi, $query);
header("location:show_buku.php");
 ?>