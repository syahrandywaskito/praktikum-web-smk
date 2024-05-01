<?php
session_start();
if (empty($_SESSION['username'])) {
   header("location:login.php");
 } 
else{
  // else akan menampilkan halaman jika session tidak kosong
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Syahrandy Waskito</title>
    <link rel="icon" href="../logo.png" type="image/x-icon">

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
    <link rel="stylesheet" href="../css/mdb.min.css">

    <!-- css pribadi -->
    <link rel="stylesheet" href="../css_pribadi/style.css">

    <!-- css internal -->
    <style type="text/css">
      header div a{
        color: white;
      }
      header div a:hover{
        color: black;
      }
    </style>
  </head>
  <body>
    <!-- Start your project here-->

    <!-- script PHP -->
    <?php
    if ($_SESSION['username'] == "wasabi" && $_SESSION['password'] == "asAdmin_1") {
        $username = $_SESSION['username'];
     ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-none sticky-top">
      <div class="container">
        <a class="navbar-brand" href="https://github.com/syahrandywaskito" target="_blank">Syahrandy Waskito / <?php echo "$username"; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> Home</a>
            <a class="nav-link" href="biodataAdmin.html"><i class="bi bi-person-fill"></i> Biodata</a>
            <a class="nav-link" href="show_buku_admin.php"><i class="bi bi-book-half"></i> Buku</a>
            <a class="nav-link" href="show_siswa.php"><i class="bi bi-book-half"></i> Siswa</a>
            <a class="nav-link" href="show_peminjaman.php"><i class="bi bi-book-half"></i> Peminjaman</a>
            <div class="btn btn-success btn-sm"><a class="nav-link" href="../logout.php">Logout</a></div>
          </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- jumbotron -->
    <header>
      <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 90vh">
          <div class="text-center">
            <img
              class="mb-4 rounded-circle shadow"
              src="../logo.png"
              style="width: 200px;">
            <div>
              <h1 class="fs-2">SYAHRANDY WASKITO</h1>
              <h2 class="fs-3">Admin</h2>
            </div>
          </div>
        </div>
      </div>
    </header>
      
    <!-- jumbotron -->

    <!-- Footer -->
    <footer class="footer-container">
      <section class="copyright">
          Created with <i class="bi bi-heart-fill"></i> by <a href="https://github.com/syahrandywaskito" target="_blank">@syahrandywaskito</a>
      </section>
    </footer>
    <!-- Footer -->

    <!-- script PHP -->
    <?php
      } 
      else{
    ?>
    <script type="text/javascript">
      alert("ANDA SIAPA ???");
      document.location="login.php?=page=lihat";
    </script>
    <?php
      }
     ?>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
<?php
}
?>