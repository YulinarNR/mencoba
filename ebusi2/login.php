<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-BUSI</title>
    <link rel="stylesheet" href="css-login/style.css" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

     <div class="form-group">
                      <?php
          if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            if ($pesan == "gagal"){
              ?>
              <div class="alert alert-danger">
                <center><strong>Gagal!</strong> Periksa Kembali Akun Anda </center>
              </div>
              <?php
            }
          }
          ?>
      </div>
    <div class="container">
      <div class="img">
        <img src="gambar/login/1.jpg" />
      </div>
      <div class="login-container">
        <form action="login_proses_nyoba.php" method="post">
        <img class="avator" src="gambar/login/3.png" />
          <h2>Login</h2>
          
          <div class="input-div" one>
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h5>Username</h5>
              <label for="username"></label>
              <input type="text" class="input" id="username" name="username" required>
            </div>
          </div>
          <div class="input-div" two>
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div>
              <h5>Password</h5>
              <input type="password" class="input" id="password" name="password" required>
            </div>
          </div>
          <!-- <a href="lupa_pass.php">Lupa Password</a> -->
    <button type="submit" class="btn text-white" name="login">Login</button>
  </form>
      </div>
    </div>
   
    <script type="text/javascript" src="js-login/main.js"></script>
  </body>
</html>
