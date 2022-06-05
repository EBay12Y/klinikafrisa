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

   if(isset($_POST['simpan'])){

    $nama_obat=$_POST["nama_obat"];
    $jenis_obat=$_POST["jenis_obat"];
    $harga_beli=$_POST["harga_beli"];
    $harga_jual=$_POST["harga_jual"];
    $profit=$_POST["profit"];
    $level="user";

 
    $cek = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM obat WHERE id_obat='$id_obat'"));

    if ($cek > 0){
    echo "<script>window.alert('anda sudah menambahkan obat')
    window.location='input_obat.php'</script>";
    }else {
    mysqli_query($kon, "INSERT INTO obat (id_obat, nama_obat, jenis_obat, harga_beli,harga_jual,profit) VALUES ('$id_obat', '$nama_obat', '$jenis_obat', '$harga_beli', '$harga_jual', '$profit')");
    echo "<script>window.alert('Data Berhasil Disimpan')
    window.location='dataobat.php'</script>";
    }
    }
    ?>

                <div class="card-body">
                  <h4 class="card-title">Input Data obat</h4>
                  <p class="card-description">
                   <BR>
                  </p>
                  <form class="forms-sample" action="input_obat.php" method="post" >

                    

                     <input name="id_obat" type="hidden" id="id_obat" class="form-control" placeholder="Tidak perlu di isi" value="<?php $a="obat"; $b=rand(1000,10000); $c=$a.$b; echo $c; ?>" autofocus="on" readonly="readonly" />
                   



                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama obat</label>
                      
                    <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Enter Full Name">


                    </div>


                    <div class="form-group">

                      <label for="exampleInputEmail1">jenis_obat</label>
                      
                    <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" placeholder="jenis_obat">
                      

                    </div>


                     <div class="form-group">

                      <label for="exampleInputEmail1">Harga Beli</label>
                      
                      <input type="text" class="form-control" id="harga_beli" name="harga_beli" placeholder="Enter Mobile Number">
                        

                    </div>

                     <div class="form-group">

                      <label for="exampleInputEmail1">Harga Jual</label>
                      
                     <input type="text" class="form-control" id="harga_jual" name="harga_jual" placeholder="harga_jual">
                        

                    </div>

                    <div class="form-group">

                      <label for="exampleInputEmail1">profit</label>
                      
                    <input type="text" class="form-control" id="profit" name="profit" placeholder="profit">
                      

                    </div>
                                      
                    <button type="submit" name="simpan"  class="btn btn-primary mr-2">SiMPAN DATA</button>
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
