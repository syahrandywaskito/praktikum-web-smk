<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Buku</title>
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
      .table-container{
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
            <a class="nav-link" href="show_peminjaman.php"><i class="bi bi-book-half"></i> Peminjaman</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- table buku -->
    <section class="table-container">
      <div class="container">
        <h1 class="fs-3">DATA BUKU PERPUSTAKAAN SEKOLAH</h1>
        <br>
        <a href="form_buku.php" class="add-link">+ Tambah Data Baru</a>
        <form action="" method="post">
          <label for="search">Cari berdasarkan</label>
          <select name="pilih" id="search" class="btn btn-danger btn-md">
            <option value="kode_buku">Kode Buku</option>
            <option value="judul_buku">Judul Buku</option>
            <option value="penerbit">Penerbit</option>
          </select>
          <input type="text" name="tekscari" size="24">
          <input type="submit" name="cari" value="Cari" class="btn btn-success btn-md">
          <input type="submit" name="semua" value="Tampilkan Semua" class="btn btn-success btn-md">
        </form>
        <table class="table table-bordered table-striped">
          <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Opsi</th>
          </tr>
          <!-- php search -->
          <?php
          include "koneksi.php";
          $input_buku = "";
          if (isset($_POST['cari'])) {
             $opsi = $_POST['pilih'];
             $nama = $_POST['tekscari'];
             $input_buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE $opsi LIKE '%$nama%'");
           } 
          else{
             $input_buku = mysqli_query($koneksi, "SELECT * FROM buku");
           }
           ?>
           <!--  -->

           <!-- php show -->
          <?php
          include 'koneksi.php';
          $no = 1;
          foreach ($input_buku as $row) {
            echo "<tr>
                <td>$no</td>
                <td>".$row['kode_buku']."</td>
                <td>".$row['judul_buku']."</td>
                <td>".$row['penerbit']."</td>
                <td><a href='update.php?kode_buku=$row[kode_buku]' class='btn btn-success btn-md'>Ubah</a>   
                  <a href='proses_hapus.php?kode_buku=$row[kode_buku]' class='btn btn-success btn-md'>Hapus</a>
                </td>
                </tr>";
              $no++;
           } 
           ?>
           <!--  -->
        </table>
      </div>
    </section>
	<!-- tabel buku -->

	<!-- Footer -->
    <footer class="footer-container">
      <section class="copyright">
          Created with <i class="bi bi-heart-fill"></i> by <a href="https://github.com/syahrandywaskito" target="_blank">@syahrandywaskito</a>
      </section>
    </footer>
    <!-- Footer -->
</body>
</html>
