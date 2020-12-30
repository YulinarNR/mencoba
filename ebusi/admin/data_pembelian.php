           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
           

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <h5 class="m-0 font-weight-bold text-primary">Data Pembelian</h5><hr>

                  <a href="#" class="btn btn-primary"><i class="fas fa-print"></i></a><br /><br />
                  
                  <?php
                  $periksa = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE stok <= 3 ");
                  while ($s = mysqli_fetch_array($periksa)) {
                    if($s['stok']<=3){
                      ?>
                      <script>
                        $(document).ready(function(){
                          $('#pesan_sedia').css("color","red");
                          $('#pesan_sedia').append("<span class='glyphicon glyphicon-asterisk'></span>");
                        });
                      </script>
                      <?php
                      echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok <a style='color:red'>".$s['nama_produk']."</a> yang tersisa kurang dari 3. Silahkan tambah stok lagi </div>";
                      
                    }
                  }
                  ?>

                  <div class="table-responsive">
                    <table class="table datatables table-striped table-hover table-bordered nowrap">
                      <thead>
                        <tr align="center">
                          <th>No</th>
                          <th>Nama Pelanggan</th>
                          <th>Tanggal</th>
                          <th>Total</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        include '../koneksi/koneksi.php';
                        $no = '1';
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_pembelian JOIN tb_user ON tb_pembelian.id_user=tb_user.id_user");
                        while($row = mysqli_fetch_array($data)){ ?>

                          <tr align="center">
                          <td><?php echo $no++; ?></td>
                           <td><?php echo $row['nama_depan'] . ' '. $row['nama_belakang'];?></td>
                           <td><?php echo $row['tanggal_pembelian'] ?></td>
                           <td><?php echo $row['total_pembelian']; ?></td>
                           <td>
                              <a href="index.php?halaman=detail_pembelian&id=<?php echo $row['id_pembelian']; ?>" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>

                           </td> 
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                   
                 </form>
               </div>

             </div>
           </div>