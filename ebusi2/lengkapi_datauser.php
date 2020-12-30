  <?php
  session_start();
  // echo "<pre>";
  // print_r($_SESSION['keranjang']);
  // echo "</pre>";
  include 'koneksi/koneksi.php';
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-BUSI </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="assets/img/polijelogo.png" rel="icon" class="logo">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2aca802f76.js" crossorigin="anonymous"></script>
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- logo -->
       <a href="index.php" class="logo"><img src="assets/img/polijelogo.png" alt="" class="img-fluid">E-BUSI</a>


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="index.php#about">Tentang</a></li>
          <li><a href="index.php#portfolio">Galeri</a></li>
          <li><a href="index.php#team">Katalog</a></li>
          <?php if (!isset($_SESSION['id_level'])): ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="daftar.php">Daftar</a></li>

          <?php elseif ($_SESSION['id_level']=="2"): ?>
            <li class="drop-down"><a href="">@<?php echo $_SESSION['pelanggan']['username']; ?></a>
             <ul>
               <li><a class="dropdown-item" href="profil_user.php"> <i class="fas fa-user"></i>  Profile </a></li><hr class="sidebar-divider my-0">
              <li><a class="dropdown-item" href="riwayat.php"> <i class="fas fa-fw fa-folder"></i> Riwayat Belanja </a></li><hr class="sidebar-divider my-0">
              <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout  </a></li>
            </ul></li>

          <?php endif ?>
          <li><a href="keranjang.php"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->
  <?php
  include 'koneksi/koneksi.php';
  $id_user = $_GET['id'];
  $data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id_user'");
  $row = mysqli_fetch_assoc($data);
  ?>
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      <div class="section-tittle">
        <h4><i class="fas fa-sign-in"> Lengkapi Data Diri Anda</i></h4><hr>
      </div>
       <form method="post" enctype="multipart/form-data">
       <div class="card-body">

         
        <div class="form-row">
            <div class="form-group col-md-4"></div>

            <center>
           <div class="form-group col-md-4">
             <label style="background-color: #FAEBD7;">Foto</label><br>
              <img src="gambar/foto_user/<?php echo $row['foto_user']; ?>" height='100' width='auto'>
           </div>
           </center>

           <div class="form-group col-md-4"></div>
            
        </div>
        <hr>
         <div class="form-row">
           <div class="form-group col-md-4">
            <label>Email</label><br>
             <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>" readonly>
           </div>
           <div class="form-group col-md-4">
            <label>Nama Belakang</label><br>
             <input type="text" name="nama_belakang" class="form-control" value="<?php echo $row['nama_belakang'] ?>"readonly>
           </div>
           <div class="form-group col-md-4">
            <label>Alamat</label><br>
            <textarea class="form-control" name="alamat" required><?php echo $row['alamat'] ?></textarea>
            </div>
         </div>

         <div class="form-row">
           <div class="form-group col-md-4">
             <label>Username</label><br>
             <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" readonly>
           </div>
           <div class="form-group col-md-4">
             <label>Info Kontak</label><br>
             <input type="text" name="info_kontak" class="form-control" value="<?php echo $row['info_kontak'] ?>" required>
           </div>
          
         </div>

         <div class="form-row">
           <div class="form-group col-md-4">
             <label>Nama Depan</label><br>
             <input type="text" name="nama_depan" class="form-control" value="<?php echo $row['nama_depan'] ?>" readonly>
           </div>
           <div class="form-group col-md-4">
             <label>Foto</label><br>
             <input type="file" name="foto_user" class="form-control" value="<?php echo $row['foto_user'] ?>" required>
           </div>
         </div>
       </div>
          <div class="form-group">
           <div class="mt-3">
            <button type="submit"  class="btn btn-info" name="simpan">Simpan </button> 
          </div>

          </div>
        </div>
</form>
    </div>

  </section><!-- End Hero -->

<?php if (isset($_POST['simpan'])) {
  $id_user = $_GET['id'];
  $nama = $_FILES['foto_user']['name'];
  $lokasi = $_FILES['foto_user']['tmp_name'];
  move_uploaded_file($lokasi, "gambar/foto_user/".$nama);
  $koneksi->query("UPDATE tb_user SET alamat='$_POST[alamat]',info_kontak='$_POST[info_kontak]', foto_user='$nama' WHERE id_user='$_GET[id]'");
  echo "<script type='text/javascript'>location.href=\"index.php?pesan=terimakasih\"; </script>";

} 
?>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda yakin untuk keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout_user.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
