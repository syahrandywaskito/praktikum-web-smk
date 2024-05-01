<?php 
include 'koneksi.php';
$NIS = $_POST['NIS'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$query = "INSERT INTO siswa SET
		  NIS = '$NIS',
		  nama = '$nama',
		  kelas = '$kelas'";
mysqli_query($koneksi, $query);
header("location:show_siswa.php");
 ?>