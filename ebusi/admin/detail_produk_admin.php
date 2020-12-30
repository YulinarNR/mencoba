<?php
include '../koneksi/koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$_GET[id]'");
$row = mysqli_fetch_assoc($data);
?>
           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
           

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <h5 class="m-0 font-weight-bold text-primary">Data Detail Produk</h5><hr>

                  <a  href="index.php?halaman=data_produk" class="btn btn-warning"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> <i class="fas fa-hand-point-left"></i></span></a> <br /><br />

                 
                                 <!-- Card Body -->
               <div class="card-body">
                 <form method="post" enctype="multipart/form-data">
                  <!-- Awal form row -->
                  <div class="form-row">
                   <div class="form-group col-md-5">
                    <center><label style="background-color: rgb(135 206 250); ">Foto Produk</label></center><br>
                    <center><img src="../foto_produk/<?php echo $row['foto_produk'];?>" width="63%"></center><br><br>
                   
                   </div>


                   <div class="form-group col-md-7">
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

                    <tr>
                      <td>Diskon</td>
                      <td><?php echo $row['diskon'];?></td>
                    </tr>

                 
                  </table>

                   </div>
                   </div> <!-- Akhir form row -->


                   <div class="form-row"><!-- Awal Form Row -->
                    <div class="form-group col-md-12">
                    <table class="table">
                      <tr>
                        <td>Informasi Produk <br></td>
                      </tr>
                      <tr>
                        <td><i class="fas fa-plus"></i> <?php echo $row['info_produk'];?></td>
                      </tr>

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
                   <hr>
                   
                 </form>

                 <p>&nbsp;</p>
               </div>

             </div>
           </div>