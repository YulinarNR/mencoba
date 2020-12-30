 <?php
  session_start();
   // cek apakah user sudah login.
  $koneksi = new mysqli("localhost","root","","db_kebuninovasi");

  if($_SESSION['pelanggan']['id_level']==""){
    echo "<script type='text/javascript'>alert('Silahkan <b>Login<b> terlebih dahulu'); </script>";
      header('location:keranjang.php?pesan=gagal');

  }
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
          <?php if (!isset($_SESSION['pelanggan']['id_level'])): ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="daftar.php">Daftar</a></li>

          <?php elseif ($_SESSION['pelanggan']['id_level']=="2"): ?>
            <li class="drop-down"><a href="">@<?php echo $_SESSION['pelanggan']['username']; ?></a>
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
 <pre><?php print_r($row); ?></pre>
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
<?php
$data = mysqli_query($koneksi, "SELECT * FROM tb_pembelian JOIN tb_user ON tb_pembelian.id_user=tb_user.id_user WHERE tb_pembelian.id_pembelian='$_GET[id]'");
$row = mysqli_fetch_assoc($data);
?>
  
           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
           

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <h5 class="m-0 font-weight-bold text-primary">Nota Pembelian</h5><hr>

                    <div class="form-row">
                      <div class="col-md-4" style="text-align: justify;">
                        <h4>Pembelian</h4><hr>
                        <strong>No. Pembelian: <?php echo $row['id_pembelian']; ?></strong><br>
                        Tanggal: <?php echo $row['tanggal_pembelian']; ?><br>
                        Total: Rp. <?php echo number_format($row['total_pembelian']); ?>,-

                    </div>

                    <div class="col-md-4" style="text-align: justify;">
                        <h4>Pelanggan</h4><hr>
                        <b>An. <?php echo $row['nama_depan'] . ' ' . $row['nama_belakang'] ; ?></b> <br>
                        <p>
                          <?php echo $row['info_kontak']; ?><br>
                          <?php echo $row['email']; ?><br>
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h4>Pengiriman</h4><hr>
                        <strong><?php echo $row['nama_kota']; ?></strong><br>
                        Ongkos Kirim: Rp. <?php echo number_format($row['tarif']); ?><br>
                        Alamat: <?php echo $row['alamat_pengiriman']; ?>
                    </div>
                    </div>

                    <!-- tabel rincia -->
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Berat Isi Produk</th>
                          <th>Harga</th>
                          <th>Jumlah</th>
                          <th>Subberat</th>
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $ambil_data = mysqli_query($koneksi, "SELECT * FROM tb_pembelian_produk WHERE id_pembelian='$_GET[id]' ");
                        while($row_data = mysqli_fetch_array($ambil_data)){ ?>

                      
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $row_data['nama']; ?></td>
                          <td><?php echo $row_data['berat']; ?> kg</td>
                          <td>Rp. <?php echo number_format( $row_data['harga']); ?>,-</td>
                          <td><?php echo $row_data['jumlah']; ?></td>
                          <td><?php echo $row_data['subberat']; ?></td>
                          <td>
                            Rp. <?php echo number_format( $row_data['subtot']); ?>,-
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>

                    <div class="row">
                      <div class="col-md-7">
                        <div class="alert alert-info">
                        <p>
                          Silahkan melakukan pembayaran senilai <b> Rp.<?php echo number_format($row['total_pembelian']) ?>,- </b> ke <br>
                          <strong>BANK MANDIRI 152-002836-5921 An. Tosan</strong>
                        </p>
                        </div>
                      </div>
                    </div>
                    
            
                   <hr>
                   
                 </form>

                 <p>&nbsp;</p>
               </div>

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