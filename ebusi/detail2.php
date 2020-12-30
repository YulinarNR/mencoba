<?php
include 'koneksi/koneksi.php';
if ($_POST['rowid']) {
  $id = $_POST['rowid'];
  //mengambil data berdasarkan id
  ?>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$_POST[rowid]'");   
        while($row = mysqli_fetch_array($data)){ ?>
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
        <?php }} ?>



