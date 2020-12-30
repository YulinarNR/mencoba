<!DOCTYPE html>
<html lang="en">

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

  <!-- =======================================================
  * Template Name: Resi - v2.1.0
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php
  session_start();
   // cek apakah yang mengakses halaman ini sudah login
 
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- logo -->
       <a href="index.php" class="logo"><img src="assets/img/polijelogo.png" alt="" class="img-fluid">E-BUSI</a>

<!--       <h1 class="logo"><a href="index.php">fgdfgfyrtuAPK</a></h1> -->

      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">Tentang</a></li>
   
          <li><a href="#portfolio">Galeri</a></li>
          <!-- <li><a href="#">Catalog</a></li> -->
          <li><a href="#team">Katalog</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="daftar.php">Daftar</a></li>
          <li><a href="keranjang.php"><i class="fa fa-shopping-cart"></i> <span class="label label-success cart_count"></span></a></li>


     <!--    <li> <form class="form-inline" action="/action_page.php">
             <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form></li> -->

  

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>SISTEM INFORMASI <br> E-BUSI</h1>
          <ul>
            <li><i class="ri-check-line"></i> Cepat</li>
            <li><i class="ri-check-line"></i> Quo nihil natus ea non pariatur optio occaecati</li>
            <li><i class="ri-check-line"></i> Duis aute irure dolor in reprehenderit in</li>
          </ul>
          <div class="mt-3">
            <a href="#team" class="btn-get-started scrollto">Belanja Sekarang</a>
            <a href="daftar.php" class="btn-get-quote">Belum Punya Akun?</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/page1.jpeg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Kebun Inovasi Polije</h2>
            <img src="gambar/orang.jpeg" height="270px" width="400px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
          Kebun Inovasi bertujuan untuk menciptakan sumber daya manusia yang berkualitas. Beragam koleksi tanaman yang tersedia di Kebun Inovasi adalah semangka, melon, terong, bawang merah, jagung dan juga tanaman jeruk. Kegiatan pengelolaan lahan ini juga melibatkan instruktur yang ahli di bidang pertanian. Instruktur pertanian akan melakukan edukasi materi dan praktik langsung di lahan ini. Di antara materi yang akan diberikan yakni
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Cara bercocok tanam di lahan kering dan basah</li>
              <li><i class="ri-check-double-line"></i> Cara perawatan tanaman</li>
              <li><i class="ri-check-double-line"></i>Instruktur pertanian juga akan mengajarkan proses mencampurkan pupuk organik</li>
            </ul>
           </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="section-title">
          <h2>Galery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb1.jpg" data-gall="portfolioGallery" class="venobox" title="Sayur"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb3.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb2.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kb9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kb9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Catalog Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Katalog</h2>
          <p></p>
        </div>

             <div class="item">
             <div class="row">     
              <?php
              include 'koneksi/koneksi.php';
              $data = mysqli_query($koneksi, "SELECT * FROM tb_produk");
              while($row = mysqli_fetch_array($data)){ ?>
              
              
               <div class="card mr-4 ml-4" style="width: 16rem;">
               <div class="card-body bg-white"> 
                  <div class="card-image"> 
                     <a href="detail.php?id=<?php echo $row['id_produk'];?>">
                        <center><img src="foto_produk/<?php echo $row['foto_produk'];?>" class="responsive-img"  width="150"></center>
                     </a>
                  </div> 
              </div>
              <hr>
              

                  <div class="card-action center">

                    
                  <p><center><strong><?php echo $row['nama_produk'];?></strong><br>
                      <?php echo "Rp.";?><?php echo $row['harga_produk'];?>
                      </center></p>
                  
                     <form action="" method="post">
                        <center>
                        <!-- <a class="btn btn-danger" href="detail.php?id=<?php// echo $row['id_produk'];?>">sds</a> -->
                        <a href="#Modal-detail?id=<?php echo $row['id_produk']; ?>" class="btn btn-primary text-white" data-toggle="modal" data-target="#Modal-detail" role="button">
                        <i class="fas fa-search-plus text-white"></i> Detail Produk
                        </a>  
                        </center>

                     </form>
                  </div>
               </div>
            
             <?php } ?>
         </div>
      </div>

      </div>

 <!-- Modal Detail Produk-->
