<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "klinikafrisa";

    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $sql2=$koneksi->query("select * from dokter");

    while ($tampil2=$sql2->fetch_assoc()){
        $jumlah_dokter=$sql2->num_rows;
    }
    $sql3=$koneksi->query("select * from obat");

    while ($tampil3=$sql3->fetch_assoc()){
        $jumlah_obat=$sql3->num_rows;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Klinik Afrisa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        
      </div>
      <div class="social-links">
       
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><img src="assets/img/logoKlinik.png"> <a href="index.php">Klinik Afrisa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="admin/index.php">&emsp;&emsp;  </a></li>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#counts">Artikel</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="user/login.php" class="appointment-btn scrollto">Buat Janji Dengan Dokter</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Selamat Datang di </h1>
      <h2>Sistem Pendaftaran Pasien Klinik Afrisa</h2>
      <a href="user/index.php" class="btn-get-started scrollto">Daftar Sekarang</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Apa itu SISPENPAS?</h3>
              <p>
               SISPENSAS merupakan Sistem Pendaftaran Pasien secara online, dimana pasien tidak perlu datang ke klinik, hanya lewat website resmi Klinik Afrisa pasien bisa mendaftar secara online dengan membuat akun dan melakukan pendaftaran dari rumah.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Baca Lebih lengkap <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>KECEPATAN</h4>
                    <p>Memberikan pelayanan dengan kecepatan yang lebih baik dari sebelumnya</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>EFEKTIFITAS</h4>
                    <p>Lebih efektif, efisien, cepat dan tidak lagi mengantri lama untuk pengambilan formulir</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>KEMUDAHAN</h4>
                    <p>Pendaftaran yang dapat diakses di mana saja dan kapan saja</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

   

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0"></div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up"><?php echo"$jumlah_dokter";?></span>
              <p>Jumlah Dokter</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up"><?php echo"$jumlah_obat";?></span>
              <p>Jumlah Obat</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Artikel</h2>
          <!-- <p>Unit pelayanan masyarakat yang bergerak pada bidang kesehatan di rumah sakit ANNI"MAH banyumas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <h4><a href="">Tips</a></h4>
            <img src="assets/img/tips1.jpg" width="250"> <br> <br>
              <p><b>Ini 10 Siasat Menjaga Kesehatan Tubuh Agar Kebal dari Serangan Penyakit
              </b> Siapa yang mau kena serangan suatu penyakit? Tentu tidak ada. Ya, ada banyak hal yang bisa Anda lakukan untuk menjaganya. 
              Berikut beberapa cara menjaga kesehatan tubuh yang mesti Anda lakukan.
              <br><a href="https://hellosehat.com/sehat/informasi-kesehatan/cara-menjaga-kesehatan-tubuh/"> Baca selengkapnya disini</a></p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <h4><a href="">Berita</a></h4>
            <img src="assets/img/berita1.jpg" width="250"> <br> <br>
              <p><b>Update Corona Indonesia Sabtu 14 Mei 2022: Masih Ada 4.825 Kasus Covid-19 Aktif per Hari Ini 
              </b> Kasus virus corona (Covid-19) di Indonesia terus mengalami kenaikan, meski angkanya kini telah stabil, 
              terutama dengan makin meningkatnya jumlah masyarakat yang telah divaksinasi. 
              <br><a href="https://bekasi.pikiran-rakyat.com/nasional/pr-124476586/update-corona-indonesia-sabtu-14-mei-2022-masih-ada-4825-kasus-covid-19-aktif-per-hari-ini"> Baca selengkapnya disini</a></p>
            </div>
          </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
            <h4><a href="">Tips</a></h4>
            <img src="assets/img/tips2.jpeg" width="250"> <br> <br>
              <p><b>5 Kebiasaan Simpel untuk Hidup Lebih Positif, Sudah Kamu Lakukan?
              </b> Ada banyak kebiasaan simpel yang sebetulnya bisa dilakukan untuk mengubah hidup menjadi lebih positif. 
              Bahkan, ktia sering kali tak perlu mengeluarkan biaya untuk melakukannya.
              <br><a href="https://www.detik.com/edu/detikpedia/d-6041560/5-kebiasaan-simpel-untuk-hidup-lebih-positif-sudah-kamu-lakukan"> Baca selengkapnya disini</a></p>
            </div>
            </div>
         
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
   

         

    <!-- ======= Departments Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>--- </span></strong>Klinik Afrisa
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
           <a href="https://bootstrapmade.com/"></a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>