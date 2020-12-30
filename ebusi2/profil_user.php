  <?php
  session_start();
  // echo "<pre>";
  // print_r($_SESSION['keranjang']);
  // echo "</pre>";
  include 'koneksi/koneksi.php';
  if($_SESSION['id_level']==""){
    echo "<script>alert('Silahkan login terlebih dahulu!'); location='login.php';</script>";
  }

 $id_user = $_SESSION['pelanggan']['id_user'];
  $data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user = '$id_user'");
  $row = mysqli_fetch_array($data);
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

    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      <div class="section-tittle">
      
      </div>

      <div class="row">
        <div class="col-lg-12 justify-content-center">

          <!-- isi data -->

        <div class="card shadow mb-4">
          <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Foto Profil</h6>
          </div>

        <div class="card-body">
         <!-- Foto -->
         <form  method="POST" enctype="multipart/form-data"><!--action="update_profil_admin.php"(dalam)-->
          <div class="foto position-relative ">
       
            <center><img src="gambar/foto_user/<?php echo $row['foto_user']; ?>" height='200px' width='200px' class="img-thumbnail" alt="foto">
            <div class="btn-foto">   
             <a class="btn btn-light text-dark px-1" data-toggle="modal" data-target="#Modal-foto-profil" role="button"><i class="fa fa-edit"></i></a>   
             </div> 
           </center>

            </div>  
            </form>                      
            </div>

<!-- Data Profil -->
<div class="col-lg-12">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
     <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>                                                            
   </div>

  <div class="card-body">                     
    <form method="post">
      <div class="form-row">

      <div class="form-group col-md-6">
        <label>Username</label>
        <input type="text" class="form-control form-control-user"  name="username" placeholder="Username Anda" value="<?php echo $row['username']; ?>" required>
      </div>

      <div class="form-group col-md-6">
        <label>Password</label>
          <input type="password" class="form-control form-control-user" name="password" placeholder="Password Anda" value="<?php echo $row['password']; ?>" required>
      </div>

      <div class="form-group col-md-6">
        <label>Nama Depan</label>
        <input type="text" class="form-control form-control-user"  name="namadepan" placeholder="Nama Depan Anda" value="<?php echo $row['nama_depan']; ?>" required>
      </div>

      <div class="form-group col-md-6">
        <label>Nama Belakang</label>
          <input type="text" class="form-control form-control-user" name="namabelakang" placeholder="Nama Belakang Anda" value="<?php echo $row['nama_belakang']; ?>" required>
      </div>

       <div class="form-group col-md-8">
         <label>Alamat Email</label>
           <input type="text" class="form-control form-control-user" name="alamatemail" placeholder="Alamat Email Anda" value="<?php echo $row['email']; ?>" required>
       </div>

        <div class="form-group col-md-4">
          <label>Info Kontak</label>
            <input type="text" class="form-control form-control-user"  name="infokontak" placeholder="Info Kontak Anda" value="<?php echo $row['info_kontak']; ?>" required>
        </div>

         <div class="form-group col-md-12">
           <label>Alamat</label>
            <textarea class="form-control" name="infoalamat" required><?php echo $row['alamat'];?></textarea>
         </div>
      </div>

      <input type="submit"  class="btn btn-primary" name="simpan" value="Simpan Perubahan">

    <?php
    if (isset($_POST['simpan']))
    {
      $koneksi->query("UPDATE tb_user SET username='$_POST[username]',password='$_POST[password]',nama_depan='$_POST[namadepan]',nama_belakang='$_POST[namabelakang]',email='$_POST[alamatemail]',info_kontak='$_POST[infokontak]',alamat='$_POST[infoalamat]' WHERE id_user='$id_user'");
      echo "<script>alert('data profil telah diubah');</script>";
      echo "<script>location='profil_user.php'</script>";
    }
    
    ?>
     <hr>
                                   
    </form>
   </div>
  </div>
</div>

<!-- Modal Foto -->
<div class="modal fade" id="Modal-foto-profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Foto Profil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
        <img src="gambar/foto_user/<?php echo $row['foto_user']; ?>" width="200" class="rounded mx-auto d-block m-3">
        <p>Format file .jpg/.png/.jpeg</p> <p>Ukuran Maksimum 3mb</p>
        
          <form  method="POST" enctype="multipart/form-data">
              <div class="input-group mb-3">
                  <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                  <input type="file" id="inputGroupFile02" name="file">

                  

              </div>
              <br>
              <div class="modal-footer">
                <input type="submit"  class="btn btn-primary" name="post_foto_user" value="Unggah">

                <?php
                  if (isset($_POST['post_foto_user']))
                  {
                    $namafoto=$_FILES['file']['name'];
                    $lokasifoto=$_FILES['file']['tmp_name'];
                    $namafiks = date("YmdHis").$namafoto;
                    if (!empty($lokasifoto)){
                      move_uploaded_file($lokasifoto, "gambar/foto_user/$namafiks");

                      $koneksi->query("UPDATE tb_user SET foto_user='$namafiks' WHERE id_user='$id_user'");
                    }
                    else{

                    }
                    echo "<script>alert('foto profil telah diubah');</script>";
                    echo "<script>location='profil_user.php'</script>";
                  }
                  ?>

                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                
              </div>
          </form>    
        </div>  
    </div>
  </div>
</div>



         </div>
<!-- akhir -->

         </div>

    </div>

  </section><!-- End Hero -->

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