<div class="modal fade" tabindex="-1" id="Modal-detail" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?php
        
        include 'koneksi/koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk");
        
        $row = mysqli_fetch_array($data)

        # while(){ 
            ?>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-4">
            <img src="foto_produk/<?php echo $row['foto_produk'];?>" width="100" height="200">
            </div>

              <div class="form-group col-md-8">
                <table class="table">
                   <tr>
                      <td>Nama Produk</td>
                      <td><?php echo $row['nama_produk'];?></td>
                    </tr>

                    <tr>
                      <td>Kategori</td>
                      <td><?php echo $row['kategori'];?></td>
                    </tr>

                    <tr>
                      <td>Stok</td>
                      <td><?php echo $row['stok'];?></td>
                    </tr>

                    <tr>
                      <td>Berat atau Isi Produk</td>
                      <td><?php echo $row['beratisi_produk'];?></td>
                    </tr>

                    <tr>
                      <td>Harga Produk</td>
                      <td>Rp.<?php echo number_format($row['harga_produk']) ?>,-</td>
                    </tr>
                    
                </table>
              
              </div>
       
          </div>
 <pre><?php print_r($row) ?></pre>
          <!-- form quantity -->
          <form class="form-inline" id="productForm">
            <div class="form-group">
              <div class="input-group col-sm-5">
                          
                <span class="input-group-btn">
                  <button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
                </span>
                <input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
                
                <span class="input-group-btn">
                  <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i></button>
                 </span>
                <input type="hidden" value="#" name="id">

              </div>
             <button type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
            </div>
          </form>

          <form action="#" method="POST" enctype="multipart/form-data">
              <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </form>    
        </div>  

    </div>
  </div>
</div>

   
    </section>

    <!-- ======= Testimoni Section ======= -->
    <section id="pricing" class="pricing">
       <div class="container">

      <div class="section-title">
          <h2>SERVICES</h2>
          <p>Sekarang gak usah takut lagi kalau ingin membeli buah dan sayur online,karena ada E-BUSI yang menyediakan buah dan sayuran segar.Bukan hanya segar,harganya juga bikin kantong happy.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h3>PELAYANAN TERBAIK</h3>
            <img src="gambar/pelayanan terbaik.jpg" >
            <ul>
              <li><i class="bx bx-check"></i>Respon yang cepat dan aman </li>
              <li><i class="bx bx-check"></i>Berbelanja nyaman </li>
              
            </ul>
            
          </div>

          <div class="col-lg-4 box featured">
            <h3>KUALITAS TERBAIK</h3>
            <img src="gambar/kualitas terbaik.jpg">
            <ul>
              <li><i class="bx bx-check"></i> Kualitas sudah terjamin </li>
              <li><i class="bx bx-check"></i> Pesanan aman sampai tujuan</li>
        
            </ul>
            
          </div>

          <div class="col-lg-4 box">
            <h3>BUAH DAN SAYURAN SEGAR</h3>
            <img src="gambar/buah dan seyuran segar.jpg">
            <ul>
              <li><i class="bx bx-check"></i> Buah/sayur segar dan bersih </li>
              <li><i class="bx bx-check"></i> Langsung petik dari kebun</li>
          
            </ul>
            
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Jl. Mastrip Kotak Pos 164</p>
                  <p>Jember, Jawa Timur, Indonesia</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>ujang_tri@polije.ac.id<br>tosan@polije.ac.id</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>08124944360<br>081335703958</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0"><!-- Maps -->
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4696.704327963119!2d113.72202653559624!3d-8.15816096065096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sState%20Polytechnic%20of%20Jember!5e0!3m2!1sen!2sid!4v1605834966884!5m2!1sen!2sid" width="500" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
                
         
            </form>
          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->



<footer id="footer">   <!-- footer -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Resi</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <!-- Whatsapp -->
  <script type="text/javascript">
    (function () {
    var options = {
    whatsapp: "+6285211156867", // WhatsApp number
    telegram: "6285211156867", //Telegram bot username
    greeting_message : "Hayoloh",

    call_to_action: "Message Us", // Call to action
    position: "left", // Position may be 'right' or 'left'
    order : "whatsapp, telegram"
            };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
           })();
   </script>
   <!-- /WhatsHelp.io widget -->

   <script>
$(function(){
  $('#add').click(function(e){
    e.preventDefault();
    var quantity = $('#quantity').val();
    quantity++;
    $('#quantity').val(quantity);
  });
  $('#minus').click(function(e){
    e.preventDefault();
    var quantity = $('#quantity').val();
    if(quantity > 1){
      quantity--;
    }
    $('#quantity').val(quantity);
  });

});
</script>

</body>

</html>