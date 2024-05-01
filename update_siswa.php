<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Data Siswa</title>
    <link rel="icon" href="logo.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- font google -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css">

    <!-- css pribadi -->
    <link rel="stylesheet" href="css_pribadi/style.css">
    <style >
      .form-container{
        margin: 4rem 0;
      }
    </style>
  </head>
  <body>
    <!-- Start your project here-->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-none sticky-top">
      <div class="container">
        <a class="navbar-brand" href="https://github.com/syahrandywaskito" target="_blank">Syahrandy Waskito</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.html"><i class="bi bi-house-fill"></i> Home</a>
            <a class="nav-link" href="biodata.html"><i class="bi bi-person-fill"></i> Biodata</a>
            <a class="nav-link" href="show_buku.php"><i class="bi bi-book-half"></i> Buku</a>
            <a class="nav-link" href="show_siswa.php"><i class="bi bi-book-half"></i> Siswa</a>
            <a class="nav-link" href="show_peminjaman.php"><i class="bi bi-book-half"></i>Peminjaman</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar -->
	<section class="form-container">
		<div class="container center">
			<h1>EDIT DATA SISWA</h1>
			<?php
			include 'koneksi.php';
			$kode = $_GET['NIS'];
			$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE NIS = '$kode'");
			$row = mysqli_fetch_array($query); 
			 ?>
			<form method="post" action="proses_update_siswa.php">
        <div class="mb-3">
          <label class="form-label">NIS</label>
          <input type="text" class="form-control" readonly value="<?php echo $row['NIS']; ?>" name="NIS">
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" value="<?php echo $row['nama'];?>" name="nama">
        </div>
        <div class="mb-3">
          <label class="form-label">Kelas</label>
          <input type="text" class="form-control" value="<?php echo $row['kelas'];?>" name="kelas">
        </div>
        <input type="submit" value="Simpan Perubahan" class="btn btn-success btn-md">
        <input type="reset" value="Cancel" class="btn btn-success btn-md">
      </form>
		</div>
	</section>

	<!-- Footer -->
    <footer class="footer-container">
      <section class="copyright">
          Created with <i class="bi bi-heart-fill"></i> by <a href="https://github.com/syahrandywaskito" target="_blank">@syahrandywaskito</a>
      </section>
    </footer>
    <!-- Footer -->
</body>
</html>