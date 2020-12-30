<?php include 'koneksi/koneksi.php'; ?>
<?php
//jopok id
$id_produk = $_GET["id"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
      <link rel="stylesheet" href="css/custom.css">
            <!-- Font-Awesome -->
      <link rel="stylesheet" href="administrator/vendors/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/home.css">
	<title></title>
</head>
<body>
<div class="cont">
            <!-- start item -->
            <div class="item">

               <h4><i class="fa fa-search-plus"></i> Detail Item</h4>
<hr />
<br />
<div class="row">
   <div class="col l5 m12 s12 offset-l1">

   	<!-- Gambar Item -->
      <div class="product-image">
         <img id="myimg" src="foto_produk/<?php echo $detail["foto_produk"];?>" alt="" class="img-responsive">
      </div>
  </div>

  <div class="col l4 m12 s12 offset-l1 detail">
      <!-- Detail Item -->
      <div class="item-title">
         <h4><?php echo $detail["nama_produk"];?></h4>
     </div>
      <p>Kategori <?php echo $detail["kategori"];?></p>
      <p>Deskripsi <?php echo $detail ["stok"];?></p>
      <p>Wilayah <?php echo $detail ["harg_produk"];?></p>
       <a href="https://wa.me/6285211156867" class="btn blue waves-effect waves-light"><i class="fa fa-whatsapp"></i>  Tambahkan ke Cart</a>
	  <button type="button" class="btn red waves-effect waves-light" onclick="window.history.go(-1)">Kembali</button>

<!-- <section class="konten">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="foto_properti/<?php echo $detail["foto"];?>" class="img-responsive">
			</div>
		</div>
	</div>
</section> -->