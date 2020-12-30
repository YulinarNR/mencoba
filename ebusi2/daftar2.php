<?php
include 'koneksi/koneksi.php';
include 'daftar_proses.php';
if(isset($_POST['register'])){
  if (daftar($_POST) > 0) {
      echo "<script>
          alert('Akun baru berhasil ditambahkan');
          </script>";
      // header('location:login.php');
  } else {
    echo mysqli_error($koneksi);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-BUSI</title>
	<meta charset="utf-8">
	<meta main="viewport" content="width=decive-width, initial-scale=1">

    <!-- Favicons -->
  <link href="assets/img/polijelogo.png" rel="icon" class="logo">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Daftar Akun Baru</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" name="nama_depan" required pattern="[a-zA-Z -]{1,}" title="Masukkan berupa huruf" autofocus>
                                            <label class="label--desc">Nama Depan</label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" name="nama_belakang" required pattern="[a-zA-Z -]{1,}" title="Masukkan berupa huruf" autofocus>
                                            <label class="label--desc">Nama Belakang</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Username"  id="username" placeholder="Username" name="username" required pattern="[a-zA-Z -]{1,}" title="Masukkan berupa huruf" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email"  id="email" placeholder="Email" name="email" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                        <div class="input-group">
                                        <input class="input--style-5" type="text" name="Password" id="password" placeholder="Password"  name="password" aria-describedby="passwordHelp" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}" title="Demi keamanan diharapkan mengandung huruf Kapital dan Angka dengan minimal 8 Karakter">        
                                    </div>                             
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Konfirmasi Password</div>
                            <div class="value">
                                <div class="input-group">
                                <input class="input--style-5" type="text" name="Password" id="repassword" placeholder="Konfirmasi Password" name="repassword" aria-describedby="passwordHelp" required title="Masukkan Password yang sama persis dengan password yang anda masukkan diatas"> 
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            
                            
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->