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
  <?php
  session_start();
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- logo -->
       <a href="index.php" class="logo"><img src="assets/img/polijelogo.png" alt="" class="img-fluid">E-BUSI</a>

<!--       <h1 class="logo"><a href="index.php">fgdfgfyrtuAPK</a></h1> -->

      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <?php if (!isset($_SESSION['id_level'])): ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="daftar.php">Daftar</a></li>

          <?php elseif ($_SESSION['id_level']=="2"): ?>
            <li class="drop-down"><a href="">@<?php echo $_SESSION['username']; ?></a>
            <ul>
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
      <?php
include 'koneksi/koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$_GET[id]'");
$row = mysqli_fetch_assoc($data);
?>
           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7 ">
             <div class="card shadow mb-4 mt-3">
           

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <h5 class="m-0 font-weight-bold text-primary">Data Detail Produk</h5><hr>

                  <a  href="index.php?halaman=data_produk" class="btn btn-warning"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> <i class="fas fa-hand-point-left"></i></span></a> <br /><br />

                 
                                 <!-- Card Body -->
               <div class="card-body">
                 <form method="post" action="keranjang.php">
                  <!-- Awal form row -->
                  <div class="form-row">
                   <div class="form-group col-md-5">
                    <center><label style="background-color: rgb(135 206 250); ">Foto Produk</label></center><br>
                    <center><img src="foto_produk/<?php echo $row['foto_produk'];?>" width="63%"></center><br><br>
                   
                   </div>


                   <div class="form-group col-md-7">
                     <table class="table">
                    <tr>
                      <td colspan="2"><h4><b><?php echo $row['nama_produk'];?></b></h4></td>
                    </tr>

                    <tr>
                      <td colspan="2" style="text-align: justify;"><?php echo $row['info_produk'];?></td>

                    </tr>

                    <tr>
                      <td>Stok</td>
                      <td><?php echo $row['stok'];?></td>
                    </tr>

                    <tr>
                      <td>Berat Isi Produk</td>
                      <td><?php echo $row['beratisi_produk'];?></td>
                    </tr>

                     <tr>
                      <td>Harga Produk</td>
                      <td><?php echo $row['harga_produk'];?></td>
                    </tr>
                  
                    <tr>
                      <td>Jumlah Pembelian</td>
                        <td><input class="form-control form-control-sm" type="number" name="jml_pembelian" value="1" min="1" max="<?= $row['stok']; ?>"></td> 
                    </tr>
                    <tr>
                      <td colspan="2"><a href="keranjang.php" class="btn btn-primary btn-sm">
                      <i class="fa fa-shopping-cart"></i> Masukkan Keranjang</a>
                    </td>
                    </tr>
                  </table>

                   </div>
                   </div> <!-- Akhir form row -->


                   <div class="form-row"><!-- Awal Form Row -->
                    <div class="form-group col-md-12">
                    <table class="table">
                      <h3>Informasi Tambahan</h3>
                      <tr>
                        <td>Nutri dan Manfaat</td>
                      </tr>
                      <tr>
                        <td><i class="fas fa-plus"></i> <?php echo $row['nutrisi_manfaat'];?></td>
                      </tr>

                      <tr>
                        <td>Cara Penyimpanan</td>
                      </tr>
                      <tr>
                        <td><i class="fas fa-plus"></i> <?php echo $row['cara_penyimpanan'];?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                   </div><!-- Ahir Form Row -->
                  
                   
                 </form>

               </div>

             </div>
           </div>
      </div>


  </section><!-- End Hero -->

<script type="text/javascript">
$(document).ready(function(){
  <?php
  $id = $_GET['id'];
  $no = 1;
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_pilihan_produk WHERE id_produk='$id'");
  while ($d = mysqli_fetch_assoc($sql)) {
  ?>
  $("#btn<?= $no++ ?>").click(function(){
    $("#h").text("Rp <?= number_format($d['harga'])?>");
    $("#p").text("<?= $d['stok']; ?>");
    $(".btn-sm").removeClass("active");
    $(this).addClass("active");
  });
<?php } ?>
})

</script>
</body>
</html>