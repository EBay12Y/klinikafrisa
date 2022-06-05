<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form HTML Design</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../assets/img/favicon1.png" />
  </head>

  <body>
    <div class="container-fluid form-container">
      <form onSubmit="validasi()"   action="proseslogin.php" id="login" name="login" method="post"  >

      <div class="container login-container">
          <div class="row">
              <?php if (isset($_GET['error'])) {
             

                  echo "<script>alert('Username dan password tidak sesuai!'); window.location = 'index.php'</script>"; 

              }
                  

                          ?>
              <div class="col-md-7 form-part">
                <div class="row">
                   <p class="signinlink">Kembali ke <a href="../index.php">Halaman Utama </a></p>
                   <br><br>
                   <!-- <p align="center"><a href="../index.php"><img src="../assets/img/logoKlinik2.png"></a></p> -->
                  <div class="col-lg-8 col-md-11 login formcol mx-auto">
                       <h3>Halaman Login Admin</h3>
                      
                       <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        <label for="floatingInput">Username</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <div class="form-floating">
                       <button class="btn btn-primary">Login</button>
                      </div>
  

                  </div>
                 
                </div>
                 
              </div>
               

               <div class="col-md-5 content-part">
                  <h4 class="logo">Welcome Admin!</h4>

                  <img src="assets/images/feature-img-05.png" alt="">

                  <h2>SIGN IN.</h2>
                  <p>Silakan masuk menggunakan akun yang sudah terdaftar dan Anda bisa mulai mendaftar secara online kapan saja dan di mana saja</p>
              </div>


          </div>


      </div>

    </div> 


  </body>



  </html>

       <script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        
        if (username != "" && password!="") {
            return false;
            
        }else{
            alert('Anda harus mengisi data dengan lengkap !');

        }
    }
</script>
