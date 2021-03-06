<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Pendaftaran Pasien</title>
    <link href="../assets/img/favicon1.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container-fluid form-container">
      <div class="container login-container">

        <form action="prosesregistrasi.php" method="post">
          <div class="row">

            
             
              <div class="col-md-7 form-part">
                <div class="row">
                   <p class="signinlink">Sudah punya akun? <a href="login.php">Login Disini</a></p>

                  <div class="col-lg-8 col-md-11  formcol mx-auto">
                       <h3>Buat Akun Baru</h3>


                        <input name="id_user" type="hidden" id="id_user" class="form-control" placeholder="Tidak perlu di isi" value="<?php $a="pasien"; $b=rand(1000,10000); $c=$a.$b; echo $c; ?>" autofocus="on" readonly="readonly" />

                        <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Enter Full Name">
                        <label for="floatingInput">Nama Lengkap</label>
                      </div>
                         <div class="form-floating mb-3">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="">--   Pilih   --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                
                        </select>
                        <label for="floatingInput">Jenis Kelamin</label>

                      </div>

                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                        <label for="floatingInput">Alamat</label>
                      </div>

                       <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usia" name="usia" placeholder="usia">
                        <label for="floatingInput">Usia</label>
                      </div>
                      

                      <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="tgl_lahir">
                        <label for="floatingInput">Tanggal Lahir</label>
                      </div>


                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Enter Mobile Number">
                        <label for="floatingInput">Nomer Handphone</label>
                      </div>

                       <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Email Address">
                        <label for="floatingInput">Username (untuk login)</label>
                      </div>


                      <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="floatingPassword">Password (untuk login)</label>
                      </div>


                      <div class="form-floating">
                       <button type="submit" value="" id="submit" name="submit" class="btn btn-primary">Buat Akun</button>
                      </div>

                  </div>
                 
                </div>
                 
              </div>

               <div class="col-md-5 content-part">
                  <h4 class="logo">Silakan Buat Akun Anda</h4>

                  <img src="assets/images/regis.png" alt="">

                  <h3></h3>
                  <p>Buat akun Anda terlebih dahulu sebelum melakukan pendaftaran sebagai pasien secara online dan berkonsultasi dengan dokter..</p>

                  <p class="signinlink"> <a href="../index.php">Klik untuk kembali ke Home</a></p>
              </div>

          </div>
      </div>
    </div> 

  </body>
  </html