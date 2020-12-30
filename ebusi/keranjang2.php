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

<?php
if (isset($_POST['id_produk'], $_POST['jml_pembelian'])) {
  
  $id = $_POST['id_produk'];
  $jml_pembelian = $_POST['jml_pembelian'];

  $produk = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk = '$id'");
  $row_produk = $produk->fetch_assoc();

  if (isset($_SESSION['keranjang'])) $_SESSION['keranjang'] = [];
    
    $index = -1;
    $keranjang = unserialize(serialize($_SESSION['keranjang']));

    //jika produk sudah ada dalam keranjang maka jumlah pembelian akan di update
    for ($i=0; $i<count($keranjang); $i++){
      if ($keranjang[$i]['id_produk'] == $id) {
        $index = $i;
        $_SESSION['keranjang'][$i]['jml_pembelian'] = $jml_pembelian;
        break;
      }
    }


    //jika produk belim ada dalam keranjang
    if ($index == -1) {
      $_SESSION['keranjang'][] = [
        'id_produk' => $id,
        'foto_produk' => $row_produk['foto_produk'],
        'nama_produk' => $row_produk['nama_produk'],
        'beratisi_produk' => $row_produk['beratisi_produk'],
        'harga_produk' => $row_produk['harga_produk'],
        'jml_pembelian' => $jml_pembelian
      ];
    }

  }
?>

    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      <div class="section-tittle">
        <?php
        if (!empty($_SESSION['keranjang'])) {
    ?>
        <h4><i class="fas fa-cart-plus"> Keranjang Belanja</i></h4><br>
      </div>
      <div class="row">
        <div class="col-lg-12 justify-content-center">

          <table class="table">
            <tr>
              <td>No</td>
              <td>Aksi</td>
              <td>Foto Produk</td>
              <td>Nama Produk</td>
              <td>Berat Isi Produk</td>
              <td>Jumlah</td>
              <td>Harga</td>
              <td>Total</td>
            </tr>

            <?php
            if (isset($_SESSION['keranjang'])) {
              $keranjang = unserialize(serialize($_SESSION['keranjang']));
              $index = 0;
              $no = 1;
              $total = 0;
              $total_bayar = 0;

              for ($i=0; $i<count($keranjang); $i++){
                $total = $keranjang[$i]['harga_produk'] * $_SESSION['keranjang'][$i]['jml_pembelian'];
                $total_bayar += $total;
                ?>

            <tr>
              <td><?= $no++; ?></td>
              <td><a href="?index=<?= $index; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
              <td><img src="foto_produk/<?php echo $keranjang[$i]['foto_produk']; ?>" height='30px' width='30px'></td>
              <td><?= $keranjang[$i]['nama_produk']; ?></td>
              <td><?= $keranjang[$i]['beratisi_produk']; ?></td>
              <td><?= $keranjang[$i]['jml_pembelian']; ?></td>
              <td><?= $keranjang[$i]['harga_produk'] ?></td>
              <td><?= $keranjang[$i]['total']; ?></td>
            </tr>

            <?php 
            $index++;
          }

          //hapus produk dalam keranjang
          if (isset($_GET['index'])) {
            $keranjang = unserialize(serialize($_SESSION['keranjang']));
            unset($keranjang[$_GET['index']]);
            $keranjang = array_values($keranjang);
            $_SESSION['keranjang'] = $keranjang;
          }
        }
        ?>
          <tr>
            <td colspan="7" align="right"><strong>Total Bayar</strong></td>
            <td><strong><?= $total_bayar; ?></strong></td>
            <td align="center">
              <a href="transaksi.php">
                <button class="btn btn-success btn-sm">Checkout</button>
              </a>
            </td>
          </tr>

           </table>
         <br>
         <br>
          <div class="mt-3">
            <a href="#team" class="btn-get-started scrollto">Checkout</a>
          </div>
        </div>

    </div>

  </section><!-- End Hero -->
  <?php
}
if (isset($_GET['index'])) {
  header('Location: index.php');
}

?>
</body>
</html>