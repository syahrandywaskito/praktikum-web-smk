<?php
include 'koneksi.php';
$kode=$_GET['NIS'];
$query="DELETE FROM siswa WHERE NIS='$kode'";
mysqli_query($koneksi, $query);
header("location:show_siswa.php");
 ?>