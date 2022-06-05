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
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">


 <?php
            $id_dokter = $_GET['id_dokter'];
      $sql = mysqli_query($kon, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: datadokter.php");
      }else{
        $row = mysqli_fetch_assoc($sql);
      }
      if(isset($_POST['update'])){


$nama_dokter=$_POST["nama_dokter"];
$nama_poli=$_POST["nama_poli"];
$alamat=$_POST["alamat"];


        $update = mysqli_query($kon, "UPDATE dokter SET nama_dokter='$nama_dokter', nama_poli='$nama_poli', alamat='$alamat'WHERE id_dokter='$id_dokter'") or die(mysqli_error());


        if($update){
                    echo "<script>alert('Selamat! Data berhasil diubah'); window.location = 'datadokter.php'</script>"; 
             
             

        }else{
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
        }
      }
      
      //if(isset($_GET['pesan']) == 'sukses'){
      //  echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
      //}
      ?>




                <div class="card-body">
                  <h4 class="card-title">Edit data dokter</h4>
                  <p class="card-description">
                   <BR>
                  </p>
                   <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

                    

                    
                   



                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Dokter</label>
                      
                    <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?php echo $row['nama_dokter']; ?>" placeholder="Enter Full Name">


                    </div>


                     <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Poli</label>
                      

                      <select name="nama_poli" id="nama_poli" class="form-control" required>
                      <option value="">--   Pilih    --</option>
                              <?php 
                    $query2="select * from jenis_poli order by id_poli";
                    $tampil=mysqli_query($kon, $query2) or die(mysqli_error());
                    while($data1=mysqli_fetch_array($tampil))
                    {
                    ?>
                              
                                  
                              
              <option value="<?php echo $data1['nama_poli'];?>"><?php echo $data1['nama_poli'];?></option>
                <?php

                 } 

                 ?>
                              
                              </select> 


                    </div>
                   


                    <div class="form-group">

                      <label for="exampleInputEmail1">Alamat</label>
                      
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" placeholder="alamat">
                      

                    </div>


                    
                    
                    <button type="submit" name="update"  class="btn btn-primary mr-2">Ubah Data</button>
                    <button class="btn btn-light">Kembali</button>
                  </form>
                </div>
              </div>
            </div>
             </div>
            </div>
                     
               
                        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      

      <?php include 'template/footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

  <!-- End custom js for this page-->

    <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>


</body>

</html>
