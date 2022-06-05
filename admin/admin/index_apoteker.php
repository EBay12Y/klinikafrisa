<?php 

date_default_timezone_set('Asia/Jakarta');

include 'koneksidb.php'; 

include 'template/header.php'; 

include 'template/navbar_apoteker.php'; 


?>


      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Obat</h4>
                  <p class="card-description">
                     <code></code>
                  </p>
                  <div class="table-responsive">
                    

                     <?php

                    $query1="SELECT * FROM obat  ";
                    

                    $tampil=mysqli_query($kon, $query1) or die(mysqli_error());


                

                    ?>


                     <?php
             if(isset($_GET['aksi']) == 'hapus'){
        $id_obat = $_GET['id_obat'];
        $cek = mysqli_query($kon, "SELECT * FROM obat WHERE id_obat='$id_obat'");
        if(mysqli_num_rows($cek) == 0){

          
        }else{
          $delete = mysqli_query($kon, "DELETE FROM obat WHERE id_obat='$id_obat'");
          if($delete){
            
              echo "<script>alert('Data berhasil dihapus'); window.location = 'dataobat.php'</script>";



          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
          }
        }
      }
      ?>



                 <a href="input_obat.php" class="btn btn-sm btn-primary"><i class=""></i> Tambah data</a> 
                 <br>
                 <br>

                    <table class="table">
                      
                      <thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama Obat</center></th>
                         <th><center>Jenis Obat</center></th>
                        <th><center>Harga Jual</center></th>
                         <th><center>Aksi</center></th>
                         
                        

                      </tr>
                  </thead>
                     <?php 

                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    {

                     

                     $no++; 


                      ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $no; ?></center></td>
                
                
                    <td><center><?php echo $data['nama_obat']; ?></center></td>
                    <td><center><?php echo $data['jenis_obat']; ?></center></td>
                    <td><center><?php echo $data['harga_jual']; ?></center></td>
                     <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Data pasien" href="edit_obat.php?aksi=edit&id_obat=<?php echo $data['id_obat'];?>"><span class="glyphicon glyphicon-edit"></span>Ubah data</a>  

                        
                       <a onclick="return confirm ('Yakin untuk menghapus data?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Data pasien" href="dataobat.php?aksi=hapus&id_obat=<?php echo $data['id_obat'];?>">Hapus <span class="glyphicon glyphicon-trash"></a></center>

                        </td></tr>

                    
                     </div>
                 <?php   
              } 
              ?>
              
                   </tbody>

                    </table>
                  </div>
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
