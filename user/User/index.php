<?php 

date_default_timezone_set('Asia/Jakarta');

include 'koneksidb.php'; 

include 'template/header.php'; 

include 'template/navbar.php'; 

?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome, <?php echo $_SESSION['nama_pasien']?></h3>
                  <h6 class="font-weight-normal mb-0">Silakan melakukan pendaftaran untuk berobat dengan menginput data antrian pasien secara online <span class="text-primary"></span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white " type="text" id="" data-toggle="" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Tanggal : <?php echo date("d-m-Y"); ?>


                     

                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                    
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>

          <?php



            $query = mysqli_query($kon, "SELECT * FROM pasien WHERE id_user='$_SESSION[id_user]'");
            $data  = mysqli_fetch_array($query);
            ?>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/ps4.png" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        
                      </div>
                      <div class="ml-2">


                        <h2 class="location font-weight-normal">Nama Pasien : <?php echo $_SESSION['nama_pasien']; ?></h2>
                        <br>
                        <h6 class="font-weight-normal">Alamat : <?php echo $data['alamat']; ?> </h6>
                        <h6 class="font-weight-normal">Usia : <?php echo $data['usia']; ?> </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <?php $tampil=mysqli_query($kon, "select * from pendaftaran WHERE id_user='$_SESSION[id_user]' ");
                        $total=mysqli_num_rows($tampil);
                    ?>

                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Jumlah Riwayat Berobat</p>
                      <p class="fs-30 mb-2"><?php echo $total; ?></p>

                       <p>---</p>
                     
                    </div>
                  </div>
                </div>

                  <?php $tampil2=mysqli_query($kon, "select * from dokter ");
                        $total2=mysqli_num_rows($tampil2);
                    ?>

                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Dokter</p>
                      <p class="fs-30 mb-2"><?php echo $total2; ?></p>
                      <p>---</p>
                    </div>
                  </div>
                </div>
              </div>

              <?php $tampil3=mysqli_query($kon, "select * from jenis_poli ");
                        $total3=mysqli_num_rows($tampil3);
                    ?>

              <div class="row">
                <div class="col-md-12 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Jumlah Poli</p>
                      <p class="fs-30 mb-2"><?php echo $total3; ?></p>
                     <p>---</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  
                </div>
              </div>
            </div>
          </div>
          <a width="70px" length="100px" type="button" href="daftar.php" class="btn btn-primary btn-icon-text">
                          <i  class="ti-file btn-icon-prepend"></i>
                          Daftar Sekarang Disini
          </a> 

                    

   
          </div>
       
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      
<?php include 'template/footer.php'; ?>



        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

