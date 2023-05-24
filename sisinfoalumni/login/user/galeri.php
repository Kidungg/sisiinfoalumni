<?php
session_start();
include('../koneksi.php');

if ($_SESSION['status'] != "sudah_login") {
    header("location:../login.php");
    die;
}
if ($_SESSION['level'] != "user") {
    header("location:../login.php");
    die;
}
$timeout = 60;

$timeout = $timeout * 60;
if (isset($_SESSION['start_session'])) {
    $elapsed_time = time() - $_SESSION['start_session'];
    if ($elapsed_time >= $timeout) {
        header("location:../logout.php");
    }
}
$_SESSION['start_session'] = time();
?>

<!DOCTYPE html>
<html>

<head>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Sistem Informasi Alumni</p>

            <p class="text-white"> Sistem Informasi Alumni adalah sebuah platform yang dirancang untuk
                            mengelola
                            informasi dan data
                            terkait
                            dengan alumni sebuah organisasi. Sistem ini bertujuan untuk menyediakan akses
                            mudah dan
                            terorganisir kepada para alumni, serta memungkinkan  organisasi untuk menjaga
                            hubungan
                            yang
                            baik dengan para mantan anggota.</p>

                        <p class="text-white"> Bagi organisasi yang menggunakan Sistem Informasi Alumni, mereka dapat
                            mengelola data
                            alumni, mengirimkan pemberitahuan tentang acara atau kegiatan yang relevan, serta
                            memfasilitasi
                            komunikasi
                            antara alumni dan organisasi. Sistem ini juga dapat memberikan manfaat dalam hal pemasaran
                            atau promosi,
                            pemetaan jejak karir alumni, serta pengumpulan informasi untuk keperluan statistik atau
                            penelitian.</p>

                        <p class="text-white"> Keuntungan menggunakan Sistem Informasi Alumni adalah terciptanya koneksi
                            yang lebih
                            kuat antara
                            alumni
                            dan organisasi, memudahkan pertukaran informasi dan kolaborasi antara alumni, serta
                            memberikan kesempatan untuk membangun jaringan profesional yang kuat. Selain itu, sistem ini
                            juga dapat
                            membantu dalam mengorganisir acara atau reuni alumni, memperluas jangkauan karir, dan
                            menyediakan sumber
                            informasi yang berharga bagi para anggota alumni.</p>



          </div>
          <div class="col-sm-3 offset-md-1 py-4">
            <h4 class="text-white">Menu</h4>
            <ul class="list-unstyled">
              <h6 class="text-white">Profile</h6>
              <li><a href="profile/profile.php" class="text-white"><?php echo $_SESSION['nama']; ?></a>
              </li>
              <li><a href="../logout.php" class="text-white">Keluar</a></li>
              <hr color="white">
              <h6 class="text-white">Select Tables:</h6>
              <li><a href="index.php" class="text-white">Anggota</a></li>

              <li><a href="kerjakuliah.php" class="text-white">Alumni</a></li>

              <li><a href="profile/createdata/search.php" class="text-white">Cari Data</a></li>
              <hr color="white">
              <h6 class="text-white">Discussion:</h6>
              <li><a href="profile/discord.php" class="text-white">Discuss with Alumni</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
      <div class="container d-flex justify-content-between">
        <a href="index.php" class="navbar-brand d-flex align-items-center">

          <ion-icon name="people-circle-outline" class="mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none">
          </ion-icon>


          <strong> Informasi Paskibra SMKN 1 KATAPANG</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Selamat datang di Sistem Informasi Paskibra</h1>
        <p class="lead text-muted">Menampilkan Kegiatan Paskibra <strong>SMKN 1 KATAPANG</strong></p>
      </div>
    </section>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 10px;
      }

      .gallery img {
        width: 100%;
        height: auto;
        object-fit: cover;
      }

      /* Tambahkan media query untuk penyesuaian tata letak pada tampilan layar yang lebih kecil */
      @media screen and (max-width: 768px) {
        .gallery {
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
      }
    </style>
    <title>Dokumen Informasi Alumni</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/album.css">
    <link rel="stylesheet" href="../admin/assets/vendors/fontawesome/css/all.min.css">
</head>

<body>

  <main role="main">
    <section class="jumbotron text-center">
      <!-- Konten jumbotron yang sama seperti sebelumnya -->
    </section>

    <section class="gallery">
      <div class="col-md-12 ">
        <div class="card mb-4">
          <img src="../images/login-bg.png" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text">A caption for the above image.</p>
          </div>
        </div>
      </div>

      <div class="col-md-12 mx-auto">
        <div class="card mb-4">
          <img src="../images/login-bg.png" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text">A caption for the above image.</p>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card mb-4">
          <img src="../images/login-bg.png" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text">A caption for the above image.</p>
          </div>
        </div>
      </div>

      <!-- Tambahkan card lain di sini sesuai kebutuhan -->
    </section>

    <!-- Konten lainnya seperti footer -->
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#"><button class="btn btn-warning"> Back to top</button></a>
        </p>
        Copyright | Irdan Firmansyah
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
          ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="css/js/jquery.js"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="css/js/popper.min.js"></script>
    <script src="css/js/bootstrap.min.js"></script>
    <script src="css/js/holder.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <!-- Script-script yang sama seperti sebelumnya -->
</body>

</html>