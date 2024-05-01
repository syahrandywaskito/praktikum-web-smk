<?php
include 'koneksi.php';
$NIS = $_POST['NIS'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$query = "UPDATE siswa SET NIS ='$NIS',
						   nama = '$nama',
						   kelas = '$kelas'
		  WHERE NIS = '$NIS'"; 
mysqli_query($koneksi, $query);
header("location:show_siswa.php");
 ?>