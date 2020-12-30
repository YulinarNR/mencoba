<?php
include '../koneksi/koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM tb_pembelian JOIN tb_user ON tb_pembelian.id_user=tb_user.id_user WHERE tb_pembelian.id_pembelian='$_GET[id]'");
$row = mysqli_fetch_assoc($data);
?>
<!-- <pre><?php //print_r($row); ?></pre> -->
           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
           

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <h5 class="m-0 font-weight-bold text-primary">Data Detail Pembelian</h5><hr>

                  	<div class="form-row">
                  		<div class="form-group col-md-12">
                  		  <table class="table" border="0">
                  			<tr>
                		  		<td>Atas Nama : <b><?php echo $row['nama_depan'] . ' ' . $row['nama_belakang'] ; ?></b> </td>
                         		 <td colspan="1" style="text-align: right;">Tanggal Pembelian : <?php echo $row['tanggal_pembelian']; ?> </td>
                  			</tr>

                      		<tr>
                  				<td>Email   : <b><?php echo $row['email']; ?></b></td>
                  				<td colspan="1" style="text-align: right;"> Total Pembelian : Rp.<?php echo number_format($row['total_pembelian']) ?>,-</td>
                  			</tr>
                  		
                  		</table>

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
                  				<th>Subtotal</th>
                  			</tr>
                  		</thead>
                  		<tbody>
                  			<?php
                  			$no = 1;
                  			$ambil_data = mysqli_query($koneksi, "SELECT * FROM tb_pembelian_produk JOIN tb_produk ON tb_pembelian_produk.id_produk=tb_produk.id_produk
                  			WHERE tb_pembelian_produk.id_pembelian='$_GET[id]' ");
                  			while($row_data = mysqli_fetch_array($ambil_data)){ ?>

                  		
                  			<tr>
                  				<td><?php echo $no++ ?></td>
                  				<td><?php echo $row_data['nama_produk']; ?></td>
                  				<td><?php echo $row_data['beratisi_produk']; ?> kg</td>
                  				<td>Rp. <?php echo number_format( $row_data['harga_produk']); ?>,-</td>
                  				<td><?php echo $row_data['jumlah']; ?></td>
                  				<td>
                  					Rp. <?php echo number_format( $row_data['harga_produk'] * $row_data['jumlah']); ?>,-
                  				</td>
                  			</tr>
                  		<?php } ?>
                  		</tbody>
                  	</table>
                  	
    				
                   <hr>
                   
                 </form>

                 <p>&nbsp;</p>
               </div>

             </div>
           </div>