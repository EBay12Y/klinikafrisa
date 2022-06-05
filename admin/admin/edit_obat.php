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
    $id_obat = $_GET['id_obat'];
      $sql = mysqli_query($kon, "SELECT * FROM obat WHERE id_obat='$id_obat'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: dataobat.php");
      }else{
        $row = mysqli_fetch_assoc($sql);
      }
      if(isset($_POST['update'])){


$nama_obat=$_POST["nama_obat"];
$jenis_obat=$_POST["jenis_obat"];
$harga_beli=$_POST["harga_beli"];
$harga_jual=$_POST["harga_jual"];
$profit=$_POST["profit"];
$level="user";
      
                
        $update = mysqli_query($kon, "UPDATE obat SET nama_obat='$nama_obat', jenis_obat='$jenis_obat', harga_beli='$harga_beli', harga_jual='$harga_jual', profit='$profit' WHERE id_obat='$id_obat'") or die(mysqli_error());


        if($update){
                    echo "<script>alert('Data berhasil diubah'); window.location = 'dataobat.php'</script>"; 
             
             

        }else{
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
        }
      }
      
      //if(isset($_GET['pesan']) == 'sukses'){
      //  echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
      //}
      ?>

                <div class="card-body">
                  <h4 class="card-title">Edit Data Obat</h4>
                  <p class="card-description">
                   <BR>
                  </p>
                   <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

                    

                     <input name="id_obat" type="hidden" id="id_obat" class="form-control" placeholder="Tidak perlu di isi" value="<?php $a="obat"; $b=rand(1000,10000); $c=$a.$b; echo $c; ?>" autofocus="on" readonly="readonly" />
                   



                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Obat</label>
                      
                    <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?php echo $row['nama_obat']; ?>" placeholder="Enter Full Name">


                    </div>


                    <div class="form-group">

                      <label for="exampleInputEmail1">Jenis Obat</label>
                      
                    <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" value="<?php echo $row['jenis_obat']; ?>" placeholder="jenis_obat">
                      

                    </div>

                    <div class="form-group">

                    <label for="exampleInputEmail1">Harga Beli</label>

                    <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="<?php echo $row['harga_beli']; ?>" placeholder="harga_beli">
                    

                    </div>


                     <div class="form-group">

                      <label for="exampleInputEmail1">Harga Jual</label>
                      
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?php echo $row['harga_jual']; ?>" placeholder="harga_jual">
                      

                    </div>

                     <div class="form-group">

                      <label for="exampleInputEmail1">Profit</label>
                      
                      <input type="text" class="form-control" id="profit" name="profit" value="<?php echo $row['profit']; ?>" placeholder="Enter Mobile Number">
                        

                    </div>

                    
                  
                  <div class="form-group">
                    
                    <button type="submit" name="update"  class="btn btn-primary mr-2">ubah data</button>
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
