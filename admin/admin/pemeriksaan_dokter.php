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
                    $id_user = $_GET['id_user'];
                    $sql = mysqli_query($kon, "SELECT * FROM pasien WHERE id_user='$id_user'");
                    if (mysqli_num_rows($sql) == 0) {
                        header("Location: datapasien.php");
                    } else {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    if (isset($_POST['update'])) {

                        $nama_pasien = $_POST["nama_pasien"];
                        $alamat = $_POST["alamat"];
                        $jenis_kelamin = $_POST["jenis_kelamin"];
                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        $usia = $_POST["usia"];
                        $no_hp = $_POST["no_hp"];
                        $level = "user";


                        $update = mysqli_query($kon, "UPDATE pasien SET nama_pasien='$nama_pasien', alamat='$alamat', jenis_kelamin='$jenis_kelamin', username='$username', password='$password', usia='$usia', no_hp='$no_hp' WHERE id_user='$id_user'") or die(mysqli_error());



                        if ($update) {
                            echo "<script>alert('Data berhasil diubah'); window.location = 'datapasien.php'</script>";
                        } else {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
                        }
                    }

                    //if(isset($_GET['pesan']) == 'sukses'){
                    //  echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
                    //}
                    ?>

<?php

if(isset($_POST['simpan'])){



// $id_diagnosa=$_POST["id_diagnosa"];
$nama_dokter="nama_dokter";
$nama_pasien=$_POST["nama_pasien"];
$id_diagnosa=$_POST["id_diagnosa"];
$keluhan=$_POST["keluhan"];
$hasil_pemeriksaan=$_POST["hasil_pemeriksaan"];
$keterangan=$_POST["keterangan"];
$level="User";


 $cek = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM pemeriksaan_dokter WHERE id_diagnosa='$id_diagnosa'"));

 if ($cek > 0){
 echo "<script>window.alert('anda sudah melakukan pengisian  ')
 window.location='pemeriksaan_dokter.php'</script>";
 }else {
 mysqli_query($kon, "INSERT INTO pemeriksaan_dokter (id_diagnosa, nama_dokter, nama_pasien, keluhan, hasil_pemeriksaan, keterangan) VALUES ('$id_diagnosa', '$nama_dokter' ,'$nama_pasien', '$keluhan', '$hasil_pemeriksaan', '$keterangan')");
 include 'Konfirmasi_pemeriksaan.php';
 echo "<script>window.alert('Data berhasil disimpan')
 window.location='pemeriksaan.php'</script>";
 
 }
 }
 ?>

                    <div class="card-body">
                        <h4 class="card-title">Data Diri Pasien</h4>
                        <p class="card-description">
                            <BR>
                        </p>
                        <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<!-- 


                            <input name="id_user" type="hidden" id="id_user" class="form-control" placeholder="Tidak perlu di isi" value="<?php $a = "pasien";
                                                                                                                                            $b = rand(1000, 10000);
                                                                                                                                            $c = $a . $b;
                                                                                                                                            echo $c; ?>" autofocus="on" readonly="readonly" /> -->

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pasien</label>

                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?php echo $row['nama_pasien']; ?>" placeholder="Enter Full Name" readonly>


                            </div>



                            <div class="form-group">

                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" placeholder="Enter Full Name" readonly>


                            </div>


                            <div class="form-group">

                                <label for="exampleInputEmail1">Alamat</label>

                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" placeholder="alamat" readonly>


                            </div>


                            <div class="form-group">

                                <label for="exampleInputEmail1">Usia</label>

                                <input type="text" class="form-control" id="usia" name="usia" value="<?php echo $row['usia']; ?>" placeholder="usia" readonly>


                            </div>

                            <div class="form-group">

                                <label for="exampleInputEmail1">Nomer Handphone</label>

                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $row['no_hp']; ?>" placeholder="Enter Mobile Number" readonly>


                            </div>


                        </form>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Diagnosa Pasien</h4>
                        <p class="card-description">
                            <BR>
                        </p>
                        <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        <!-- <form role="form" action="pemeriksaan_dokter.php" method="get"></form> -->


                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <form class="forms-sample" action="Konfirmasi_pemeriksaan.php" method="post">



                                            <input name="id_diagnosa" type="hidden" id="id_diagnosa" class="form-control" placeholder="Tidak perlu di isi" value="<?php $a = "diagnosa";
                                                                                                                                                            $b = rand(1000, 10000);
                                                                                                                                                            $c = $a . $b;
                                                                                                                                                            echo $c; ?>" autofocus="on" readonly="readonly" />



                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Keluhan</label>

                                                <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Masukkan keluhan pasien">


                                            </div>



                                            <div class="form-group">

                                                <label for="exampleInputEmail1">Hasil Pemeriksaan (TB, BB, TD, Suhu)</label>

                                                <input type="text" class="form-control" id="hasil_pemeriksaan" name="hasil_pemeriksaan" placeholder="(TB, BB, TD, Suhu)">


                                            </div>


                                            <div class="form-group">

                                                <label for="exampleInputEmail1">Keterangan</label>

                                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">


                                            </div>

                    
                                            <button type="submit" name="simpan" class="btn btn-primary mr-2">SIMPAN DATA</button>
                                            <button class="btn btn-light">Kembali</button>
                                        </form>

                                    </div>
                                </div>
                            </div>

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